<?php

namespace Database\Seeders;

use App\Models\Vocable;
use Illuminate\Database\Seeder;

class VocablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vocable::create(['foreign_term' => 'comment', 'native_term' => 'wie', 'level' => 0]);
        Vocable::create(['foreign_term' => 'où', 'native_term' => 'wo', 'level' => 0]);
        Vocable::create(['foreign_term' => 'combien de', 'native_term' => 'wie viel', 'level' => 1]);
        Vocable::create(['foreign_term' => 'pourquoi', 'native_term' => 'warum', 'level' => 0]);
        Vocable::create(['foreign_term' => 'quand', 'native_term' => 'wann', 'level' => 1]);
        Vocable::create(['foreign_term' => 'que', 'native_term' => 'was', 'level' => 0]);
        Vocable::create(['foreign_term' => 'qui', 'native_term' => 'wer', 'level' => 1]);
    }
}
