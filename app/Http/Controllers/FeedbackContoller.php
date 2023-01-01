<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackContoller extends Controller
{
    public function index() {
        return view('home.testimoni');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'komen' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Feedback::create($validatedData);

        return redirect('/feedback')->with('komen', 'Feedback terkirim');
    }
}
