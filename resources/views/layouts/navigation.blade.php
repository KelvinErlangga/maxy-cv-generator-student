<nav class="bg-white shadow-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home.index') }}" class="flex items-center">
                    <img src="{{ asset('images/homepage/logo.png') }}" alt="Logo" class="h-8 w-auto">
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:flex space-x-8">
                <a href="{{ route('home.index') }}" class="text-blue-700 font-medium hover:text-blue-500">Beranda</a>
                <div class="relative group">
                    <button class="text-gray-700 font-medium hover:text-blue-500 flex items-center">
                        Curriculum Vitae
                        <svg class="h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg rounded mt-2 py-2">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 1</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 2</a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="text-gray-700 font-medium hover:text-blue-500 flex items-center">
                        Cover Letter
                        <svg class="h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg rounded mt-2 py-2">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 1</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 2</a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="text-gray-700 font-medium hover:text-blue-500 flex items-center">
                        Tentang
                        <svg class="h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg rounded mt-2 py-2">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 1</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 2</a>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center space-x-4">
                <a href="#" class="border border-blue-700 text-blue-700 font-medium text-sm px-4 py-2 rounded hover:bg-blue-50">
                    Akun
                </a>
                <a href="{{ route('cv.generate') }}" class="bg-blue-700 text-white font-medium text-sm px-4 py-2 rounded hover:bg-blue-600">
                    Buat CV
                </a>
            </div>
        </div>
    </div>
</nav>
