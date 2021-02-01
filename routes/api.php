<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Character\CharacterController;
use App\Http\Controllers\Api\Quote\QuoteController;
use App\Http\Controllers\Api\Episode\EpisodeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware(['auth:api','throttle:60,20'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function (){
Route::get('/characters/random', [CharacterController::class, 'getRandomCharacter']);


Route::get('/episodes', [EpisodeController::class, 'getEpisodes']);
Route::get('/episodes/{id}', [EpisodeController::class, 'getEpisode']);

Route::get('/characters', [CharacterController::class, 'getCharacters']);
Route::get('/characters/{name}', [CharacterController::class, 'getCharacter']);

Route::get('/characters', [CharacterController::class, 'getCharacters']);
Route::get('/characters/{name}', [CharacterController::class, 'getCharacter']);

Route::get('/quotes', [QuoteController::class, 'getQuotes']);
Route::get('/quotes/random/author={character_name}', [QuoteController::class, 'getRandomQuoteCharacter']);
});
