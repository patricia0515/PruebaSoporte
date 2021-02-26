<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        /* Vamos a utilizar un metodo de la claseSeeder
        y le damos la directriz para que use la clase AreaSeeder*/
        $this->call(AreaSeeder::class);
        $this->call(UserSeeder::class);
    }
}
