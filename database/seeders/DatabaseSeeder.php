<?php

namespace Database\Seeders;

use App\Models\Medico;
use App\Models\User;
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
        \App\Models\Medico::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'medico_id' => Medico::all()->random()->id,
        ]);



        User::create([
            'name' => 'ray',
            'email' => 'ray@gmail.com',
            'password' => bcrypt('raymon123'),
            'medico_id' => Medico::all()->random()->id,
        ]);
    }
}
