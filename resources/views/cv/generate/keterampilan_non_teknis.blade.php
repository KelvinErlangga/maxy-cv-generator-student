@extends('layouts.generator')

@section('title', 'Keterampilan Non Teknis | CVRE GENERATE')

@section('content')
<!-- Form Keterampilan Non Teknis -->
<div class="min-h-screen flex flex-col relative bg-gradient-to-b from-white via-purple-50 to-blue-50">
    <!-- Background -->
    <img src="{{ asset('images/homepage/background.png') }}" alt="Background Shape" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none" />

    <!-- Back Button -->
    <div class="absolute top-10 left-40 z-10">
        <a href="{{ route('cv', ['section' => 'keterampilan_teknis']) }}" class="text-blue-700 hover:underline text-sm flex items-center">
            <svg class="w-10 h-10 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
    </div>

    <!-- Stepper -->
    <div class="flex justify-center mt-8 mb-20">
        <div class="flex items-center">
            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-blue-700 text-white font-bold">
                <img src="{{ asset('images/icons/done.svg') }}" alt="Check Icon" class="w-6 h-6" />
            </div>
            <div class="w-28 h-px bg-blue-700"></div>

            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-blue-700 text-white text-3xl">
                2
            </div>
            <div class="w-28 h-px bg-blue-700"></div>

            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-gray-300 text-gray-700 text-3xl">
                3
            </div>
        </div>
    </div>

    <!-- Form Container -->
    <form method="POST" action="{{ route('cv', ['section' => 'keterampilan_teknis']) }}" class="bg-white shadow-lg rounded-lg p-8 mx-auto z-10 mb-20 grid grid-cols-1 md:grid-cols-2 gap-8" style="max-width: 500px; width: 100%;">
        @csrf
        <h2 class="text-2xl text-center text-blue-800 md:col-span-2 mb-8">Keterampilan Non Teknis</h2>

        <!-- Left Section: Keahlian dan Level -->
        <div class="col-span-2 md:col-span-2">
            <textarea id="summary" name="summary" class="hidden"></textarea>
            <div id="editor" class="bg-white rounded border border-gray-300" style="height: 150px"></div>
        </div>

        <!-- Submit Button -->
        <div class="md:col-span-2">
            <button type="submit" class="mt-6 w-full py-4 bg-blue-700 text-white text-sm font-medium rounded shadow hover:bg-blue-800 focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 transition">
                Langkah Selanjutnya
            </button>
        </div>
    </form>
</div>

<!-- Load Quill JS and CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

<!-- Script to initialize Quill -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Inisialisasi Quill
        var quill = new Quill("#editor", {
          theme: "snow",  // Tema snow
          placeholder: "Deskripsi Keterampilan Non Teknis", // Placeholder text
          modules: {
            toolbar: [
              ["bold", "italic", "underline"], // Bold, Italic, Underline
              [{ list: "ordered" }, { list: "bullet" }], // Ordered & Unordered List
            ],
          },
        });

        // Set Font Poppins untuk Quill Editor
        quill.root.style.fontFamily = "Poppins, sans-serif";

        // Simpan data Quill ke textarea secara otomatis
        var summaryTextarea = document.getElementById("summary");
        quill.on("text-change", function () {
          summaryTextarea.value = quill.root.innerHTML;  // Update hidden textarea with Quill content
        });
    });
</script>

@endsection
