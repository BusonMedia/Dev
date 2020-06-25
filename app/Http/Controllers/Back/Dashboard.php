<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Websettings;
use App\Models\Sitehits;
use App\Models\Userdemands;


class Dashboard extends Controller
{
    public function index(){
        $hit = Sitehits::orderBy('time', 'desc')->take(5)->get();
        $demandsGraph['offical'] = Userdemands::whereProduct('Kurumsal Web Sitesi')->count();
        $demandsGraph['commerce'] = Userdemands::whereProduct('E-Ticaret')->count();
        $demandsGraph['add'] = Userdemands::whereProduct('Tanitim Web Sitesi')->count();
        $demandsGraph['youtube'] = Userdemands::whereProduct('Youtube Modulu')->count();
        $demandsGraph['total'] = Userdemands::all()->count();
        $demandsGraph['totalHits'] = Sitehits::sum('hits');
        return view('back.dashboard',compact('hit'),compact('demandsGraph'));
    }


}
