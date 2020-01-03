<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HouseNameSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $names = [
            "Nionargal",
            "Egiond",
            "Brisirion",
            "Siriande",
            "Heladhell",
            "Thimlione",
            "Formene",
            "Arlon",
            "Dolonde",
            "Sirisea"
        ];
        foreach ($names as $name) {
            DB::table('house_names')->insert([
                'name' => $name,
            ]);
        }
    }
}
