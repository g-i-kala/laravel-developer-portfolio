<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);

        $developerAttributes = $request->validate([
            'handle' => ['required'],
            'title' => ['required'],
            'bio' => ['required'],
            'location' => ['required'],
            'website' => ['required'],
            'github' => ['required'],
            'linkedin' => ['required'],
            'avatar' => ['required', File::types('png', 'jpg', 'webp')],
        ]);

        $user = User::create($userAttributes);

        if ($request->hasFile('avatar')) {
            $filename = 'avatar_' . $developerAttributes['handle'] . '.' . $request->file('avatar')->extension();
            $logoPath = $request->file('avatar')->storeAs('avatar', $filename, 'public');
        };

        $user->developer()->create([
            'full_name' => $userAttributes['name'],
            'handle'   => $developerAttributes['handle'],
            'title'    => $developerAttributes['title'],
            'bio'      => $developerAttributes['bio'],
            'location' => $developerAttributes['location'],
            'website'  => $developerAttributes['website'],
            'github'   => $developerAttributes['github'],
            'linkedin' => $developerAttributes['linkedin'],
            'avatar'     => $logoPath,
        ]);

        Auth::login($user);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
