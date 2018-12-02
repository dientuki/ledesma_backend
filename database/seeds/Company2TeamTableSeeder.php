<?php

use Illuminate\Database\Seeder;

class Company2TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company2team')->delete();

        $company = 9;
        $team = 4;

        for ($c = 1; $c <= $company; $c++) {
            for ($t = 1; $t <= $team; $t++) {
                DB::table('company2team')->insert([
                    'fk_company' => $c,
                    'fk_team' => $t
                ]);
            }
        }
    }
}
