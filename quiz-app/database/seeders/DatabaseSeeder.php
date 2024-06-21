<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            QuizSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            ResultSeeder::class,
            MetalGearSolid3QuizSeeder::class,
            EldenRingQuizSeeder::class,
            HollowKnightQuizSeeder::class,
            PokemonGoldSilverQuizSeeder::class,
        ]);
    }
}
