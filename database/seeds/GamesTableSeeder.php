<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->delete();

        DB::table('games')->insert([
            'game' => 'Cruzados'
        ]);

        DB::table('games')->insert([
            'game' => 'Cara de galleta'
        ]);

        DB::table('games')->insert([
            'game' => 'Ping pong plog'
        ]);

        DB::table('games')->insert([
            'game' => 'Torre de vasos'
        ]);

        DB::table('games')->insert([
            'game' => 'El soplón'
        ]);

        DB::table('games')->insert([
            'game' => 'Mano veloz'
        ]);

        DB::table('games')->insert([
            'game' => 'La grúa'
        ]);

        DB::table('games')->insert([
            'game' => 'Vasos en fila'
        ]);

        DB::table('games')->insert([
            'game' => 'Conectados'
        ]);
    }
}
