<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserdemandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=['Kurumsal Web Sitesi','Kurumsal Web Sitesi','Kurumsal Web Sitesi','Kurumsal Web Sitesi','Kurumsal Web Sitesi','Kurumsal Web Sitesi','Kurumsal Web Sitesi','E-Ticaret','E-Ticaret','E-Ticaret','Youtube Modulu','Tanitim Web Sitesi','E-Ticaret','Tanitim Web Sitesi','E-Ticaret','Tanitim Web Sitesi'];
        foreach($product as $products) {
            DB::table('userdemands')->insert([
                'name' => 'Samed ALP',
                'email' => 'sameddalp@gmail.com',
                'phone' => '5364920391',
                'product' => $products,
                'message' => 'Site istiyorum',
            ]);
        }    }
}
