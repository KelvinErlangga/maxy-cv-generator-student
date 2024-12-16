<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi | CVRE GENERATE</title>
    <link rel="icon" href="{{asset('assets/icons/logo.svg')}}" type="image/x-icon">
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex flex-col relative bg-gradient-to-b from-white via-purple-50 to-blue-50" style="font-family: 'Poppins', sans-serif">
    <!-- Background -->
    <img src="{{asset('assets/images/background.png')}}" alt="Background Shape" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none" />

    <!-- Back Button -->
    <div class="absolute top-10 left-40 z-10">
        <a href="previous_page.html" class="text-blue-700 hover:underline text-sm flex items-center">
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
            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-blue-700 text-white text-3xl">2</div>
            <div class="w-28 h-px bg-blue-700"></div>

            <!-- Step 3 -->
            <div class="flex justify-center items-center w-14 h-14 rounded-full bg-gray-300 text-gray-700 text-3xl">3</div>
        </div>
    </div>

    <!-- Form Container -->
    <div class="bg-white shadow-lg rounded-lg p-8 mx-auto z-10 mb-20" style="max-width: 800px; width: 100%;">
        <!-- Form Title -->
        <h2 class="text-2xl text-center text-blue-800 mb-8">Prestasi</h2>

        <!-- Form -->
        <form method="POST" action="{{route('pelamar.curriculum_vitae.achievement.addAchievement', $curriculumVitaeUser->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-4 gap-4">
                <!-- Prestasi -->
                <div class="col-span-2">
                    <input id="achievement_name" type="text" name="achievement_name" placeholder="Prestasi" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 16px" required />
                </div>
                <!-- Kota -->
                <div class="col-span-2">
                    <input id="city_achievement" type="text" name="city_achievement" placeholder="Kota" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 16px" required />
                </div>
                <!-- Penyelenggara -->
                <div class="col-span-2 mt-6">
                    <input id="organizer_achievement" type="text" name="organizer_achievement" placeholder="Penyelenggara" class="block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 16px" required />
                </div>
                <!-- Tanggal -->
                <div class="col-span-2">
                    <label for="date_achievement" class="block text-sm text-gray-500">Tanggal</label>
                    <input id="date_achievement" type="date" name="date_achievement" class="mt-1 block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 16px" />
                </div>
                <!-- Ringkasan -->
                <div class="col-span-4 mt-3">
                    <!-- Quill Editor -->
                    <div id="editor" class="bg-white rounded border border-gray-300" style="height: 150px;"></div>
                    <input type="hidden" id="description_achievement" name="description_achievement">
                </div>
            </div>

            <!-- Langkah Selanjutnya -->
            <button type="submit" class="mt-6 w-full py-4 bg-blue-700 text-white text-sm font-medium rounded shadow hover:bg-blue-800 focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 transition">
                Langkah Selanjutnya
            </button>
        </form>
    </div>
    </div>

    <!-- Quill.js CSS & JS -->
    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi Quill
            var quill = new Quill('#editor', {
                theme: 'snow',
                placeholder: 'Deskripsi Prestasi',
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

            // Set Font Poppins for Quill Editor
            quill.root.style.fontFamily = 'Poppins, sans-serif';

            // Simpan data Quill ke input hidden
            var summaryInput = document.querySelector('input#description_achievement');
            quill.on('text-change', function() {
                summaryInput.value = quill.root.innerHTML;
            });
        });
    </script>
</body>

</html>