<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $originAccountId = DB::table('accounts')->where('is_origin', true)->first()->id;

        DB::table('sites')->insert([
            'account_id' => $originAccountId,
            'code' => 'HN1',
            'name' => 'HT Ha Noi Tower'
        ]);

        DB::table('sites')->insert([
            'account_id' => $originAccountId,
            'code' => 'SG1',
            'name' => 'Sai Gon HT Town'
        ]);
    }
}
