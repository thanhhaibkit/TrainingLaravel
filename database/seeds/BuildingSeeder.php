<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buildings')->insert([
            'site_id' => DB::table('sites')->where('code', 'HN1')->first()->id,
            'code' => 'HN01',
            'name' => 'HT Ha Noi Tower'
        ]);

        DB::table('buildings')->insert([
            'site_id' => DB::table('sites')->where('code', 'SG1')->first()->id,
            'code' => 'SG01',
            'name' => 'HT1 Centre',
            'has_block' => true
        ]);

        DB::table('buildings')->insert([
            'site_id' => DB::table('sites')->where('code', 'SG1')->first()->id,
            'code' => 'SG02',
            'name' => 'HT2 Front Tower'
        ]);
    }
}
