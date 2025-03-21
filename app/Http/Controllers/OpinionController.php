<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class OpinionController extends Controller {
    public function index() {
        $opinions = Opinion::all();
        return view('opinions.index', compact('opinions'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Opinion::create($request->all());
        return redirect()->back()->with('success', 'Dziękujemy za opinię!');
    }
}

