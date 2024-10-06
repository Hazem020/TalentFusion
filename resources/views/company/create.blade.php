<!-- resources/views/companies/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Create New Company</h1>

    <form action="{{ route('company.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Company Name</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}" class="w-full px-4 py-2 border border-gray-300 rounded @error('name') border-red-500 @enderror">
            @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <input id="description" name="description" type="text" value="{{ old('description') }}" class="w-full px-4 py-2 border border-gray-300 rounded @error('name') border-red-500 @enderror">
            @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="website" class="block text-gray-700">Website</label>
            <input id="website" name="website" type="text" value="{{ old('website') }}" class="w-full px-4 py-2 border border-gray-300 rounded @error('address') border-red-500 @enderror">
            @error('website')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="px-6 py-3 bg-teal-500 text-white font-semibold rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500">
                Create Company
            </button>
        </div>
    </form>
</div>
@endsection