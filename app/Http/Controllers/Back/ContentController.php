<?php

namespace App\Http\Controllers\back;


use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Websettings;
use Illuminate\Http\Request;
use App\Models\Imagemanangment;
use Illuminate\Support\Facades\DB;



class ContentController extends Controller
{
    public function Index()
    {
        $select = Imagemanangment::groupBy('widget_name')->get();
        $articles=DB::table('imagemanangments')->paginate(5);
        return view('back.content.index',compact('articles'),compact('select'));
    }

    public function update(Request $request)
    {


        $settings=Imagemanangment::findOrFail($request->id);
        if($request->hasFile('image')){
            $imageName=str_slug($settings->widget_name.$request->id).$this->getToken(10,20).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $settings->image_path='uploads/'.$imageName;
        }
        $settings->title=$request->title;
        $settings->save();
        return redirect()->route('admin.content.index')->with('success','Mesajınız İletildi');

    }

    private function getToken($length, $seed){
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "0123456789";

        mt_srand($seed);      // Call once. Good since $application_id is unique.

        for($i=0;$i<$length;$i++){
            $token .= $codeAlphabet[mt_rand(0,strlen($codeAlphabet)-1)];
        }
        return $token;
    }

    public function store(Request $request)
    {
        $settings=new Imagemanangment();
        $currentId = Imagemanangment::orderBy('id', 'desc')->first()->id + 1;

        if($request->hasFile('image')){
            $imageName=str_slug($request->title.$currentId).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $settings->image_path='uploads/'.$imageName;
        }
        $settings->title=$request->title;
        $settings->widget_name=$request->widget;
        $settings->save();
        return redirect()->route('admin.content.index')->with('success','Mesajınız İletildi');
    }
    public function switch(Request $request){
        $page=Imagemanangment::findOrFail($request->id);
        $page->status=$request->statu=="true" ? 1 : 0 ;
        $page->save();
    }

}
