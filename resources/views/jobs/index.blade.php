@extends('layouts.app')

@section('content')
<div class="bg-gray-100 py-8">
    <!-- Search and Filters -->
    <div class="container mx-auto px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-8">
            <!-- Search Bar -->
            <div class=" w-full md:w-1/2">
                <input type="text" placeholder="Search jobs..." class="w-full px-4 py-2 text-gray-700 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
            </div>
            <!-- Filters -->
            <div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500">
                    <option value="">Filter by Location</option>
                    <option value="remote">Remote</option>
                    <option value="on-site">On-Site</option>
                </select>
            </div>
        </div>

        <!-- Job Listings -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($jobs as $job)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800">{{ $job->JobTitle}}</h2>
                    <p class="text-gray-600 mt-2">{{ $job->company->CompanyName }}</p>
                    <p class="text-gray-500 mt-1">{{ $job->JobType }}</p>
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