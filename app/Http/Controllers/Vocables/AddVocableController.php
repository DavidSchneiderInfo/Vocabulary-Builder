<?php

declare(strict_types=1);

namespace App\Http\Controllers\Vocables;

use App\Actions\Vocables\AddVocableAction;
use App\DTOs\NewVocableDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddNewVocableRequest;
use App\Models\User;
use App\Models\Vocable;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;

final class AddVocableController extends Controller
{
    public function __construct(
        private readonly AddVocableAction $vocableAction
    ) {}

    public function add(AddNewVocableRequest $request): RedirectResponse
    {
        $this->vocableAction->execute(
            new NewVocableDTO(
                $request->getForeignTerm(),
                $request->getNativeTerm()
            )
        );

        return redirect('/');
    }
}
