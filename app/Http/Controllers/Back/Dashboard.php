<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Websettings;

class Dashboard extends Controller
{
    public function index(){
      return view('back.dashboard');
    }


}
