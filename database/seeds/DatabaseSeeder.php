<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
        $this->call([MaestrosTableSeeder::class]);
        $this->call(SeccionesTableSedeer::class);
        $this->call(PersonalTableSeeder::class);

    }
}
