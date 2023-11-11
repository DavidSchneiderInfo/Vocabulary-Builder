<?php

declare(strict_types=1);

namespace App\Http\Controllers\Vocables;

use App\Http\Controllers\Controller;
use App\Models\Vocable;
use Illuminate\Contracts\View\View;

final class ShowVocablesController extends Controller
{
    public function show(): View
    {
        return view('show')
            ->with('vocables', Vocable::query()->paginate(25));
    }
}
