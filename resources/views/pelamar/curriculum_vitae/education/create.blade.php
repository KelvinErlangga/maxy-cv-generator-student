<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendidikan | CVRE GENERATE</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{asset('assets/icons/logo.svg')}}" type="image/x-icon">

    <!-- Quill.js CSS -->
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
</head>

<body class="min-h-screen flex flex-col relative bg-gradient-to-b from-white via-purple-50 to-blue-50" style="font-family: 'Poppins', sans-serif">

    <!-- Background -->
    <img src="{{asset('assets/images/background.png')}}" alt="Background Shape" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">

    <!-- Back Button -->
    <div class="absolute top-10 left-40 z-30">
        <a href="#" class="text-blue-700 hover:underline text-sm flex items-center">
            <svg class="w-10 h-10 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
    </div>

    <!-- Stepper -->
    <div class="flex justify-center mt-8 mb-20 relative z-20">
        <div class="flex items-center">
            <!-- Step 1: Check Icon -->
            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-blue-700 text-white font-bold">
                <img src="{{asset('assets/images/done.svg')}}" alt="Check Icon" class="w-6 h-6" />
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
        <form method="POST" action="{{route('pelamar.curriculum_vitae.education.addEducation', $curriculumVitaeUser->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-4 gap-4">
                <!-- Bidang -->
                <div class="col-span-2">
                    <input
                        id="field_of_study"
                        type="text"
                        name="field_of_study"
                        placeholder="Bidang"
                        class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                        required />
                </div>
                <!-- Kota -->
                <div class="col-span-2">
                    <input
                        id="city_education"
                        type="text"
                        name="city_education"
                        placeholder="Kota"
                        class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none"
                        style="height: 45px; padding: 0 16px"
                        required />
                </div>
                <!-- Sekolah -->
                <div class="col-span-4">
                    <input
                        id="school_name"
                        type="text"
                        name="school_name"
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
                        style="height: 45px; padding: 0 16px" />
                </div>
                <!-- Masih sekolah -->
                <div class="flex items-center col-span-4">
                    <input
                        id="masih_sekolah"
                        type="checkbox"
                        name="masih_sekolah"
                        class="mr-2"
                        onclick="toggleEndDate()" />
                    <label for="masih_sekolah" class="text-sm text-gray-400">Masih sekolah di sini</label>
                </div>
                <!-- Tambahkan Deskripsi -->
                <div class="flex items-center col-span-4">
                    <input
                        id="toggle_description"
                        type="checkbox"
                        name="toggle_description"
                        class="mr-2"
                        onclick="toggleDescription()" />
                    <label for="toggle_description" class="text-sm text-gray-400">Tambahkan deskripsi</label>
                </div>

                <!-- Deskripsi -->
                <div class="col-span-4" id="description_form" style="display: none;">
                    <!-- Quill Editor -->
                    <div id="editor" class="bg-white rounded border border-gray-300" style="height: 150px;"></div>
                    <input id="description_education" name="description_education" type="hidden"></input>
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

    <!-- Quill.js JS -->
    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi Quill
            var quill = new Quill('#editor', {
                theme: 'snow',
                placeholder: 'Deskripsi',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline'], // Bold, Italic, Underline
                        [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }] // Ordered & Unordered List
                    ]
                }
            });

            // Set Font Poppins untuk Quill Editor
            quill.root.style.fontFamily = 'Poppins, sans-serif';

            // Sinkronisasi data Quill ke textarea
            var summaryTextarea = document.querySelector('textarea#description_education');
            quill.on('text-change', function() {
                summaryTextarea.value = quill.root.innerHTML;
            });
        });

        function toggleDescription() {
            const descriptionForm = document.getElementById('description_form');
            const checkbox = document.getElementById('toggle_description');

            if (checkbox.checked) {
                descriptionForm.style.display = 'block';
            } else {
                descriptionForm.style.display = 'none';
            }
        }

        function toggleEndDate() {
            const masihBekerja = document.getElementById('masih_sekolah');
            const endDate = document.getElementById('end_date');
            const endDateContainer = endDate.closest('div');

            if (masihBekerja.checked) {
                endDateContainer.style.display = 'none';
                endDate.value = '';
            } else {
                endDateContainer.style.display = 'block';
            }
        }
    </script>
</body>

</html>