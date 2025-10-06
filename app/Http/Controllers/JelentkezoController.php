<?php

namespace App\Http\Controllers;

use App\Models\Jelentkezo;
use Illuminate\Http\Request;

class JelentkezoController extends Controller
{
    public function index()
    {
        return Jelentkezo::all();
    }

    public function create(Request $request)
    {
        $incomingFields = $request->validate([
            'nev' => 'required',
            'nem' => 'required'
        ]);

        $incomingFields['nev'] = strip_tags($incomingFields['nev']);
        $incomingFields['nem'] = strip_tags($incomingFields['nem']);
        Jelentkezo::create($incomingFields);
        return redirect('/');
    }
}
