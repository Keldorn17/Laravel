<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the contact form.
     */
    public function create(): Factory|View
    {
        return view('contact');
    }

    /**
     * Store a new contact message.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:255',
        ]);

        ContactMessage::create($validated);

        return redirect()->route('contact')
        ->with('success', 'Köszönjük! Az üzenetét megkaptuk.');
    }
}
