<nav class="bg-gray-800 text-white shadow-md">
    <div class="container mx-auto px-6 lg:px-8 flex items-center justify-between h-16">
        <!-- Site Logo or Name -->
        <a href="/" class="text-2xl font-bold tracking-tight text-white hover:text-gray-300">
            TalentFusion
        </a>

        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-6">
            <a href="/" class="hover:text-gray-300">Home</a>
            <a href="{{ route('jobs.index') }}" class="hover:text-gray-300">Jobs</a>
            @guest
            <a href="{{ route('register') }}" class="hover:text-gray-300">Signup</a>
            <a href="{{ route('login') }}" class="hover:text-gray-300">Login</a>
            @endguest
            @auth
            <a href="{{ route('profile.show') }}" class="hover:text-gray-300">Profile</a>
            @if (Auth::user()->UserType === 'Employer')
            <a href="{{ route('jobs.create')}}" class="hover:text-gray-300">Post a Job</a>
            @endif
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="hover:text-gray-300">Logout</button>
            </form>
            @endauth

        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="absolute top-16 right-0 mt-2 w-48 bg-gray-800 text-white shadow-lg rounded-lg hidden">
            <a href="" class="block px-4 py-2 hover:bg-gray-700">Home</a>
            <a href="{{ route('jobs.index') }}" class="block px-4 py-2 hover:bg-gray-700">Jobs</a>
            @guest
            <a href="{{ route('register') }}" class="block px-4 py-2 hover:bg-gray-700">Signup</a>
            <a href="" class="block px-4 py-2 hover:bg-gray-700">Login</a>
            @endguest
        </div>
    </div>
</nav>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>