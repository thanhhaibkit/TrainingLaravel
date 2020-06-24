<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'building_id' => DB::table('buildings')->where('code', 'HN01')->first()->id,
            'code' => 'HN0001',
            'name' => 'Room HN0001'
        ]);

        DB::table('rooms')->insert([
            'building_id' => DB::table('buildings')->where('code', 'HN01')->first()->id,
            'code' => 'HN0002',
            'name' => 'Room HN0002'
        ]);

        DB::table('rooms')->insert([
            'block_id' => DB::table('blocks')->where('code', 'SG001')->first()->id,
            'code' => 'RSG001001',
            'name' => 'Room Centre A 1'
        ]);

        DB::table('rooms')->insert([
            'block_id' => DB::table('blocks')->where('code', 'SG001')->first()->id,
            'code' => 'RSG001002',
            'name' => 'Room Centre A 2'
        ]);

        DB::table('rooms')->insert([
            'block_id' => DB::table('blocks')->where('code', 'SG002')->first()->id,
            'code' => 'RSG002001',
            'name' => 'Room Centre B 1'
        ]);

        DB::table('rooms')->insert([
            'building_id' => DB::table('buildings')->where('code', 'SG02')->first()->id,
            'code' => 'RSG020001',
            'name' => 'Room Front 1'
        ]);

        DB::table('rooms')->insert([
            'building_id' => DB::table('buildings')->where('code', 'SG02')->first()->id,
            'code' => 'RSG020002',
            'name' => 'Room Front 2'
        ]);
    }
}
