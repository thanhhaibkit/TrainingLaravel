<?php

use Illuminate\Database\Seeder;

use function GuzzleHttp\Promise\each;

class FakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fake
        factory(App\Models\Account::class, 2)->create()->each(function ($account) {
            $account->users()->saveMany(factory(App\Models\User::class, 3)->make());
            $account->sites()->saveMany(factory(App\Models\Site::class, rand(1,3))->make());
        });

    }
}
