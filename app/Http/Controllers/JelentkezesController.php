<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class JelentkezesController extends Controller
{
    public function index(): View
    {
        $data = DB::table('jelentkezo as j')
            ->join('jelentkezes as je', 'j.id', '=', 'je.jelentkezoid')
            ->join('kepzes as k', 'je.kepzesid', '=', 'k.id')
            ->select(
                'j.nev as jelentkezo_nev',
                'k.nev as kepzes_nev',
                'je.sorrend',
                'je.szerzett'
            )
            ->orderBy('k.nev')
            ->orderBy('je.sorrend')
            ->orderBy('je.szerzett', 'desc')
            ->orderBy('j.nev')
            ->get();
        return view('jelentkezesek', [
            'jelentkezesek' => $data
        ]);
    }
}
