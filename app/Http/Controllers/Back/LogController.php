<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Userlogs;

class LogController extends Controller
{
    public function index()
    {
        $user=Userlogs::all();
        return view('back.logs.index',compact('user'));
    }
}
