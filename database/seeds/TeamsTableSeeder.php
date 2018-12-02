<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->delete();

        DB::table('teams')->insert([
            'team' => 'Equipo Verde',
            'color' => 'green'
        ]);

        DB::table('teams')->insert([
            'team' => 'Equipo Rosa',
            'color' => 'pink'
        ]);

        DB::table('teams')->insert([
            'team' => 'Equipo Violeta',
            'color' => 'violet'
        ]);

        DB::table('teams')->insert([
            'team' => 'Equipo Azul',
            'color' => 'blue'
        ]);
    }
}
