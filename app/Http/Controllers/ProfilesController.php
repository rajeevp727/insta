<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        // $allUsers = User::all();
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        // dd($follows);
        return view('Profiles.index', compact('user', 'follows'));
        // return view('Profiles.index', compact('user', 'follows'), ['usersList' => $allUsers]);
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('Profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
            $imageArr = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArr ?? [],
        ));

        return redirect("/profile/{$user->id}");
    }
}