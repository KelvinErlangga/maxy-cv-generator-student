@extends('layouts.generator')

@section('title', 'Pendidikan | CVRE GENERATE')

@section('content')
<!-- Form Pendidikan -->
<div class="min-h-screen flex flex-col relative bg-gradient-to-b from-white via-purple-50 to-blue-50">
    <!-- Background -->
    <img src="{{ asset('images/homepage/background.png') }}" alt="Background Shape" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none" />

    <!-- Back Button -->
    <div class="absolute top-10 left-40 z-10">
        <a href="{{ route('cv', ['section' => 'hasil_pengalaman_kerja']) }}" class="text-blue-700 hover:underline text-sm flex items-center">
            <svg class="w-10 h-10 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
    </div>

    <!-- Stepper -->
    <div class="flex justify-center mt-8 mb-20">
        <div class="flex items-center">
            <!-- Step 1: Check Icon -->
            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-blue-700 text-white font-bold">
                <img src="{{ asset('images/icons/done.svg') }}" alt="Check Icon" class="w-6 h-6" />
            </div>
            <div class="w-28 h-px bg-blue-700"></div>

            <!-- Step 2: Current Step -->
            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-blue-700 text-white text-3xl">
                2
            </div>
            <div class="w-28 h-px bg-blue-700"></div>

            <!-- Step 3 -->
            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-gray-300 text-gray-700 text-3xl">
                3
            </div>
        </div>
    </div>


    <!-- Form Container -->
    <div class="bg-white shadow-lg rounded-lg p-8 mx-auto z-10 mb-20" style="max-width: 800px; width: 100%;">

        <!-- Form Title -->
        <h2 class="text-2xl text-center text-blue-800 mb-8">Pendidikan</h2>

        <!-- Form -->
        <form method="POST" action="{{ route('cv', ['section' => 'pengalaman_kerja']) }}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-4 gap-4">
                <!-- Bidang -->
                <div class="col-span-2">
                    <input
                        id="city"
                        type="text"
                        name="city"
                        placeholder="Bidang"
                        class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                        required />
                </div>
                <!-- Kota -->
                <div class="col-span-2">
                    <input
                        id="address"
                        type="text"
                        name="address"
                        placeholder="Kota"
                        class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                        required />
                </div>
                <!-- Sekolah -->
                <div class="col-span-4">
                    <input
                        id="first_name"
                        type="text"
                        name="first_name"
                        placeholder="Sekolah"
                        class="mt-1 block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                        required />
                </div>
                <!-- Tanggal Mulai -->
                <div class="col-span-2">
                    <label for="start_date" class="block text-sm text-gray-500">Tanggal Mulai</label>
                    <input
                        id="start_date"
                        type="date"
                        name="start_date"
                        placeholder="Tanggal Mulai"
                        class="mt-1 block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                        required />
                </div>
                <!-- Tanggal Selesai -->
                <div class="col-span-2">
                    <label for="end_date" class="block text-sm text-gray-500">Tanggal Selesai</label>
                    <input
                        id="end_date"
                        type="date"
                        name="end_date"
                        placeholder="Tanggal Selesai"
                        class="mt-1 block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                    />
                </div>
                <!-- Masih sekolah -->
                <div class="flex items-center col-span-4">
                    <input
                        id="masih_sekolah"
                        type="checkbox"
                        name="masih_sekolah"
                        class="mr-2"
                        onclick="toggleEndDate()"
                    />
                    <label for="masih_sekolah" class="text-sm text-gray-400">Masih sekolah di sini</label>
                </div>
                <!-- Tambahkan Deskripsi -->
                <div class="flex items-center col-span-4">
                    <input
                        id="toggle_description"
                        type="checkbox"
                        name="toggle_description"
                        class="mr-2"
                        onclick="toggleDescription()"
                    />
                    <label for="toggle_description" class="text-sm text-gray-400">Tambahkan deskripsi</label>
                </div>

                <!-- Deskripsi -->
                <div class="col-span-4" id="description_form" style="display: none;">
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
            placeholder: 'Deskripsi',
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

    function toggleDescription() {
        const descriptionForm = document.getElementById('description_form');
        const checkbox = document.getElementById('toggle_description');

        // Menampilkan atau menyembunyikan form Quill berdasarkan status checkbox
        if (checkbox.checked) {
            descriptionForm.style.display = 'block'; // Tampilkan form deskripsi
        } else {
            descriptionForm.style.display = 'none'; // Sembunyikan form deskripsi
        }
    }

    function toggleEndDate() {
        const masihBekerja = document.getElementById('masih_sekolah');
        const endDate = document.getElementById('end_date');
        const endDateContainer = endDate.closest('div'); // Menemukan elemen induk dari input tanggal selesai

        // Mengecek jika checkbox dicentang
        if (masihBekerja.checked) {
            endDateContainer.style.display = 'none';  // Sembunyikan input tanggal selesai
        } else {
            endDateContainer.style.display = 'block'; // Tampilkan kembali input tanggal selesai
        }
    }
</script>


@endsection
