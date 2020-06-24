<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blocks')->insert([
            'building_id' => DB::table('buildings')->where('code', 'SG01')->first()->id,
            'code' => 'SG001',
            'name' => 'Centre Block A'
        ]);

        DB::table('blocks')->insert([
            'building_id' => DB::table('buildings')->where('code', 'SG01')->first()->id,
            'code' => 'SG002',
            'name' => 'Centre Block B'
        ]);
    }
}
