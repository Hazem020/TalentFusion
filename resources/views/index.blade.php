@extends('layouts.app')

@section('content')
<div class="relative bg-gray-900 text-white overflow-hidden">
    @if(session('error'))
    <div class="bg-red-500 text-white p-4 text-center">
        {{ session('error') }}
    </div>
    @endif
    <!-- Hero Section -->
    <div class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden sm:-top-48">
        <svg class="absolute left-[calc(50%-11rem)] -translate-x-1/2 rotate-[30deg] -z-10 max-w-none -translate-y-32 text-gray-700" fill="none" viewBox="0 0 1155 678">
            <defs>
                <pattern id="b2c23662-1b16-4c84-8141-31d63a2b5d88" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-600" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="1155" height="678" fill="url(#b2c23662-1b16-4c84-8141-31d63a2b5d88)" />
        </svg>
    </div>

    <main>
        <div class="relative px-6 pt-10 pb-8 bg-gray-800 overflow-hidden sm:py-12 lg:px-8">
            <div>
                <div class="text-center">
                    <h1 class="text-4xl font-extrabold tracking-tight sm:text-6xl">Find Your Dream Job</h1>
                    <p class="mt-6 text-lg leading-8">Explore thousands of job opportunities and find the perfect fit for your career goals.</p>
                    <div class="mt-8 flex gap-x-4 justify-center">
                        <a href="{{ route('jobs.index') }}" class="btn btn-primary px-4 py-2 text-white bg-teal-500 hover:bg-teal-600 rounded-lg">Search Jobs</a>
                        @guest
                        <a href="" class="btn btn-secondary px-4 py-2 text-white bg-gray-600 hover:bg-gray-700 rounded-lg">Sign Up</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- Features Section -->
<div class="py-16 sm:py-24 bg-gray-900">
    <div class="text-center">
        <h2 class="text-3xl text-white font-bold leading-8">Why Choose Us?</h2>
        <p class="mt-4  text-white text-lg leading-8">We offer a user-friendly platform to help you find jobs that match your skills and interests.</p>
    </div>
    <div class="mt-12 max-w-lg sm:max-w-none sm:grid sm:grid-cols-2 sm:gap-x-12 lg:max-w-7xl lg:mx-auto">
        <div class="relative flex flex-col gap-y-10 sm:flex-row sm:gap-x-12">
            <div class="relative flex items-center justify-center w-full h-64  sm:w-1/2">
            </div>
            <div class="relative flex flex-col gap-y-10 sm:w-1/2">
                <div class="relative flex flex-col gap-y-6">
                    <h3 class="text-lg text-white font-semibold leading-6">Comprehensive Job Listings</h3>
                    <p class="text-base text-white leading-6">Browse a wide variety of job listings tailored to your career aspirations.</p>
                </div>
                <div class="relative flex flex-col gap-y-6">
                    <h3 class="text-lg text-white font-semibold leading-6">Easy Application Process</h3>
                    <p class="text-base text-white leading-6">Apply for jobs with just a few clicks and keep track of your applications effortlessly.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="bg-gray-800 py-16 sm:py-24">
    <div class="mx-auto max-w-3xl px-6 lg:px-8">
        <div>
            <h2 class="text-3xl text-white font-bold leading-8">What Our Users Say</h2>
            <p class="mt-4 text-lg text-white leading-8">Read testimonials from users who have found success through our platform.</p>
        </div>
        <div class="mt-12 space-y-12">
            <blockquote class="relative flex flex-col gap-y-6">

                <p class="text-xl text-gray-300 font-semibold leading-8">“This platform made job hunting so much easier. I found my ideal job within weeks!”</p>
                <footer>
                    <p class="text-base text-gray-300 font-semibold leading-6">Jane Doe</p>
                    <p class="text-base  text-gray-300 leading-6">Software Engineer</p>
                </footer>
            </blockquote>
            <blockquote class="relative flex flex-col gap-y-6">
                <p class="text-xl  text-gray-300 font-semibold leading-8">“The job listings are always up-to-date and relevant. Highly recommend this site!”</p>
                <footer>
                    <p class="text-base text-gray-300 font-semibold leading-6">John Smith</p>
                    <p class="text-base  text-gray-300 leading-6">Digital Marketer</p>
                </footer>
            </blockquote>
        </div>
    </div>
</div>
<br>
</main>
</div>
@endsection