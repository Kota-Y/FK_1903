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
        $this->call(SneakersTableSeeder::class);
        $this->call(TradesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
