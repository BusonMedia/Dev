<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admins=['ahmetbayrakci','samedalp','oguzhankarakas','yunusahmetalp'];
      $pass=['ahmetb@gmail.com','sameddalp@gmail.com','oguzhannk2531@gmail.com','yunusahmetalp@gmail.com'];
      for($i=0;$i<4;$i++) {
          DB::table('admins')->insert([
              'name' => $admins[$i],
              'email' => $pass[$i],
              'password' => bcrypt(123456),
          ]);
      }
    }
}
