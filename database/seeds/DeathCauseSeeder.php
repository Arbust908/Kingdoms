<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeathCauseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $causes = [
            'disease'=> '0-200',
            'natural causes'=> '0-200',
            'plague'=> '0-200',
            'assassination'=> '0-200',
            'old age'=> '50-200',
            'poisoning'=> '0-200',
            'gout'=> '0-200',
            'senility'=> '50-200',
            'battlefield wounds'=> '10-200',
        ];
        foreach ($causes as $cause => $age) {
            DB::table('death_causes')->insert([
                'name' => $cause,
                'minAge' => explode("-", $age)[0],
                'maxAge' => explode("-", $age)[1],
            ]);
        }
    }
}
