<?php

namespace App\Http\Controllers;

use App\Models\Jelentkezes;
use Illuminate\Http\Request;

class JelentkezesController extends Controller
{
    public function index()
    {
        return Jelentkezes::with(['jelentkezo', 'kepzes'])->get();
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'jelentkezoid' => 'required|exists:jelentkezo,id',
            'kepzesid' => 'required|exists:kepzes,id',
            'sorrend' => 'nullable|integer',
            'szerzett' => 'nullable|integer',
        ]);

        $jelentkezes = Jelentkezes::create($validated);

        return $jelentkezes->load(['jelentkezo', 'kepzes']);
    }
}
