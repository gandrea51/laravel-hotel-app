<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        /*
        \App\Models\User::create([
            'name' => 'Marco Rossi',
            'email' => 'marcorossi123@gmail.com',
            'password' => Hash::make('Zuzzurellone23!'),
            'role_id' => 1,
        ]);

        \App\Models\User::create([
            'name' => 'Alessia Verdi',
            'email' => 'verdialessia98@email.it',
            'password' => Hash::make('Lombrico45rosso!'),
            'role_id' => 2,
        ]);

        \App\Models\User::create([
            'name' => 'Luca Neri',
            'email' => 'lucaneri45@email.it',
            'password' => Hash::make('Antananarivo67!'),
            'role_id' => 4,
        ]);
        */
    }
}
