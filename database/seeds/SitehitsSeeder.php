<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitehitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0;$i<10;$i++) {
            DB::table('sitehits')->insert([
                'hits' => $i,
                'time' => date('d-m-Y'),
            ]);
        }
    }
}
