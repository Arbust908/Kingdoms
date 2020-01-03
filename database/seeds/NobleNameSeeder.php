<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NobleNameSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $names = [
            "Eadwald" => 'male',
            "Frarder" => 'male',
            "Coenge" => 'male',
            "Teowy" => 'male',
            "Giles" => 'male',
            "Georguy" => 'male',
            "Wyne" => 'male',
            "Edwam" => 'male',
            "Richye" => 'male',
            "Cyne" => 'male',
            "Mery" => 'female',
            "Witha" => 'female',
            "Frytha" => 'female',
            "Wina" => 'female',
            "Enen" => 'female',
            "Joyce" => 'female',
            "Alix" => 'female',
            "Enell" => 'female',
            "Sabel" => 'female',
            "Aerblith" => 'female'
        ];
        foreach ($names as $name => $gender) {
            DB::table('noble_names')->insert([
                'name' => $name,
                'isFemale' => ($gender == 'female')
            ]);
        }
    }
}

