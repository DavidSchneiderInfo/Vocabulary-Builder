<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\Vocables\AddVocableController;
use App\Http\Controllers\Vocables\ShowVocablesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([
    'guest'
])->group(function () {

    Route::get('/', [
        SummaryController::class,
        'show',
    ]);

});

Route::middleware([
    'auth'
])->group(function (){

    Route::get('show', [
        ShowVocablesController::class,
        'show',
    ])->name('vocables.index');

    Route::post('/', [
        AddVocableController::class,
        'add',
    ])->name('vocables.create');

    Route::get('train', [
        TrainingController::class,
        'show',
    ])->name('train');

    Route::post('train', [
        TrainingController::class,
        'submit',
    ])->name('train.submit');

    Route::get('/home', [HomeController::class, 'index'])->name('home');

});

Auth::routes([
    'verify' => true,
]);


