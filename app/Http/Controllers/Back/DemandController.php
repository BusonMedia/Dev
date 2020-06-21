<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Userdemands;
use Illuminate\Http\Request;

class DemandController extends Controller
{
    public function index()
    {
        $contact=Userdemands::orderBy('created_at','desc')->get();
        return view('back.demand.index',compact('contact'));
    }

    public function switch(Request $request){
        $page=Userdemands::findOrFail($request->id);
        $page->status=$request->statu=="true" ? 1 : 0 ;
        $page->save();
    }
}
