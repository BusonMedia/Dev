<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Websettings;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class profileController extends Controller
{
    public function index()
    {
        $admin=Admin::findOrFail(Auth::user()->id);
        return view('back.profile',compact('admin'));
    }
    public function update(Request $request)
    {
        $Admin=Admin::findOrFail(Auth::user()->id);
        $Admin->name=$request->name;
        if(!empty($request->sifre))
        {
            $Admin->password=bcrypt($request->sifre);
        }
        Session::put('user',$request->name);
        Auth::user()->name=$request->name;
        $Admin->save();
        return redirect()->route('admin.profile.index')->with('success','Güncelleme Başarılı');

        return view ('back.profile',compact('Admin'));
    }

}
