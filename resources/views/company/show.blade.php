@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Company Profile</h1>
    @if(!$company)
    <p class="text-gray-500 mb-4">You have not created a company profile yet.</p>
    <a href="{{ route('company.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Company Profile</a>
    @else
    <a href="{{ route('company.edit', $company) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Company Profile</a>
    @endif

    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Company Name:</label>
            <p class="text-gray-900">{{ $company->CompanyName }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Description:</label>
            <p class="text-gray-900">{{ $company->Description }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold">Website:</label>
            <p class="text-gray-900">{{ $company->Website }}</p>
        </div>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($jobs as $job)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800">{{ $job->JobTitle}}</h2>
                    <p class="text-gray-600 mt-2">{{ $job->company->CompanyName }}</p>
                    <p class="text-gray-500 mt-1">{{ $job->location->City }}, {{ $job->location->Country }}</p>
                    <p class="text-gray-700 mt-4">{{ Str::limit($job->JobDescription, 150) }}</p>
                    <a href="{{ route('jobs.show', $job->id) }}" class="mt-4 inline-block text-teal-500 hover:text-teal-600 font-semibold">View Details</a>
                </div>
                <div class="bg-gray-100 p-4 flex justify-between items-center">
                    <span class="text-sm text-gray-500">{{ $job->created_at->diffForHumans() }}</span>
                    <a href="{{ route('jobs.show', $job->id) }}" class="text-teal-500 hover:text-teal-600">Apply Now</a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center">
                <p class="text-gray-500">No job listings available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection