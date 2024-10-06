<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProfile;

class ProfileController extends Controller
{
    // Show profile method
    public function show()
    {
        $user = Auth::user();
        if ($user->UserType == 'JobSeeker') {
            $profile = $user->profile;
            return view('profile.show', compact('user', 'profile'));
        } else {
            $company = Company::where('user_id', $user->id)->first();
            return redirect()->route('company.show', $company);
        }
    }

    // Update profile method
    public function update(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'contact_number' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'bio' => 'nullable|string',
            'skills' => 'nullable|string',
            'experience' => 'nullable|string',
            'education' => 'nullable|string',
        ]);

        $user = Auth::user();
        $profile = $user->profile ?: new UserProfile(); // Create a new profile if it doesn't exist

        $profile->fill($request->only([
            'full_name',
            'contact_number',
            'address',
            'bio',
            'skills',
            'experience',
            'education',
        ]));

        $profile->user_id = $user->id; // Set the user_id
        $profile->save();

        return redirect()->route('profile.show')->with('status', 'Profile updated successfully.');
    }
}
