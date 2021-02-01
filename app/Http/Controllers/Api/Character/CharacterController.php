<?php

namespace App\Http\Controllers\Api\Character;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function getCharacters(): JsonResponse
    {
        $characters = Character::all();

        return response()->json($characters, 200);
    }

    /**
     * @return JsonResponse
     */
    public function getCharacter($request): JsonResponse
    {
        $characters = Character::all();
        $searchName = mb_strtolower($request);
        foreach ($characters as $value) {
            if (mb_strtolower($value->name) == $searchName) {
                return response()->json($value, 200);
            }
        }
        return response()->json([], 404);
    }

    /**
     * @return JsonResponse
     */
    public function getRandomCharacter(): JsonResponse
    {
        $rand = rand(1,Character::all()->count());
        $characters = Character::query()->find($rand);

        return response()->json($characters,200);
    }
}
