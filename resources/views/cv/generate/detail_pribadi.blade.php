@extends('layouts.generator')

@section('title', 'Detail Pribadi | CVRE GENERATE')

@section('content')
<!-- Form Detail Pribadi -->
<div class="min-h-screen flex flex-col relative bg-gradient-to-b from-white via-purple-50 to-blue-50">
    <!-- Background -->
    <img src="{{ asset('images/homepage/background.png') }}" alt="Background Shape" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none" />

    <!-- Back Button -->
    <div class="absolute top-10 left-40 z-10">
        <a href="/" class="text-blue-700 hover:underline text-sm flex items-center">
            <svg class="w-10 h-10 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
    </div>

    <!-- Stepper -->
    <div class="flex justify-center mt-8 mb-20">
        <div class="flex items-center">
            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-blue-700 text-white text-3xl">1</div>
            <div class="w-28 h-px bg-blue-700"></div>
            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-gray-300 text-gray-700 text-3xl">2</div>
            <div class="w-28 h-px bg-gray-300"></div>
            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-gray-300 text-gray-700 text-3xl">3</div>
        </div>
    </div>

    <!-- Form Container -->
    <div class="bg-white shadow-lg rounded-lg p-8 w-[800px] h-[650px] mx-auto z-10 mb-20">
        <!-- Form Title -->
        <h2 class="text-2xl text-center text-blue-800 mb-8">Detail Pribadi</h2>

        <!-- Form -->
        <form method="POST" action="{{ route('cv', ['section' => 'pengalaman_kerja']) }}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-4 gap-4">
                <!-- Foto -->
                <div class="col-span-1 flex flex-col items-center">
                    <label for="photo" class="cursor-pointer flex flex-col items-center border border-gray-300 rounded-lg p-4 hover:border-blue-500 transition">
                        <img src="{{ asset('images/icons/photo-placeholder.png') }}" alt="Tambah Foto" class="mb-2 w-14" />
                        <span class="text-sm font-medium text-blue-700">Tambahkan Foto</span>
                        <input type="file" id="photo" name="photo" class="hidden" />
                    </label>
                </div>
                <!-- Nama Depan -->
                <div class="col-span-3">
                    <input
                        id="first_name"
                        type="text"
                        name="first_name"
                        placeholder="Nama Depan"
                        class="mt-1 block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                        required />
                </div>
                <!-- Nama Belakang -->
                <div class="col-span-3 col-start-2 -mt-16"> <!-- Penyesuaian jarak -->
                    <input
                        id="last_name"
                        type="text"
                        name="last_name"
                        placeholder="Nama Belakang"
                        class="mt-1 block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                        required />
                </div>
                <!-- Kota -->
                <div class="col-span-2">
                    <input
                        id="city"
                        type="text"
                        name="city"
                        placeholder="Kota"
                        class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                        required />
                </div>
                <!-- Alamat -->
                <div class="col-span-2">
                    <input
                        id="address"
                        type="text"
                        name="address"
                        placeholder="Alamat"
                        class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                        required />
                </div>
                <!-- Email -->
                <div class="col-span-2">
                    <input
                        id="email"
                        type="email"
                        name="email"
                        placeholder="Alamat Email"
                        class="mt-1 block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                        required />
                </div>
                <!-- Nomor Telepon -->
                <div class="col-span-2">
                    <input
                        id="phone"
                        type="text"
                        name="phone"
                        placeholder="Nomor Telepon"
                        class="mt-1 block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                        required />
                </div>
                <!-- Ringkasan -->
                <div class="col-span-4">
                    <!-- Quill Editor -->
                    <div id="editor" class="bg-white rounded border border-gray-300" style="height: 150px;"></div>
                    <input type="hidden" id="summary" name="summary">
                </div>
            </div>

            <!-- Langkah Selanjutnya -->
            <button
                type="submit"
                class="mt-6 w-full py-4 bg-blue-700 text-white text-sm font-medium rounded shadow hover:bg-blue-800 focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 transition">
                Langkah Selanjutnya
            </button>
        </form>
    </div>
</div>

<!-- Quill.js CSS & JS -->
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Inisialisasi Quill
        var quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: 'Ringkasan Mengenai Anda',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline'], // Bold, Italic, Underline
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }] // Ordered & Unordered List
                ]
            }
        });

        // Set Font Poppins for Quill Editor
        quill.root.style.fontFamily = 'Poppins, sans-serif';

        // Simpan data Quill ke input hidden
        var summaryInput = document.querySelector('input#summary');
        quill.on('text-change', function () {
            summaryInput.value = quill.root.innerHTML;
        });
    });
</script>

@endsection
