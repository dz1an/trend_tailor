<nav class="bg-transparent py-2 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-12">
            <div class="flex space-x-6">
                <a href="#" class="text-sm text-gray-700 hover:text-gray-900">Shop</a>
                <a href="#" class="text-sm text-gray-700 hover:text-gray-900">Sale</a>
                <a href="#" class="text-sm text-gray-700 hover:text-gray-900">About</a>
            </div>
            <div class="flex-grow text-center">
                <a href="{{ url('/') }}" class="font-bold text-lg text-gray-800">TrendTailor</a>
            </div>
            <div class="flex items-center space-x-4">
                {{-- <img src="{{ asset('template/img/philippines-flag_1143296-777.png') }}" alt="Philippines flag" class="h-3 w-5 object-cover">
                <a href="{{route('Homepage.signin')}}" class="text-sm text-gray-700 hover:text-gray-900">Sign In</a> --}}
                <a href="#" class="text-gray-700 hover:text-gray-900">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</nav>