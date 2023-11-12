<?php

namespace App\Http\Controllers;

use App\Actions\Vocables\GetVocableStats;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        private readonly GetVocableStats $getVocableStats
    )
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
        return view('home')
            ->with($this->getVocableStats->execute());
    }
}
