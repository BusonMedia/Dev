<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagemanangmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for($i=0;$i<4;$i++) {
            DB::table('imagemanangments')->insert([
                'widget_name'=>'widget_portfolio',
                'image_path'=>'NULL',
                'page_tag'=>'home_page'
            ]);
        }
    }
}
