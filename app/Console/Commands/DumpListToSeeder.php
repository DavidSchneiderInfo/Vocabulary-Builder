<?php

namespace App\Console\Commands;

use App\Models\Vocable;
use Illuminate\Console\GeneratorCommand;

class DumpListToSeeder extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dump:seeder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dump vocables to seeder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $replacement = '';

        foreach (Vocable::all() as $vocable) {
            $replacement .= "\t\tVocable::create(['foreign_term' => '$vocable->foreign_term', 'native_term' => '$vocable->native_term', 'level' => $vocable->level]);".PHP_EOL;
        }

        file_put_contents(
            database_path('seeders/VocablesSeeder.php'),
            str_replace('//SEEDS//', $replacement, $this->getStub())
        );
    }

    protected function getStub(): string
    {
        return file_get_contents(resource_path('stubs/Seeder.stub'));
    }
}
