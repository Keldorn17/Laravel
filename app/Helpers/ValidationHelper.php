<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class ValidationHelper
{
    public static function validateKepzes(Request $request): array
    {
        $validated = $request->validate([
            'nev' => 'required',
            'felveheto' => 'required',
            'minimum' => 'required'
        ]);

        foreach ($validated as $key => $value) {
            $validated[$key] = strip_tags($value);
        }

        return $validated;
    }
}
