<?php

namespace App\Http\Controllers;

use App\Helpers\ValidationHelper;
use App\Models\Kepzes;
use App\Services\AuthCheckService;
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
        if ($redirect = AuthCheckService::requireAuth()) {
            return $redirect;
        }

        if (!AuthCheckService::requireAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $kepzes->update(ValidationHelper::validateKepzes($request));
        return redirect('/kepzesek');
    }

    public function delete(Kepzes $kepzes)
    {
        if ($redirect = AuthCheckService::requireAuth()) {
            return $redirect;
        }

        if (!AuthCheckService::requireAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $kepzes->delete();
        return redirect('/kepzesek');
    }

    public function showEditScreen(Kepzes $kepzes)
    {
        if ($redirect = AuthCheckService::requireAuth()) {
            return $redirect;
        }

        if (!AuthCheckService::requireAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        return view('edit-kepzes', ['kepzes' => $kepzes]);
    }
}
