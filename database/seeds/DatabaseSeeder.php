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
        // $this->call(UsersTableSeeder::class);
        $this->call([
            HouseNameSeeder::class,
            NobleNameSeeder::class,
            FamilyNameSeeder::class,
            DeathCauseSeeder::class
        ]);
    }
}
