<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DemandController extends Controller
{
    public function index()
    {
        $contact=Contact::orderBy('id','ASC')->get();
        return view('back.demand.index',compact('contact'));
    }
}
