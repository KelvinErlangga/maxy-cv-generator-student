@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen overflow-hidden">
        <!-- Background Shape -->
        <img src="{{ asset('images/homepage/background.png') }}" alt="Background Shape"
             class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">

        <!-- Content Container -->
        <div class="container mx-auto flex flex-col-reverse md:flex-row items-center justify-between relative z-10 py-12 px-6 md:px-0 mt-8">
            <!-- Left Content -->
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl lg:text-5xl font-extrabold text-blue-800 leading-tight mb-6">
                    Siap Meningkatkan Kariermu?
                </h1>
                <p class="text-lg lg:text-xl text-gray-700 leading-relaxed mb-8">
                    Kami menyediakan semua yang kamu butuhkan untuk memulai karier dengan percaya diri. Buat CV dan cover letter yang profesional hanya dalam beberapa langkah mudah.
                </p>
                <a href="{{ route('cv.generate') }}"
                   class="bg-blue-800 hover:bg-blue-700 text-white font-medium text-lg lg:text-xl py-3 px-8 rounded-lg shadow-lg">
                    Ciptakan CV
                </a>
            </div>

            <!-- Right Image -->
            <div class="md:w-1/2 flex justify-end">
                <img src="{{ asset('images/homepage/hero.png') }}" alt="Hero Image" class="w-4/5 lg:w-auto">
            </div>
        </div>
    </section>
@endsection
