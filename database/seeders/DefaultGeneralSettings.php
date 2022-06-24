<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DefaultGeneralSettings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_general_setting_info')->insert([
            'dvd_price' => 20,
            'bluray_price' => 25
        ]);
    }
}
