<?php

namespace App\Http\Controllers\Api\Episode;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function getEpisodes(): JsonResponse
    {
        $episodes = Episode::all();

        return response()->json($episodes,200);
    }

    /**
     * @return JsonResponse
     */
    public function getEpisode($id): JsonResponse
    {
        $episode = Episode::query()->findOrFail($id);

        return response()->json($episode, 200);
    }
}
