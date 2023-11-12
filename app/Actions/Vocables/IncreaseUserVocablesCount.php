<?php

declare(strict_types=1);

namespace App\Actions\Vocables;

use App\Models\User;

class IncreaseUserVocablesCount
{
    public function execute(User $user)
    {
        $user->incrementVocables();

    }
}
