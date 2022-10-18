<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Tarefa;
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
        // $this->call([
        //     UserSeeder::class,
        // ]);

        User::factory(20)->create();
        Categoria::factory(20)->create();
        Tarefa::factory(20)->create();
    }
}
