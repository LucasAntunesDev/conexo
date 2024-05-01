<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PalavrasSeeder::class,
            ProfessoresSeeder::class,
            CommentSeeder::class,
            PalavrasSeeder::class,
            ProfessoresSeeder::class,
            DisciplinasSeeder::class,
            GruposSeeder::class,
            GruposPalavrasSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
