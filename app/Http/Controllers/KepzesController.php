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
        return redirect('/dashboard/kepzesek');
    }

    public function update(Request $request, Kepzes $kepzes)
    {
        $kepzes->update(ValidationHelper::validateKepzes($request));
        return redirect('/dashboard/kepzesek');
    }

    public function delete(Kepzes $kepzes)
    {
        $kepzes->delete();
        return redirect('/dashboard/kepzesek');
    }

    public function showEditScreen(Kepzes $kepzes)
    {
        return view('edit-kepzes', ['kepzes' => $kepzes]);
    }

    public function showCharts()
    {
        $kepzesek = Kepzes::all();

        return view('kepzesek-charts', ['kepzesek' => $kepzesek]);
    }
}
