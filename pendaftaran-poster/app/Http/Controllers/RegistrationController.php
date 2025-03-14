<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'poster' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $request->file('poster')->store('posters', 'public');

        return view('confirmation', [
            'name' => $request->name,
            'class' => $request->class,
            'title' => $request->title,
            'poster' => $path,
        ]);
    }
}
