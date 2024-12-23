<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Informasi | CVRE GENERATE</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-b from-white via-purple-50 to-blue-50" style="font-family: 'Poppins', sans-serif">
    <!-- Form Link Informasi -->
    <div class="min-h-screen flex flex-col relative">
        <!-- Background -->
        <img src="{{asset('assets/images/background.png')}}" alt="Background Shape" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none" />

        <!-- Back Button -->
        <div class="absolute top-10 left-40 z-10">
            <a href="your-link-here" class="text-blue-700 hover:underline text-sm flex items-center">
                <svg class="w-10 h-10 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
        </div>

        <!-- Stepper -->
        <div class="flex justify-center mt-8 mb-20">
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
        <form id="linkForm" method="POST" action="{{route('pelamar.curriculum_vitae.social_media.addSocialMedia', $curriculumVitaeUser->id)}}" class="bg-white shadow-lg rounded-lg p-8 mx-auto z-10 mb-20" style="max-width: 800px; width: 100%;">
            @csrf
            <h2 class="text-2xl text-center text-blue-800 mb-8">Link Informasi</h2>

            <!-- Swiper Container (Drag and Drop List) -->
            <ul id="link-list" class="space-y-4">
                <!-- Link Informasi 1 -->
                <li class="rounded flex items-center justify-between">
                    <div class="flex items-center space-x-4 w-full">
                        <!-- Drag Icon (Two Lines) -->
                        <div class="cursor-move text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                            </svg>
                        </div>

                        <!-- Link Informasi dan Field Level -->
                        <div class="grid grid-cols-2 gap-4 w-full">
                            <div class="col-span-1">
                                <input type="text" name="link_name[]" class="link-input block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;" placeholder="Masukkan Nama Link" required />
                                @error('link_name')
                                <div class="text-sm font-thin text-red-500">Link harus diisi</div>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <input type="text" name="url[]" class="desc-input block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;" placeholder="Masukkan Link Informasi" required />
                            </div>
                        </div>
                    </div>

                    <!-- Delete Button -->
                    <button class="text-red-500 hover:text-red-700 transition ml-4 delete-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7H5m0 0l1.5 13A2 2 0 008.5 22h7a2 2 0 002-1.87L19 7M5 7l1.5-4A2 2 0 018.5 2h7a2 2 0 012 1.87L19 7M10 11v6m4-6v6" />
                        </svg>
                    </button>
                </li>
            </ul>

            <!-- Add Another Link Button -->
            <button type="button" id="add-link-btn" class="mt-6 w-full py-4 bg-blue-100 text-blue-700 text-sm font-bold rounded shadow hover:bg-blue-200 focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 transition text-center block">
                + Tambah Link Informasi Lain
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
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize SortableJS for Link List
            const linkList = document.getElementById('link-list');
            Sortable.create(linkList, {
                animation: 150,
                handle: '.cursor-move',
                ghostClass: 'bg-blue-200',
            });

            // Add new link input
            document.getElementById('add-link-btn').addEventListener('click', function() {
                // Check if all existing inputs are filled
                const links = document.querySelectorAll('.link-input');
                const descriptions = document.querySelectorAll('.desc-input');
                for (let i = 0; i < links.length; i++) {
                    if (links[i].value.trim() === '' || descriptions[i].value.trim() === '') {
                        alert('Silakan isi semua field yang ada sebelum menambahkan form baru!');
                        return;
                    }
                }

                // Add new link input form if validation passes
                const linkForm = `
                    <li class="rounded flex items-center justify-between">
                        <div class="flex items-center space-x-4 w-full">
                            <div class="cursor-move text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                                </svg>
                            </div>
                            <div class="grid grid-cols-2 gap-4 w-full">
                                <div class="col-span-1">
                                    <input type="text" name="link_name[]" class="link-input block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;" placeholder="Masukkan Nama Link" required />
                                </div>
                                <div class="col-span-1">
                                    <input type="text" name="url[]" class="desc-input block w-full rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 focus:outline-none" style="height: 45px; padding: 0 10px;" placeholder="Masukkan Link Informasi" required />
                                </div>
                            </div>
                        </div>
                        <button type="button" class="text-red-500 hover:text-red-700 transition ml-4 delete-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7H5m0 0l1.5 13A2 2 0 008.5 22h7a2 2 0 002-1.87L19 7M5 7l1.5-4A2 2 0 018.5 2h7a2 2 0 012 1.87L19 7M10 11v6m4-6v6" />
                            </svg>
                        </button>
                    </li>
                `;
                linkList.insertAdjacentHTML('beforeend', linkForm);
            });

            linkList.addEventListener('click', function(e) {
                if (e.target.closest('button')) {
                    e.target.closest('li').remove();
                }
            });
        });
    </script>
</body>

</html>