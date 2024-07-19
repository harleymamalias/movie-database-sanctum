<?php

namespace App\Http\Controllers;

use App\Models\Actor;
class ActorController extends Controller
{
    public function show($id)
    {
        $actor = Actor::with('movies')->findOrFail($id);
        return response()->json($actor);
    }
}
