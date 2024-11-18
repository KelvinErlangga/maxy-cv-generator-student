<x-guest-layout>
    @extends('layouts.app') <!-- Menambahkan layout untuk navbar -->

    @section('content')
        <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50 relative">
            <!-- Background Image -->
            <img src="{{ asset('images/homepage/background.png') }}" alt="Background Shape"
                 class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">

            <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg relative z-10">
                <div class="flex justify-center mb-6">
                    <!-- Logo -->
                    <a href="/">
                        <img src="{{ asset('images/homepage/logo.png') }}" alt="Logo" class="text-blue-600" style="width: 200px; height: auto;">
                    </a>
                </div>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input id="name" class="mt-1 block w-full rounded border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                               type="text" name="name" :value="old('name')" required autofocus>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                        <input id="email" class="mt-1 block w-full rounded border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                               type="email" name="email" :value="old('email')" required>
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" class="mt-1 block w-full rounded border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                               type="password" name="password" required autocomplete="new-password">
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                        <input id="password_confirmation" class="mt-1 block w-full rounded border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                               type="password" name="password_confirmation" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center">
                        <button type="submit" class="w-full bg-blue-700 text-white font-medium py-2 px-4 rounded hover:bg-blue-600">
                            Daftar
                        </button>
                    </div>
                </form>

                <!-- Link to Login -->
                <div class="text-center mt-4">
                    <p class="text-sm text-gray-600">Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Masuk disini</a>
                    </p>
                </div>
            </div>
        </div>
    @endsection
</x-guest-layout>
