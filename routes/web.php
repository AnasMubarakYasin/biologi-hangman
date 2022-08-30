<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [QuizController::class, 'index'])->name('quiz.index');
Route::get('/quiz/start', [QuizController::class, 'start'])->name('quiz.start');
Route::get('/quiz/end', [QuizController::class, 'end'])->name('quiz.end');
Route::get('/quiz/question/{number}', [QuizController::class, 'question'])->name('quiz.question');
Route::post('/quiz/answer', [QuizController::class, 'answer'])->name('quiz.answer');
