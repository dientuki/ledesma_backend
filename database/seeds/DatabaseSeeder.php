<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();

        $this->call(BusinessTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(Company2TeamTableSeeder::class);
        $this->call(PointsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}
