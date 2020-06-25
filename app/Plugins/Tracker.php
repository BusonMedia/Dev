<?php

namespace App\Plugins;
use Illuminate\Support\Facades\Session;
use App\Models\Sitehits;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Tracker
{

    public static function getCurrentHit()
    {
        return Sitehits::latest('upload_time')->first();
    }
    public static function hit() {

        if(!Session::get('ip_address'))
        {
            $ip = Request::getClientIp();
            Session::put('ip_address',$ip);
            $siteHits= Sitehits::firstOrCreate(['time'=>date('d-m-Y')]);
            $siteHits->time=date('d-m-Y');
            $siteHits->increment('hits');
            $siteHits->save();
        }

    }


}