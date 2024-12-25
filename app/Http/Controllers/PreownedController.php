<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game; // Import your Game model

class PreownedController extends Controller
{
    public function index()
    {
        // Fetch all pre-owned games from the database
        $games = Game::where('is_preowned', true)->get(); // Assuming you have an 'is_preowned' field in your database

        // Pass the games data to the view
        return view('preowned', compact('games')); // This will pass the $games variable to the view
    }
}
