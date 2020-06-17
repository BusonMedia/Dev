<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function articleCount(){
      return $this->hasMany('App\Models\Article','category_id','id')->count();
                    //Bağlanacağımız Model  //Bağlanacağımız Sütun   //Çekeceğimiz Veri
    }
}
