<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index() {
        $ideas = Idea::latest()->get();
        return view('ideas', compact('ideas'));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'author_name' => 'required|max:255',
            'email' => 'nullable|email',
            'description' => 'required',
        ]);

        Idea::create($validated);

        return redirect()->route('ideas')->with('success', 'Спасибо миллолрд,идея отправлена!');
    }
}
