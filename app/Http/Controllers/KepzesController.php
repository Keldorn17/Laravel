<?php

namespace App\Http\Controllers;

use App\Helpers\ValidationHelper;
use App\Models\Kepzes;
use Illuminate\Http\Request;

class KepzesController extends Controller
{
    public function index()
    {
        return Kepzes::all();
    }

    public function create(Request $request)
    {
        Kepzes::create(ValidationHelper::validateKepzes($request));
        return redirect('/');
    }

    public function update(Request $request, Kepzes $kepzes)
    {
        if (!auth()->check()) {
            return redirect('/');
        }

        $kepzes->update(ValidationHelper::validateKepzes($request));
        return redirect('/kepzesek');
    }

    public function delete(Kepzes $kepzes)
    {
        if (!auth()->check()) {
            return redirect('/');
        }
        $kepzes->delete();
        return redirect('/kepzesek');
    }

    public function showEditScreen(Kepzes $kepzes)
    {
        if (!auth()->check()) {
            return redirect('/');
        }

        return view('edit-kepzes', ['kepzes' => $kepzes]);
    }
}
