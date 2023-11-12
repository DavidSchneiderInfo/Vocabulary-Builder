<?php

declare(strict_types=1);

namespace App\Actions\Vocables;

use App\DTOs\NewVocableDTO;
use App\Models\User;
use App\Models\Vocable;
use Illuminate\Contracts\Auth\Guard;

class AddVocableAction
{
    public function __construct(
        private readonly Guard $guard,
        private readonly IncreaseUserVocablesCount $increaseUserVocablesCount
    ) {}

    public function execute(NewVocableDTO $dto)
    {
        /** @var User $user */
        $user = $this->guard->user();

        $user->vocables()->save(new Vocable($dto->toArray()));

        $this->increaseUserVocablesCount->execute($user);
    }
}
