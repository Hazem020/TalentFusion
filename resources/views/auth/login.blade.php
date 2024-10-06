@extends('layouts.app')

@section('content')
<div class="bg-gray-100 py-12">
    <div class="container mx-auto px-6 lg:px-8 max-w-lg">
        <!-- Login Form -->
        <div class="bg-white shadow-md rounded-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Login to Your Account</h2>

            @if ($errors->any())
            <div class="mb-4">
                <ul class="list-disc list-inside text-red-500 text-sm">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="Email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                    <input id="Email" name="Email" type="email" value="{{ old('email') }}" required autofocus class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500 @error('email') border-red-500 @enderror">
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

                <!-- Remember Me Field -->
                <div class="mb-6 flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-gray-700 text-sm font-medium">Remember Me</label>
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-between">
                    <button type="submit" class="px-6 py-3 bg-teal-500 text-white font-semibold rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500">Login</button>
                </div>
            </form>

            <!-- Register Link -->
            <div class="mt-4 text-center">
                <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="text-teal-500 hover:text-teal-600 font-semibold">Register</a></p>
            </div>
        </div>
    </div>
</div>
@endsection