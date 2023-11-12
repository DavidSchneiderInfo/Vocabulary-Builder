<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Vocable;
use Illuminate\Contracts\View\View;

final class LandingPageController extends Controller
{
    public function show(): View
    {
        $total = Vocable::query()->count();
        $remaining = Vocable::query()
            ->where('level', '=', 0)
            ->count();

        return view('welcome')
            ->with('remaining', $remaining)
            ->with('total', $total);
    }
}
