<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class websettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('websettings')->insert([
            'title'=>'AYOS MEDYA',
            'description'=>'AYOS MEDYA WEB TASARIM-MEDYA',
            'slug'=>str_slug('AYOS MEDYA'),
            'icon'=>'icon',
            'status'=>1,
            'hit'=>0
        ]);
    }
}
