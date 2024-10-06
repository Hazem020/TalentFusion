@extends('layouts.app')

@section('content')
<div class="bg-gray-100 py-12">
    <div class="container mx-auto px-6 lg:px-8 max-w-lg">
        <!-- Signup Form -->
        <div class="bg-white shadow-md rounded-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Create an Account</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name Field -->
                <div class="mb-4">
                    <label for="UserName" class="block text-gray-700 text-sm font-medium mb-2">Full Name</label>
                    <input id="UserName" name="UserName" type="text" value="{{ old('UserName') }}" required autofocus class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500 @error('name') border-red-500 @enderror">
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                    <input id="Email" name="Email" type="Email" value="{{ old('Email') }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500 @error('email') border-red-500 @enderror">
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                    <input id="password" name="password" type="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500 @error('password') border-red-500 @enderror">
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-2">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
                </div>
                <div class="mb-4">
                    <label for="user_type" class="block text-gray-700 text-sm font-medium mb-2">User Type</label>
                    <select id="user_type" name="user_type" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
                        <option value="JobSeeker" {{ old('user_type') == 'JobSeeker' ? 'selected' : '' }}>Job Seeker</option>
                        <option value="Employer" {{ old('user_type') == 'Employer' ? 'selected' : '' }}>Employer</option>
                        <!-- Add other user types as needed -->
                    </select>
                    @error('user_type')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Submit Button -->
                <div class="flex items-center justify-between">
                    <button type="submit" class="px-6 py-3 bg-teal-500 text-gray-700 font-semibold rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500">Sign Up</button>
                </div>
            </form>
            <!-- Login Link -->
            <div class="mt-4 text-center">
                <p class="text-gray-600">Already have an account? <a href="" class="text-teal-500 hover:text-teal-600 font-semibold">Log in</a></p>
            </div>
        </div>
    </div>
</div>
@endsection