<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengalaman Organisasi | CVRE GENERATE</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="min-h-screen bg-gradient-to-b from-white via-purple-50 to-blue-50" style="font-family: 'Poppins', sans-serif">

    <!-- Form Pengalaman Organisasi -->
    <div class="relative flex flex-col">

        <!-- Background -->
        <img src="{{asset('assets/images/background.png')}}" alt="Background Shape" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none" />

        <!-- Back Button -->
        <div class="absolute top-10 left-40 z-10">
            <a href="#pengalaman_organisasi" class="text-blue-700 hover:underline text-sm flex items-center">
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

        <!-- Container -->
        <div class="bg-white shadow-lg rounded-lg p-8 mx-auto z-10 mb-20" style="max-width: 800px; width: 100%;">

            <!-- Form Title -->
            <h2 class="text-2xl text-center text-blue-800 mb-8">Pengalaman Organisasi</h2>

            <!-- List Pengalaman Organisasi (Dragable) -->
            <ul id="experience-list" class="space-y-4">
                <!-- Pengalaman Organisasi 1 -->
                @foreach($curriculumVitaeUser->organizations as $organization)
                <a class="p-4" href="{{route('pelamar.curriculum_vitae.organization.EditOrganization', [$curriculumVitaeUser->id, $organization->id])}}">
                    <li class="border border-gray- rounded flex items-center justify-between p-4 shadow">
                        <div class="flex items-center space-x-4">
                            <!-- Icon Drag (Dua Garis) -->
                            <div class="cursor-move text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                                </svg>
                            </div>

                            <!-- Detail Pengalaman -->
                            <div>
                                <h3 class="text-blue-700 font-semibold">{{$organization->position_organization}} | {{$organization->city_organization}}</h3>
                                @if($organization->end_date)
                                <p class="text-gray-500 text-sm">{{$organization->organization_name}} | {{date('M Y', strtotime($organization->start_date))}} - {{date('M Y', strtotime($organization->end_date))}}</p>
                                @else
                                <p class="text-gray-500 text-sm">{{$organization->organization_name}} | {{date('M Y', strtotime($organization->start_date))}} - Sekarang</p>
                                @endif
                            </div>
                        </div>

                        <!-- Tombol Hapus -->
                        <form action="{{route('pelamar.curriculum_vitae.organization.deleteOrganization', [$curriculumVitaeUser->id, $organization->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:text-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7H5m0 0l1.5 13A2 2 0 008.5 22h7a2 2 0 002-1.87L19 7M5 7l1.5-4A2 2 0 018.5 2h7a2 2 0 012 1.87L19 7M10 11v6m4-6v6" />
                                </svg>
                            </button>
                        </form>
                    </li>
                </a>
                @endforeach
            </ul>

            <!-- Tombol Tambah Pengalaman Organisasi -->
            <a href="{{route('pelamar.curriculum_vitae.organization.createOrganization', $curriculumVitaeUser->id)}}" class="mt-6 w-full py-4 bg-blue-100 text-blue-700 text-sm font-bold rounded shadow hover:bg-blue-200 focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 transition text-center block">+ Tambah Pengalaman Organisasi
            </a>

            <!-- Tombol Langkah Selanjutnya -->
            <a href="{{route('pelamar.curriculum_vitae.achievement.index', $curriculumVitaeUser->id)}}" class="mt-6 w-full py-4 bg-blue-700 text-white text-sm font-bold rounded shadow hover:bg-blue-800 focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 transition text-center block">Langkah Selanjutnya</a>
        </div>
    </div>

    <!-- Script SortableJS -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi SortableJS
            const experienceList = document.getElementById('experience-list');
            Sortable.create(experienceList, {
                animation: 150, // Animasi saat drag
                handle: '.cursor-move', // Hanya bagian ikon drag yang bisa digunakan untuk drag
                ghostClass: 'bg-blue-200', // Gaya saat item sedang di-drag
            });
        });
    </script>

</body>

</html>