<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Websettings;
use App\Models\Sitehits;
use App\Models\Userdemands;


class Dashboard extends Controller
{
    protected $_demandsGraph;
    public function index(){
        $hit = Sitehits::orderBy('time', 'desc')->take(5)->get();
        $demandsGraph['offical'] = Userdemands::whereProduct('Kurumsal Web Sitesi')->count();
        $demandsGraph['commerce'] = Userdemands::whereProduct('E-Ticaret')->count();
        $demandsGraph['add'] = Userdemands::whereProduct('Tanitim Web Sitesi')->count();
        $demandsGraph['youtube'] = Userdemands::whereProduct('Youtube Modulu')->count();
        $this->_demandsGraph['total'] = Userdemands::all()->count();
        $this->_demandsGraph['totalUnread'] = Userdemands::whereStatus(0)->count();
        $demandsGraph['total'] = $this->_demandsGraph['total'];
        $demandsGraph['totalUnread'] = $this->_demandsGraph['totalUnread'];

        $demandsGraph['totalHits'] = Sitehits::sum('hits');
        $demandsGraph['countPercerntUnread'] = $this->countUnread();
        return view('back.dashboard',compact('hit'),compact('demandsGraph'));
    }

    public function countUnread()
    {
        $count=($this->_demandsGraph['total']-$this->_demandsGraph['totalUnread'] )*100;
        return round(100-($count/$this->_demandsGraph['total']));
    }


}
