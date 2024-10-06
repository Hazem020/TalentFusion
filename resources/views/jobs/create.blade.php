@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Create Job</h1>

    @if ($errors->any())
    <div class="bg-red-500 text-white p-4 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('jobs.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf

        <div class="mb-4">
            <label for="title" class="block text-gray-700">Job Title</label>
            <input id="title" name="title" type="text" value="{{ old('title') }}" class="w-full px-4 py-2 border border-gray-300 rounded @error('title') border-red-500 @enderror">
            @error('title')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="salary" class="block text-gray-700">Salary</label>
            <input id="salary" name="salary" type="number" value="{{ old('salary') }}" class="w-full px-4 py-2 border border-gray-300 rounded @error('salary') border-red-500 @enderror">
            @error('salary')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="type" class="block text-gray-700">Job Type</label>
            <select id="type" name="type" type="text" value="{{ old('type') }}" class="w-full px-4 py-2 border border-gray-300 rounded @error('type') border-red-500 @enderror">
                <option value="Full-Time">Full-Time</option>
                <option value="Part-Time">Part-Time</option>
                <option value="Contract">Contract</option>
                <option value="Internship">Internship</option>
            </select>
            @error('category')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="category" class="block text-gray-700">Job Category</label>
            <select id="category" name="category" type="text" value="{{ old('category') }}" class="w-full px-4 py-2 border border-gray-300 rounded @error('type') border-red-500 @enderror">
                @foreach ($categories as $category)
                <option value="{{ $category->CategoryName }}">{{ $category->CategoryName }}</option>
                @endforeach
            </select>
            @error('category')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="City" class="block text-gray-700">City</label>
            <select name="city" id="city" class="w-full px-4 py-2 border border-gray-300 rounded @error('location') border-red-500 @enderror">
                @foreach ($locations as $location )
                <option value="{{ $location->City }}">{{ $location->City }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="country" class="block text-gray-700">Country</label>
            <select name="country" id="country" class="w-full px-4 py-2 border border-gray-300 rounded @error('location') border-red-500 @enderror">
                @foreach ($locations as $location )
                <option value="{{ $location->Country }}">{{ $location->Country }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="px-6 py-3 bg-teal-500 text-white font-semibold rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500">
                Create Job
            </button>
        </div>
    </form>
</div>
@endsection