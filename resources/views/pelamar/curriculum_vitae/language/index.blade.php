<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahasa | CVRE GENERATE</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="min-h-screen flex flex-col relative bg-gradient-to-b from-white via-purple-50 to-blue-50" style="font-family: 'Poppins', sans-serif">
    <!-- Background -->
    <img src="{{asset('assets/images/background.png')}}" alt="Background Shape" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none" />

    <!-- Back Button -->
    <div class="absolute top-10 left-40 z-10">
        <a href="detail_pribadi.html" class="text-blue-700 hover:underline text-sm flex items-center">
            <svg class="w-10 h-10 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
    </div>

    <!-- Stepper -->
    <div class="flex justify-center mt-8 mb-20 relative z-20">
        <div class="flex items-center">
            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-blue-700 text-white font-bold">
                <img src="{{asset('assets/images/done.svg')}}" alt="Check Icon" class="w-6 h-6" />
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
    <form method="POST" action="{{route('pelamar.curriculum_vitae.language.addLanguage', $curriculumVitaeUser->id)}}" class="bg-white shadow-lg rounded-lg p-8 mx-auto z-10 mb-20" style="max-width: 800px; width: 100%;">
        @csrf
        <h2 class="text-2xl text-center text-blue-800 mb-8">Bahasa</h2>

        <!-- Swiper Container (Drag and Drop List) -->
        <ul id="language-list" class="space-y-4">
            <!-- Language 1 -->
            @forelse($curriculumVitaeUser->languages as $language)
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
                            <select name="language_name[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;" required>
                                <option value="{{$language->language_name}}">{{$language->language_name}}</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Inggris">Inggris</option>
                                <option value="Mandarin">Mandarin</option>
                            </select>
                            @error('language_name')
                            <div class="text-sm font-thin text-red-500">Bahasa harus diisi</div>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <select name="level[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;" required>
                                <option value="{{$language->category_level}}">{{$language->category_level}}</option>
                                <option value="Beginer">Beginer</option>
                                <option value="Medium">Medium</option>
                                <option value="Expert">Expert</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Tombol Hapus -->
                <button class="text-red-500 hover:text-red-700 transition ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7H5m0 0l1.5 13A2 2 0 008.5 22h7a2 2 0 002-1.87L19 7M5 7l1.5-4A2 2 0 018.5 2h7a2 2 0 012 1.87L19 7M10 11v6m4-6v6" />
                    </svg>
                </button>
            </li>
            @empty
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
                            <select name="language_name[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;">
                                <option value="" disabled selected>Pilih Bahasa</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Inggris">Inggris</option>
                                <option value="Mandarin">Mandarin</option>
                            </select>
                            @error('language_name')
                            <div class="text-sm font-thin text-red-500">Bahasa harus diisi</div>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <select name="level[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;">
                                <option value="" disabled selected>Pilih Level</option>
                                <option value="Beginer">Beginer</option>
                                <option value="Medium">Medium</option>
                                <option value="Expert">Expert</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Tombol Hapus -->
                <button class="text-red-500 hover:text-red-700 transition ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7H5m0 0l1.5 13A2 2 0 008.5 22h7a2 2 0 002-1.87L19 7M5 7l1.5-4A2 2 0 018.5 2h7a2 2 0 012 1.87L19 7M10 11v6m4-6v6" />
                    </svg>
                </button>
            </li>
            @endforelse
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

    <!-- SortableJS Library -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const languageList = document.getElementById('language-list');
            Sortable.create(languageList, {
                animation: 150,
                handle: '.cursor-move',
                ghostClass: 'bg-blue-200',
            });

            document.getElementById('add-language-btn').addEventListener('click', function() {
                let allFilled = true;
                const languageSelects = document.querySelectorAll('select[name="language_name[]"]');
                const levelSelects = document.querySelectorAll('select[name="level[]"]');

                languageSelects.forEach((select, index) => {
                    if (!select.value || !levelSelects[index].value) {
                        allFilled = false;
                    }
                });

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
                                        <select name="language_name[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;" required>
                                            <option value="" disabled selected>Pilih Bahasa</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Inggris">Inggris</option>
                                            <option value="Mandarin">Mandarin</option>
                                        </select>
                                    </div>
                                    <div class="col-span-1">
                                        <select name="level[]" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;" required>
                                            <option value="" disabled selected>Pilih Level</option>
                                            <option value="Beginer">Beginer</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Expert">Expert</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="text-red-500 hover:text-red-700 transition ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7H5m0 0l1.5 13A2 2 0 008.5 22h7a2 2 0 002-1.87L19 7M5 7l1.5-4A2 2h7a2 2 0 012 1.87L19 7M10 11v6m4-6v6" />
                                </svg>
                            </button>
                        </li>
                    `;

                    languageList.insertAdjacentHTML('beforeend', languageForm);
                } else {
                    alert('Silakan isi kolom yang masih kosong sebelum menambahkan bahasa baru.');
                }
            });

            languageList.addEventListener('click', function(e) {
                if (e.target.closest('button')) {
                    e.target.closest('li').remove();
                }
            });
        });
    </script>
</body>

</html>