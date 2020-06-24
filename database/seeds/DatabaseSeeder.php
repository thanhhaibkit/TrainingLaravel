<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Origin data
        $this->call(AccountSeeder::class);
        $this->call(UserSeeder::class);

        // HT data
        /*
        $this->call(SiteSeeder::class);
        $this->call(BuildingSeeder::class);
        $this->call(BlockSeeder::class);
        $this->call(RoomSeeder::class);
        */

        // Fake data
        $this->call(FakeSeeder::class);
    }
}
