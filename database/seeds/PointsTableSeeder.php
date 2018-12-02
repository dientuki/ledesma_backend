<?php

use Illuminate\Database\Seeder;

class PointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->delete();

        $games = 9;
        $team = 36;

        for ($g = 1; $g <= $games; $g++) {
            for ($t = 1; $t <= $team; $t++) {
                DB::table('points')->insert([
                    'point' => 0,
                    'fk_game' => $g,
                    'fk_c2t' => $t
                ]);
            }
        }
    }
}
