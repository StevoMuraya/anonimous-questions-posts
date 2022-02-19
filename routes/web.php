<?php

use App\Http\Controllers\AskQuestionController;
use App\Http\Controllers\ManageQuestionController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect()->route('ask.create');
});

Auth::routes();


// Route::resource('/', AskQuestionController::class);
Route::resource('home', ManageQuestionController::class);
Route::post('asked', [ManageQuestionController::class, 'askedQuestions'])->name('asked');
Route::resource('ask', AskQuestionController::class);
