<?php

namespace App\Http\Controllers;

use App\Models\Vocable;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $total = Vocable::query()->count();
        $remaining = Vocable::query()
            ->where('level', '=', 0)
            ->count();

        return view('home')
            ->with('remaining', $remaining)
            ->with('total', $total);
    }
}
