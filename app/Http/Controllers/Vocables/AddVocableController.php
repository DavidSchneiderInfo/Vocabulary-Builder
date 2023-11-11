<?php

declare(strict_types=1);

namespace App\Http\Controllers\Vocables;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vocable;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class AddVocableController extends Controller
{
    public function __construct(
        private readonly Guard $guard
    ) {}

    public function add(Request $request): RedirectResponse
    {
        /** @var User $user */
        $user = $this->guard->user();

        $requestData = $request->validate([
            'foreign_term' => 'required|min:1',
            'native_term' => 'required|min:1',
        ]);

        $user->vocables()->save(new Vocable($requestData));

        return redirect('/');
    }
}
