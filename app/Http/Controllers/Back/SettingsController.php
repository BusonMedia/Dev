<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Websettings;
use Illuminate\Http\Request;
use Validator;

class SettingsController extends Controller
{
    public function index()
    {
        $setting=Websettings::all();
        return view ('back.settings',compact('setting'));
    }

    public function update(Request $request)
    {
        $setting=Websettings::all();

        $rules=[
            'title'=>'required|min:5',
            'description'=>'required|min:5'
        ];



        $validate=Validator::make($request->post(),$rules);
        if($validate->fails()){
            return redirect()->route('admin.settings.index')->withErrors($validate)->withInput();
        }
        if($request->status=='on')$request->status=1; else $request->status=0;
        if($request->blog=='on')$request->blog=1; else $request->blog=0;
        $settings=Websettings::findOrFail(1);

        if($request->hasFile('image')){
            $imageName=str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $settings->icon='uploads/'.$imageName;
        }

        $settings->title=$request->title;
        $settings->description=$request->description;
        $settings->status=$request->status;
        $settings->blog_status=$request->blog;
        $settings->save();
        return redirect()->route('admin.settings.index')->with('success','Mesajınız İletildi');

        return view ('back.settings',compact('setting'));
    }
}
