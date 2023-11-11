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
		Vocable::create(['foreign_term' => 'où', 'native_term' => 'wo', 'level' => 1]);
		Vocable::create(['foreign_term' => 'combien de', 'native_term' => 'wie viel', 'level' => 2]);
		Vocable::create(['foreign_term' => 'pourquoi', 'native_term' => 'warum', 'level' => 1]);
		Vocable::create(['foreign_term' => 'quand', 'native_term' => 'wann', 'level' => 1]);
		Vocable::create(['foreign_term' => 'que', 'native_term' => 'was', 'level' => 1]);
		Vocable::create(['foreign_term' => 'qui', 'native_term' => 'wer', 'level' => 2]);
		Vocable::create(['foreign_term' => 'aimer', 'native_term' => 'mögen', 'level' => 0]);
		Vocable::create(['foreign_term' => 'parler', 'native_term' => 'sprechen', 'level' => 0]);
		Vocable::create(['foreign_term' => 'travailler', 'native_term' => 'arbeiten', 'level' => 0]);
		Vocable::create(['foreign_term' => 'apprendre', 'native_term' => 'lernen', 'level' => 1]);
		Vocable::create(['foreign_term' => 'descendre', 'native_term' => 'heruntergehen', 'level' => 1]);
		Vocable::create(['foreign_term' => 'dire', 'native_term' => 'sagen', 'level' => 0]);
		Vocable::create(['foreign_term' => 'prendre', 'native_term' => 'nehmen', 'level' => 1]);
		Vocable::create(['foreign_term' => 'dormir', 'native_term' => 'schlafen', 'level' => 1]);

    }
}
