<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EQ2Controller extends Controller
{
    public function getWorlds()
    {
        $response = Http::get('https://census.daybreakgames.com/s:mozrin/get/eq2/world?c:limit=100');
        $worlds = $response->json()['world_list'] ?? [];

        return view('worlds', compact('worlds'));
    }
}
