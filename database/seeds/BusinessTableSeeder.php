<?php

use Illuminate\Database\Seeder;

class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business')->delete();

        DB::table('business')->insert([
            'company' => 'Casa Ale'
        ]);

        DB::table('business')->insert([
            'company' => 'Librería Mayorista'
        ]);

        DB::table('business')->insert([
            'company' => 'Casa Conde'
        ]);

        DB::table('business')->insert([
            'company' => 'Casa Lema'
        ]);

        DB::table('business')->insert([
            'company' => 'Fran Papel'
        ]);

        DB::table('business')->insert([
            'company' => 'Maipú 47'
        ]);

        DB::table('business')->insert([
            'company' => 'Mali'
        ]);

        DB::table('business')->insert([
            'company' => 'Staples'
        ]);

        DB::table('business')->insert([
            'company' => 'Beltrami'
        ]);
    }
}
