@extends('layouts.master')

@section('title', 'Home | CVRE GENERATE')

@push('style')
<link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" />

<style>
    /* Animasi bergerak secara horizontal */
    @keyframes moveLogos {
        0% {
            transform: translateX(0);
            /* Mulai dari posisi normal */
        }

        100% {
            transform: translateX(-100%);
            /* Geser ke kiri sampai selesai */
        }
    }

    .logosSwiper {
        display: flex;
        gap: 1.5rem;
        /* Jarak antar logo */
        animation: moveLogos 20s linear infinite;
        /* Menjalankan animasi bergerak terus */
    }

    .logosSwiper img {
        height: 4rem;
        /* Ukuran logo */
    }
</style>
@endpush

@section('content')
<!-- Partner Logos Section -->
<section class="bg-blue-50 py-12">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-800 mb-8">MITRA PERUSAHAAN</h2>
        <div class="overflow-hidden">
            <div class="logosSwiper flex gap-6">
                <img src="{{asset('assets/homepage/logo1.png')}}" alt="Logo 1" class="h-16" />
                <img src="{{asset('assets/homepage/logo2.png')}}" alt="Logo 2" class="h-16" />
                <img src="{{asset('assets/homepage/logo3.png')}}" alt="Logo 3" class="h-16" />
                <img src="{{asset('assets/homepage/logo4.png')}}" alt="Logo 4" class="h-16" />
                <img src="{{asset('assets/homepage/logo5.png')}}" alt="Logo 5" class="h-16" />
                <!-- Duplikat logo untuk pergerakan tanpa henti -->
                <img src="{{asset('assets/homepage/logo3.png')}}" alt="Logo 3" class="h-16" />
                <img src="{{asset('assets/homepage/logo1.png')}}" alt="Logo 1" class="h-16" />
                <img src="{{asset('assets/homepage/logo2.png')}}" alt="Logo 2" class="h-16" />
                <img src="{{asset('assets/homepage/logo4.png')}}" alt="Logo 4" class="h-16" />
                <img src="{{asset('assets/homepage/logo5.png')}}" alt="Logo 5" class="h-16" />
            </div>
        </div>
    </div>
</section>

<!-- Call to Action CV Section -->
<section class="py-12 bg-blue-50">
    <div class="container mx-auto flex flex-col lg:flex-row items-center bg-white shadow-lg rounded-lg p-8">
        <!-- Text Content -->
        <div class="lg:w-1/2 text-center lg:text-left">
            <h2 class="text-4xl font-extrabold text-blue-800 mb-6">Raih Karier Impianmu!</h2>
            <p class="text-lg text-gray-700 mb-8">Tingkatkan peluang karir Anda dengan mudah melalui pilihan template profesional kami. Yuk buat CV Anda sekarang, rasakan kemudahannya, dan raih karir yang Anda impikan!</p>
            <a href="#" class="bg-blue-800 hover:bg-blue-700 text-white font-medium text-lg py-3 px-16 rounded-lg shadow-lg"> Buat CV </a>
        </div>

        <!-- CV Slider -->
        <div class="lg:w-1/2 flex justify-center lg:justify-end">
            <div class="swiper mySwiper w-full max-w-2xl">
                <div class="swiper-wrapper">
                    <!-- Loop through images -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cv/1.png')}}" alt="CV Preview 1" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cv/2.png')}}" alt="CV Preview 2" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cv/3.png')}}" alt="CV Preview 3" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cv/4.png')}}" alt="CV Preview 4" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cv/5.png')}}" alt="CV Preview 5" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cv/6.png')}}" alt="CV Preview 6" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cv/7.png')}}" alt="CV Preview 7" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cv/8.png')}}" alt="CV Preview 8" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cv/9.png')}}" alt="CV Preview 9" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cv/10.png')}}" alt="CV Preview 10" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fitur Unggulan Section -->
