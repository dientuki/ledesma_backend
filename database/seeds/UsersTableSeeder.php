<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin',
            'password' => bcrypt('notallow'),
            'rol' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'CasaAle',
            'email' => 'CasaAle',
            'password' => bcrypt('Ale5746'),
            'fk_company' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'LibreriaMayorista',
            'email' => 'LibreriaMayorista',
            'password' => bcrypt('Libre2193'),
            'fk_company' => 2
        ]);

        DB::table('users')->insert([
            'name' => 'CasaConde',
            'email' => 'CasaConde',
            'password' => bcrypt('Conde5349'),
            'fk_company' => 3
        ]);

        DB::table('users')->insert([
            'name' => 'CasaLema',
            'email' => 'CasaLema',
            'password' => bcrypt('Lema2299'),
            'fk_company' => 4
        ]);

        DB::table('users')->insert([
            'name' => 'FranPapel',
            'email' => 'FranPapel',
            'password' => bcrypt('Fren5111'),
            'fk_company' => 5
        ]);

        DB::table('users')->insert([
            'name' => 'Maipu47',
            'email' => 'Maipu47',
            'password' => bcrypt('Maipu4242'),
            'fk_company' => 6
        ]);

        DB::table('users')->insert([
            'name' => 'Mali',
            'email' => 'Mali',
            'password' => bcrypt('Mali9666'),
            'fk_company' => 7
        ]);

        DB::table('users')->insert([
            'name' => 'Staples',
            'email' => 'Staples',
            'password' => bcrypt('Stap3617'),
            'fk_company' => 8
        ]);

        DB::table('users')->insert([
            'name' => 'Beltrami',
            'email' => 'Beltrami',
            'password' => bcrypt('Beltri4349'),
            'fk_company' => 9
        ]);
    }
}
