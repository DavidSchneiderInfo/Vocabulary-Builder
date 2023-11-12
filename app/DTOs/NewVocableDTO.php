<?php

declare(strict_types=1);

namespace App\DTOs;

final class NewVocableDTO
{
    public function __construct(
        private readonly string $foreign_term,
        private readonly string $native_term
    ) {}

    public function toArray(): array
    {
        return [
            'foreign_term' => $this->foreign_term,
            'native_term' => $this->native_term,
        ];
    }
}
