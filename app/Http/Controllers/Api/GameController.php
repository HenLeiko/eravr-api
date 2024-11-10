<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Http\Resources\GameResource;
use App\Providers\Models\Game;
use App\Providers\Models\Tag;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return response()->json(GameResource::collection($games->load('tags')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        $game = Game::create($request->validated());
        if ($game->tags->isNotEmpty() && $game->tags) {
            $tagsIds = $game->tags->pluck('id')->toArray();
            $game->tags()->sync($tagsIds);
        }
        return response()->json(new GameResource($game->load('tags')), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return response()->json(new GameResource($game));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        $game->update($request->validated());
        return response()->json(new GameResource($game));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return response()->json(null, 204);
    }

    public function setTag(Game $game, Tag $tag)
    {
        $game->tags()->attach($tag->id);
        $game->load('tags');
        return response()->json($game);
    }
}