<section class="bg-blue-50 py-12">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-800 mb-12">FITUR UNGGULAN CVRE</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Full Template -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <img src="{{asset('assets/card-fiture/full-template.png')}}" alt="Full Template" class="h-20 mx-auto mb-4" />
                <h3 class="text-lg font-bold text-blue-800 mb-2">FULL TEMPLATE</h3>
                <p class="text-gray-600 text-sm">Tersedia banyak pilihan template mulai dari Profesional, Simple, Creative dan Modern.</p>
            </div>

            <!-- Full Edit -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <img src="{{asset('assets/card-fiture/full-edit.png')}}" alt="Full Edit" class="h-20 mx-auto mb-4" />
                <h3 class="text-lg font-bold text-blue-800 mb-2">FULL EDIT</h3>
                <p class="text-gray-600 text-sm">Pengguna dapat menambah, mengubah dan menghapus tampilan baik font atau warna pada CV secara bebas.</p>
            </div>

            <!-- ATS Friendly -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <img src="{{asset('assets/card-fiture/ats-friendly.png')}}" alt="ATS Friendly" class="h-20 mx-auto mb-4" />
                <h3 class="text-lg font-bold text-blue-800 mb-2">ATS FRIENDLY</h3>
                <p class="text-gray-600 text-sm">Mengoptimalkan desain CV agar mudah dibaca oleh ATS dan meningkatkan peluang CV lolos penyaringan.</p>
            </div>

            <!-- API Company -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <img src="{{asset('assets/card-fiture/api-company.png')}}" alt="API Company" class="h-20 mx-auto mb-4" />
                <h3 class="text-lg font-bold text-blue-800 mb-2">API COMPANY</h3>
                <p class="text-gray-600 text-sm">Pengguna mengakses lowongan dari perusahaan yang telah terintegrasi serta dapat dikirim ke perusahaan tujuan.</p>
            </div>

            <!-- Auto Correct -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <img src="{{asset('assets/card-fiture/auto-correct.png')}}" alt="Auto Correct" class="h-20 mx-auto mb-4" />
                <h3 class="text-lg font-bold text-blue-800 mb-2">AUTO CORRECT</h3>
                <p class="text-gray-600 text-sm">Membantu pengguna mengoreksi kesalahan ejaan dan tata bahasa dan memastikan CV terlihat lebih profesional.</p>
            </div>

            <!-- Job References -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <img src="{{asset('assets/card-fiture/job-references.png')}}" alt="Job References" class="h-20 mx-auto mb-4" />
                <h3 class="text-lg font-bold text-blue-800 mb-2">JOB REFERENCES</h3>
                <p class="text-gray-600 text-sm">Pengguna akan mendapatkan Referensi pekerjaan yang sesuai dengan isi dari CV yang dibuat.</p>
            </div>

            <!-- Export More File -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <img src="{{asset('assets/card-fiture/export-more-file.png')}}" alt="Export More File" class="h-20 mx-auto mb-4" />
                <h3 class="text-lg font-bold text-blue-800 mb-2">EXPORT MORE FILE</h3>
                <p class="text-gray-600 text-sm">Dapat menyimpan CV dan Cover Letter dalam format file seperti Word atau PDF sesuai dengan kebutuhan.</p>
            </div>

            <!-- Security & Privacy -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <img src="{{asset('assets/card-fiture/security-and-privacy.png')}}" alt="Security Privacy" class="h-20 mx-auto mb-4" />
                <h3 class="text-lg font-bold text-blue-800 mb-2">SECURITY & PRIVACY</h3>
                <p class="text-gray-600 text-sm">Mendapatkan perlindungan data dengan enkripsi yang kuat, sehingga informasi pribadi tetap aman dan terlindungi.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Cover Letter Section -->
