<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        $this->call(LaratrustSeeder::class);
        $user = User::factory()->create([
            'name' => 'Faraimunashe',
            'email' => 'farai@gmail.com',
        ]);
        $user->addRole('mda');
    }
}
