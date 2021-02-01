<?php

namespace App\Http\Controllers\Api\Quote;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Quote;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class QuoteController extends Controller
{

    public function getQuotes(): JsonResponse
    {
        $quotes = Quote::all();
        return response()->json($quotes, 200);
    }

    public function getRandomQuoteCharacter($request): JsonResponse
    {
        $characters = Character::all();
        $searchName = mb_strtolower($request);
        foreach ($characters as $value) {
            if (mb_strtolower($value->name) == $searchName) {
                $character = Character::query()->find($value->id);
                $count = count($character->quetes);
                foreach ($character->quetes as $quete) {
                    $id[] = $quete->id;
                }
                $int = $id[rand(0, --$count)];
                foreach ($character->quetes as $randQuete) {
                    if ( $int == $randQuete->id) {
                        return response()->json($randQuete->quote, 200);
                    }
                }
            }
        }
        return response()->json([], 404);
    }
}
