<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Vocable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class AddVocableController extends Controller
{
    public function add(Request $request): RedirectResponse
    {
        $requestData = $request->validate([
            'foreign_term' => 'required|min:1',
            'native_term' => 'required|min:1',
        ]);

        $vokabel = new Vocable($requestData);
        $vokabel->save();

        return redirect('/');
    }
}
