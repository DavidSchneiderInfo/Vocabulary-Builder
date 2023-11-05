<?php

use App\Http\Controllers\AddVocableController;
use App\Http\Controllers\ShowVocablesController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\TrainingController;
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

Route::get('/', [
    SummaryController::class,
    'show',
]);

Route::get('show', [
    ShowVocablesController::class,
    'show',
])->name('show');

Route::post('/', [
    AddVocableController::class,
    'add',
])->name('add');

Route::get('train', [
    TrainingController::class,
    'show',
])->name('train');

Route::post('train', [
    TrainingController::class,
    'submit',
])->name('train.submit');