<section class="py-12 bg-blue-50">
    <div class="container mx-auto flex flex-col lg:flex-row items-center bg-white shadow-lg rounded-lg p-8">
        <!-- Text Content -->
        <div class="lg:w-1/2 text-center lg:text-left">
            <h2 class="text-4xl font-extrabold text-blue-800 mb-6">Buat Cover Letter Profesionalmu!</h2>
            <p class="text-lg text-gray-700 mb-8">Tingkatkan peluang kerja Anda dengan cover letter yang menarik dan profesional. Mulai buat cover letter Anda sekarang, dan rasakan perbedaannya!</p>
            <a href="#" class="bg-blue-800 hover:bg-blue-700 text-white font-medium text-lg py-3 px-16 rounded-lg shadow-lg"> Buat Cover Letter </a>
        </div>

        <!-- Cover Letter Slider -->
        <div class="lg:w-1/2 flex justify-center lg:justify-end">
            <div class="swiper mySwiper w-full max-w-2xl">
                <div class="swiper-wrapper">
                    <!-- Loop through images -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cover-letter/cover-letter-color-1.png')}}" alt="Cover Letter Preview 1" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cover-letter/cover-letter-color-2.png')}}" alt="Cover Letter Preview 2" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cover-letter/cover-letter-color-3.png')}}" alt="Cover Letter Preview 3" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cover-letter/cover-letter-color-4.png')}}" alt="Cover Letter Preview 4" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cover-letter/cover-letter-color-5.png')}}" alt="Cover Letter Preview 5" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cover-letter/cover-letter-color-6.png')}}" alt="Cover Letter Preview 6" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cover-letter/cover-letter-color-7.png')}}" alt="Cover Letter Preview 7" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cover-letter/cover-letter-color-8.png')}}" alt="Cover Letter Preview 8" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cover-letter/cover-letter-color-9.png')}}" alt="Cover Letter Preview 9" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('assets/cover-letter/cover-letter-color-10.png')}}" alt="Cover Letter Preview 10" class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto" style="object-fit: cover" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-blue-50 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-800 mb-12">APA KATA MEREKA</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <img src="{{asset('assets/user/ellipse-431.png')}}" alt="Rambo LI" class="w-20 h-20 rounded-full mx-auto mb-4 object-cover" />
                <h3 class="text-xl font-bold text-blue-800 flex items-center justify-center">
                    Rambo LI
                    <img src="{{asset('assets/icons/checklist.svg')}}" alt="Checklist" class="w-5 h-5 ml-2" />
                </h3>
                <p class="text-sm text-gray-500 mb-2">SPV Produksi Di PT Burok</p>
                <p class="text-sm text-gray-700">Saya sangat merekomendasikan bagi para pelamar yang sedang mencari template CV, karena di CVRE ini memiliki berbagai macam template.</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <img src="{{asset('assets/user/ellipse-432.png')}}" alt="Sarah Li" class="w-20 h-20 rounded-full mx-auto mb-4 object-cover" />
                <h3 class="text-xl font-bold text-blue-800 flex items-center justify-center">
                    Sarah Li
                    <img src="{{asset('assets/icons/checklist.svg')}}" alt="Checklist" class="w-5 h-5 ml-2" />
                </h3>
                <p class="text-sm text-gray-500 mb-2">Manager Di PT Ti Maju Mundur</p>
                <p class="text-sm text-gray-700">Setelah saya membuat template di CVRE, saya merasa percaya diri dan mendapat feedback positif dari HRD karena CV saya.</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <img src="{{asset('assets/user/ellipse-433.png')}}" alt="Andrew" class="w-20 h-20 rounded-full mx-auto mb-4 object-cover" />
                <h3 class="text-xl font-bold text-blue-800 flex items-center justify-center">
                    Andrew
                    <img src="{{asset('assets/icons/checklist.svg')}}" alt="Checklist" class="w-5 h-5 ml-2" />
                </h3>
                <p class="text-sm text-gray-500 mb-2">IT Support Di Sumsang</p>
                <p class="text-sm text-gray-700">Saya dapat membuat CV, Cover Letter, hingga mengirim lamaran langsung ke perusahaan hanya dengan satu platform. Sangat memudahkan sekali.</p>
            </div>
            <!-- Card 4 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <img src="{{asset('assets/user/ellipse-434.png')}}" alt="John Doe" class="w-20 h-20 rounded-full mx-auto mb-4 object-cover" />
                <h3 class="text-xl font-bold text-blue-800 flex items-center justify-center">
                    John Doe
                    <img src="{{asset('assets/icons/checklist.svg')}}" alt="Checklist" class="w-5 h-5 ml-2" />
                </h3>
                <p class="text-sm text-gray-500 mb-2">UI/UX Designer Di Sumsang</p>
                <p class="text-sm text-gray-700">Saya sangat merekomendasikan CVRE untuk membuat CV dan Cover Letter, dengan pilihan template yang rapi dan menarik.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Swiper.js Initialization -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Hero Section Swiper tanpa interaksi pengguna
        const heroSwiper = new Swiper(".heroSwiper", {
            effect: "fade", // Fading effect
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false, // Tetap autoplay meskipun disentuh
            },
            loop: true,
            allowTouchMove: false, // Menonaktifkan interaksi geser
        });

        // Call to Action CV Section Swiper
        const ctaSwiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 4000,
            },
        });
    });
</script>
@endpush