<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:justify-between">
            <!-- Contact Information -->
            <div class="mb-6 md:mb-0">
                <h2 class="text-xl font-semibold mb-2">TalentFusion</h2>
                <p class="text-gray-400">Find your next job with ease and confidence. Our platform connects you with top employers.</p>
                <div class="mt-4">
                    <p class="text-gray-400">123 Job Street, City, Country</p>
                    <p class="text-gray-400">Email: <a href="mailto:info@jobboard.com" class="text-white hover:underline">info@TalentFusion.com</a></p>
                    <p class="text-gray-400">Phone: +1 (234) 567-890</p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="mb-6 md:mb-0">
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('jobs.index') }}" class="text-gray-300 hover:text-white">Job Listings</a></li>
                    <li><a href="" class="text-gray-300 hover:text-white">About Us</a></li>
                    <li><a href="" class="text-gray-300 hover:text-white">Contact</a></li>
                    <li><a href="" class="text-gray-300 hover:text-white">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="https://facebook.com" target="_blank" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12.07c0-5.5-4.47-10-10-10s-10 4.5-10 10c0 4.94 3.61 9.05 8.33 9.88v-7h-2.5v-2.5h2.5v-1.85c0-2.47 1.5-3.83 3.69-3.83 1.05 0 1.94.08 2.2.11v2.54h-1.51c-1.19 0-1.42.6-1.42 1.24v1.63h2.84l-.37 2.5h-2.47v7.85c4.72-.83 8.33-4.94 8.33-9.88z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.46 6.003c-.77.34-1.6.56-2.46.66a4.3 4.3 0 0 0 1.89-2.38 8.62 8.62 0 0 1-2.73 1.04 4.3 4.3 0 0 0-7.33 3.93 12.21 12.21 0 0 1-8.88-4.5 4.3 4.3 0 0 0 1.33 5.73 4.23 4.23 0 0 1-1.95-.54v.06a4.3 4.3 0 0 0 3.45 4.22 4.24 4.24 0 0 1-1.95.07 4.3 4.3 0 0 0 4.02 2.99 8.64 8.64 0 0 1-5.34 1.85c-.35 0-.7-.02-1.04-.06a12.21 12.21 0 0 0 6.59 1.93c7.9 0 12.24-6.55 12.24-12.24 0-.19 0-.37-.01-.56a8.73 8.73 0 0 0 2.14-2.22z" />
                        </svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm0 7.7H2.12v13.3H4.98v-13.3zm13.9 1.7c-.8 0-1.53.22-2.15.6v-.5h-2.6c.03.78.03 1.55.03 2.33v10.17h2.61v-5.61c0-1.14.06-2.22.34-3.22 1.17-2.69 5.07-2.54 5.07-2.54v-2.62c-2.73 0-4.68 1.6-5.29 3.04-.18.44-.27.92-.27 1.4v-.02c-.01-.62-.01-1.28-.01-1.9v-.05h-2.6v2.7c-.01.04-.01.08-.01.12v5.52h2.6v-5.23c0-1.37.22-2.59.74-3.63 1.06-2.13 4.09-2.16 4.09-2.16v-2.8c-.6-.13-1.4-.15-2.1-.15z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 pt-6 mt-8">
            <p class="text-center text-gray-400 text-sm">© {{ date('Y') }} TalentFusion. All rights reserved.</p>
        </div>
    </div>
</footer>