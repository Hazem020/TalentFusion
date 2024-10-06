@extends('layouts.app')

@section('content')
<div class="bg-gray-100 py-8">
    <div class="container mx-auto px-6 lg:px-8">
        <!-- Job Header -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800">{{ $job->JobTitle }}</h1>
                        <p class="text-lg text-gray-600 mt-2">{{ $job->company->CompanyName}}</p>
                        <p class="text-gray-500 mt-1">{{ $job->JobType }}</p>
                        <p class="text-gray-500 mt-1">{{ $job->location->City }}, {{ $job->location->Country }}</p>
                    </div>
                    <div>
                        <img src="https://via.placeholder.com/100" alt="Company Logo" class="w-24 h-24 rounded-full">
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-gray-700 mb-4">{{ $job->JobDescription }}</p>
                    <!-- <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                        <h3 class="text-xl font-semibold text-gray-800">Responsibilities</h3>
                        <ul class="list-disc list-inside mt-2">
                            <li class="text-gray-600"></li>
                        </ul>
                    </div> -->
                </div>
                <div class="mt-6 flex justify-between items-center">
                    <a href="" class="px-6 py-3 text-white bg-teal-500 hover:bg-teal-600 rounded-lg font-semibold">Apply Now</a>
                </div>
            </div>
        </div>

        <!-- Similar Jobs Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800">Similar Jobs</h2>
            <div class="grid gap-6 mt-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($similarJobs as $similarJob)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $similarJob->JobTitle }}</h3>
                        <p class="text-gray-600 mt-2">{{ $similarJob->company->CompanyName }}</p>
                        <p class="text-gray-500 mt-1">{{ $job->location->City }}, {{ $job->location->Country }}</p>
                        <a href="{{ route('jobs.show', $similarJob->id) }}" class="mt-4 inline-block text-teal-500 hover:text-teal-600 font-semibold">View Details</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection