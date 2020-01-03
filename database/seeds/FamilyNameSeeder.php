<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FamilyNameSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $names = [
            "Sehill",
            "Pamor",
            "Baburh",
            "Gaham",
            "Cawold",
            "Thuydale",
            "Leford",
            "Wheaford",
            "Fystead",
            "Paleah"
        ];
        foreach ($names as $name) {
            DB::table('family_names')->insert([
                'name' => $name,
            ]);
        }
    }
}

