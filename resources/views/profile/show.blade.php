@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Flash Message -->
    @if (session('status'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{ session('status') }}
    </div>
    @endif

    <!-- Profile Form -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-6">User Profile</h2>

        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf

            <!-- Full Name -->
            <div class="mb-4">
                <label for="full_name" class="block text-gray-700">Full Name</label>
                <input id="full_name" name="full_name" type="text" value="{{ old('full_name', $profile->full_name ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded @error('full_name') border-red-500 @enderror">
                @error('full_name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Contact Number -->
            <div class="mb-4">
                <label for="contact_number" class="block text-gray-700">Contact Number</label>
                <input id="contact_number" name="contact_number" type="text" value="{{ old('contact_number', $profile->contact_number ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded @error('contact_number') border-red-500 @enderror">
                @error('contact_number')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Address -->
            <div class="mb-4">
                <label for="address" class="block text-gray-700">Address</label>
                <textarea id="address" name="address" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded @error('address') border-red-500 @enderror">{{ old('address', $profile->address ?? '') }}</textarea>
                @error('address')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Bio -->
            <div class="mb-4">
                <label for="bio" class="block text-gray-700">Bio</label>
                <textarea id="bio" name="bio" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded @error('bio') border-red-500 @enderror">{{ old('bio', $profile->bio ?? '') }}</textarea>
                @error('bio')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Skills -->
            <div class="mb-4">
                <label for="skills" class="block text-gray-700">Skills</label>
                <textarea id="skills" name="skills" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded @error('skills') border-red-500 @enderror">{{ old('skills', $profile->skills ?? '') }}</textarea>
                @error('skills')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Experience -->
            <div class="mb-4">
                <label for="experience" class="block text-gray-700">Experience</label>
                <textarea id="experience" name="experience" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded @error('experience') border-red-500 @enderror">{{ old('experience', $profile->experience ?? '') }}</textarea>
                @error('experience')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Education -->
            <div class="mb-6">
                <label for="education" class="block text-gray-700">Education</label>
                <textarea id="education" name="education" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded @error('education') border-red-500 @enderror">{{ old('education', $profile->education ?? '') }}</textarea>
                @error('education')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
                <button type="submit" class="px-6 py-3 bg-teal-500 text-white font-semibold rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500">Update Profile</button>
            </div>
        </form>
    </div>
</div>
@endsection