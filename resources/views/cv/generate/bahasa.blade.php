@extends('layouts.generator')

@section('title', 'Bahasa | CVRE GENERATE')

@section('content')
<!-- Form Bahasa -->
<div class="min-h-screen flex flex-col relative bg-gradient-to-b from-white via-purple-50 to-blue-50">
    <!-- Background -->
    <img src="{{ asset('images/homepage/background.png') }}" alt="Background Shape" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none" />

    <!-- Back Button -->
    <div class="absolute top-10 left-40 z-10">
        <a href="{{ route('cv', ['section' => 'hasil_pendidikan']) }}" class="text-blue-700 hover:underline text-sm flex items-center">
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
    <form method="POST" action="{{ route('cv', ['section' => 'keterampilan_teknis']) }}" class="bg-white shadow-lg rounded-lg p-8 mx-auto z-10 mb-20" style="max-width: 800px; width: 100%;">
        @csrf
        <h2 class="text-2xl text-center text-blue-800 mb-8">Bahasa</h2>

        <!-- Swiper Container (Drag and Drop List) -->
        <ul id="language-list" class="space-y-4">
            <!-- Language 1 -->
            <li class="rounded flex items-center justify-between">
                <div class="flex items-center space-x-4 w-full">
                    <!-- Drag Icon (Two Lines) -->
                    <div class="cursor-move text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                        </svg>
                    </div>

                    <!-- Language and Level Fields -->
                    <div class="grid grid-cols-2 gap-4 w-full">
                        <div class="col-span-1">
                            <select name="language[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;" required>
                                <option value="" disabled selected>Pilih Bahasa</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Inggris">Inggris</option>
                                <option value="Mandarin">Mandarin</option>
                            </select>
                        </div>
                        <div class="col-span-1">
                            <select name="level[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;" required>
                                <option value="" disabled selected>Pilih Level</option>
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="B1">B1</option>
                                <option value="B2">B2</option>
                                <option value="C1">C1</option>
                                <option value="C2">C2</option>
                                <option value="Penutur Asli">Penutur Asli</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Delete Button -->
                <button type="button" class="text-red-500 hover:text-red-700 transition ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7H5m0 0l1.5 13A2 2 0 008.5 22h7a2 2 0 002-1.87L19 7M5 7l1.5-4A2 2 0 018.5 2h7a2 2 0 012 1.87L19 7M10 11v6m4-6v6" />
                    </svg>
                </button>
            </li>
        </ul>

        <!-- Add Another Language Button -->
        <button type="button" id="add-language-btn" class="mt-6 w-full py-4 bg-blue-100 text-blue-700 text-sm font-bold rounded shadow hover:bg-blue-200 focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 transition text-center block">
            + Tambah Bahasa Lain
        </button>

        <!-- Submit Button -->
        <button type="submit" class="mt-6 w-full py-4 bg-blue-700 text-white text-sm font-medium rounded shadow hover:bg-blue-800 focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 transition">
            Langkah Selanjutnya
        </button>
    </form>
</div>

<!-- SortableJS Library -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize SortableJS for Language List
        const languageList = document.getElementById('language-list');
        Sortable.create(languageList, {
            animation: 150,  // Animation duration
            handle: '.cursor-move',  // Only allow dragging using the drag icon
            ghostClass: 'bg-blue-200',  // Style while dragging
        });

        // Add new language input when the button is clicked
        document.getElementById('add-language-btn').addEventListener('click', function() {
            // Check if all language and level inputs are filled
            let allFilled = true;
            const languageSelects = document.querySelectorAll('select[name="language[]"]');
            const levelSelects = document.querySelectorAll('select[name="level[]"]');

            // Loop through the selects to check if any of them are empty
            languageSelects.forEach((select, index) => {
                if (!select.value || !levelSelects[index].value) {
                    allFilled = false;
                }
            });

            // If all fields are filled, add another form
            if (allFilled) {
                const languageForm = `
                    <li class="rounded flex items-center justify-between">
                        <div class="flex items-center space-x-4 w-full">
                            <div class="cursor-move text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                                </svg>
                            </div>
                            <div class="grid grid-cols-2 gap-4 w-full">
                                <div class="col-span-1">
                                    <select name="language[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;" required>
                                        <option value="" disabled selected>Pilih Bahasa</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Inggris">Inggris</option>
                                        <option value="Mandarin">Mandarin</option>
                                    </select>
                                </div>
                                <div class="col-span-1">
                                    <select name="level[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;" required>
                                        <option value="" disabled selected>Pilih Level</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="B1">B1</option>
                                        <option value="B2">B2</option>
                                        <option value="C1">C1</option>
                                        <option value="C2">C2</option>
                                        <option value="Penutur Asli">Penutur Asli</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="text-red-500 hover:text-red-700 transition ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7H5m0 0l1.5 13A2 2 0 008.5 22h7a2 2 0 002-1.87L19 7M5 7l1.5-4A2 2 0 018.5 2h7a2 2 0 012 1.87L19 7M10 11v6m4-6v6" />
                            </svg>
                        </button>
                    </li>
                `;
                document.getElementById('language-list').insertAdjacentHTML('beforeend', languageForm);
            } else {
                alert("Pastikan semua form bahasa dan level terisi sebelum menambah bahasa baru.");
            }
        });
    });
</script>


@endsection
