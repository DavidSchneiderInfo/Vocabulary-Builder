<?php

declare(strict_types=1);

namespace App\Actions\Vocables;

use App\Models\User;
use Illuminate\Contracts\Auth\Guard;

class GetVocableStats
{
    public function __construct(
        private readonly Guard $guard,
        private readonly GetTrainableVocables $getTrainableVocables
    ) {}

    public function execute(): array
    {
        /** @var User $user */
        $user = $this->guard->user();

        return [
            'remaining' => $this->getTrainableVocables->execute($user)->count(),
            'total' => $user->vocablesCount,
        ];
    }
}
