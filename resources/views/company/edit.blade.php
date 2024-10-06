<!-- resources/views/companies/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Edit Company</h1>

    <form action="{{ route('company.update', $company) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Company Name</label>
            <input id="name" name="name" type="text" value="{{ old('CompanyName', $company->CompanyName) }}" class="w-full px-4 py-2 border border-gray-300 rounded @error('name') border-red-500 @enderror">
            @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <input id="description" name="description" type="text" value="{{ old('description', $company->Description) }}" class="w-full px-4 py-2 border border-gray-300 rounded @error('address') border-red-500 @enderror">
            @error('address')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="website" class="block text-gray-700">Website</label>
            <input id="website" name="website" type="text" value="{{ old('website', $company->Website) }}" class="w-full px-4 py-2 border border-gray-300 rounded @error('address') border-red-500 @enderror">
            @error('address')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="px-6 py-3 bg-teal-500 text-white font-semibold rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500">
                Update Company
            </button>
        </div>
    </form>
</div>
@endsection