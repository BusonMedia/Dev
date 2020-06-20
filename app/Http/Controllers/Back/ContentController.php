<?php

namespace App\Http\Controllers\back;


use App\Http\Controllers\Controller;
use App\Models\Websettings;
use Illuminate\Http\Request;
use App\Models\Imagemanangment;


class ContentController extends Controller
{
    public function Index()
    {
        $articles=Imagemanangment::all();
        return view('back.content.index',compact('articles'));
    }

    public function update(Request $request)
    {
        $settings=Imagemanangment::findOrFail($request->id);
        if($request->hasFile('image')){
            $imageName=str_slug($settings->widget_name).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $settings->image_path='uploads/'.$imageName;
        }
        $settings->title=$request->title;
        $settings->save();
        return redirect()->route('admin.content.index')->with('success','Mesajınız İletildi');

    }

}
