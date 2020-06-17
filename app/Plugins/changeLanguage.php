<?php


namespace App\Plugins;
use Illuminate\Support\Facades\Session;




class changeLanguage
{
public function languageDedect()
{
    return app()->setLocale(Session::get('locale'));

}

}
