@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen overflow-hidden">
        <!-- Background Shape -->
        <img src="{{ asset('images/homepage/background.png') }}" alt="Background Shape"
             class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">

        <!-- Swiper Hero Carousel -->
        <div class="swiper heroSwiper relative z-10">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide flex items-center justify-center">
                    <div class="container mx-auto flex flex-col-reverse md:flex-row items-center justify-between py-12 px-6 md:px-0 mt-8">
                        <div class="md:w-1/2 text-center md:text-left">
                            <h1 class="text-4xl lg:text-5xl font-extrabold text-blue-800 leading-tight mb-6">
                                Siap Meningkatkan Kariermu?
                            </h1>
                            <p class="text-lg lg:text-xl text-gray-700 leading-relaxed mb-8">
                                Kami menyediakan semua yang kamu butuhkan untuk memulai karier dengan percaya diri. Buat CV dan cover letter yang profesional hanya dalam beberapa langkah mudah.
                            </p>
                            <a href="{{ route('cv.generate') }}"
                               class="bg-blue-800 hover:bg-blue-700 text-white font-medium text-lg lg:text-xl py-3 px-8 rounded-lg shadow-lg">
                                Ciptakan CV
                            </a>
                        </div>
                        <div class="md:w-1/2 flex justify-end">
                            <img src="{{ asset('images/Carousel Banner/Banner 1.png') }}" alt="Banner 1" class="w-4/5 lg:w-auto">
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide flex items-center justify-center">
                    <div class="container mx-auto flex flex-col-reverse md:flex-row items-center justify-between py-12 px-6 md:px-0 mt-8">
                        <div class="md:w-1/2 text-center md:text-left">
                            <h1 class="text-4xl lg:text-5xl font-extrabold text-blue-800 leading-tight mb-6">
                                Langkah Mudah Menuju Karier Impianmu
                            </h1>
                            <p class="text-lg lg:text-xl text-gray-700 leading-relaxed mb-8">
                                Tak perlu bingung dengan format dan desain. Pilih template, isi data yang diperlukan, dan dokumenmu siap diunduh! Siap untuk melamar pekerjaan dengan dokumen yang sempurna dan profesional.
                            </p>
                            <a href="{{ route('cv.generate') }}"
                               class="bg-blue-800 hover:bg-blue-700 text-white font-medium text-lg lg:text-xl py-3 px-8 rounded-lg shadow-lg">
                                Raih Pekerjaanmu
                            </a>
                        </div>
                        <div class="md:w-1/2 flex justify-end">
                            <img src="{{ asset('images/Carousel Banner/Banner 2.png') }}" alt="Banner 2" class="w-4/5 lg:w-auto">
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide flex items-center justify-center">
                    <div class="container mx-auto flex flex-col-reverse md:flex-row items-center justify-between py-12 px-6 md:px-0 mt-8">
                        <div class="md:w-1/2 text-center md:text-left">
                            <h1 class="text-4xl lg:text-5xl font-extrabold text-blue-800 leading-tight mb-6">
                                Mulai Sekarang, Kejar Karier Impianmu!
                            </h1>
                            <p class="text-lg lg:text-xl text-gray-700 leading-relaxed mb-8">
                                Jadikan langkah pertamamu menuju karier yang sukses lebih mudah dan percaya diri bersama CVRE Generate! Klik “Buat CV” dan ciptakan CV atau cover letter profesionalmu.
                            </p>
                            <a href="{{ route('cv.generate') }}"
                               class="bg-blue-800 hover:bg-blue-700 text-white font-medium text-lg lg:text-xl py-3 px-8 rounded-lg shadow-lg">
                                Capai Impianmu
                            </a>
                        </div>
                        <div class="md:w-1/2 flex justify-end">
                            <img src="{{ asset('images/Carousel Banner/Banner 3.png') }}" alt="Banner 3" class="w-4/5 lg:w-auto">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Swiper Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <!-- Gradients for smooth transition -->
        <div class="absolute bottom-0 inset-x-0 h-24 bg-gradient-to-t from-blue-50 via-blue-50 to-transparent"></div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-blue-50 py-12">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center text-center space-y-6 md:space-y-0">
            <div class="flex-1">
                <h3 class="text-3xl font-bold text-blue-800">1300+</h3>
                <p class="text-gray-600 text-lg">CV telah di-generate</p>
            </div>
            <div class="flex-1">
                <h3 class="text-3xl font-bold text-blue-800">1000+</h3>
                <p class="text-gray-600 text-lg">Pengguna diterima di top perusahaan</p>
            </div>
            <div class="flex-1">
                <h3 class="text-3xl font-bold text-blue-800">1200+</h3>
                <p class="text-gray-600 text-lg">Cover letter telah di-generate</p>
            </div>
        </div>
    </section>

    <!-- Partner Logos Section -->
    <section class="bg-blue-50 py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-blue-800 mb-8">MITRA PERUSAHAAN</h2>
            <div class="flex flex-wrap justify-center items-center gap-6">
                <img src="{{ asset('images/homepage/logo1.png') }}" alt="Logo 1" class="h-16">
                <img src="{{ asset('images/homepage/logo2.png') }}" alt="Logo 2" class="h-16">
                <img src="{{ asset('images/homepage/logo3.png') }}" alt="Logo 3" class="h-16">
                <img src="{{ asset('images/homepage/logo4.png') }}" alt="Logo 4" class="h-16">
                <img src="{{ asset('images/homepage/logo5.png') }}" alt="Logo 5" class="h-16">
            </div>
        </div>
    </section>

    <!-- Call to Action CV Section -->
    <section class="py-12 bg-blue-50">
        <div class="container mx-auto flex flex-col lg:flex-row items-center bg-white shadow-lg rounded-lg p-8">
            <!-- Text Content -->
            <div class="lg:w-1/2 text-center lg:text-left">
                <h2 class="text-4xl font-extrabold text-blue-800 mb-6">Raih Karier Impianmu!</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Tingkatkan peluang karir Anda dengan mudah melalui pilihan template profesional kami.
                    Yuk buat CV Anda sekarang, rasakan kemudahannya, dan raih karir yang Anda impikan!
                </p>
                <a href="{{ route('cv.generate') }}"
                   class="bg-blue-800 hover:bg-blue-700 text-white font-medium text-lg py-3 px-16 rounded-lg shadow-lg">
                    Buat CV
                </a>
            </div>

            <!-- CV Slider -->
            <div class="lg:w-1/2 flex justify-center lg:justify-end">
                <div class="swiper mySwiper w-full max-w-2xl">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 10; $i++)
                            <div class="swiper-slide">
                                <img src="{{ asset('images/CV/' . $i . '.png') }}"
                                     alt="CV Preview {{ $i }}"
                                     class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto"
                                     style="object-fit: cover;">
                            </div>
                        @endfor
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
                    <img src="{{ asset('images/Card Fiture/Full Template.png') }}" alt="Full Template"
                         class="h-20 mx-auto mb-4">
                    <h3 class="text-lg font-bold text-blue-800 mb-2">FULL TEMPLATE</h3>
                    <p class="text-gray-600 text-sm">
                        Tersedia banyak pilihan template mulai dari Profesional, Simple, Creative dan Modern.
                    </p>
                </div>

                <!-- Full Edit -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <img src="{{ asset('images/Card Fiture/Full Edit.png') }}" alt="Full Edit"
                         class="h-20 mx-auto mb-4">
                    <h3 class="text-lg font-bold text-blue-800 mb-2">FULL EDIT</h3>
                    <p class="text-gray-600 text-sm">
                        Pengguna dapat menambah, mengubah dan menghapus tampilan baik font atau warna pada CV secara bebas.
                    </p>
                </div>

                <!-- ATS Friendly -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <img src="{{ asset('images/Card Fiture/Ats Friendly.png') }}" alt="ATS Friendly"
                         class="h-20 mx-auto mb-4">
                    <h3 class="text-lg font-bold text-blue-800 mb-2">ATS FRIENDLY</h3>
                    <p class="text-gray-600 text-sm">
                        Mengoptimalkan desain CV agar mudah dibaca oleh ATS dan meningkatkan peluang CV lolos penyaringan.
                    </p>
                </div>

                <!-- API Company -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <img src="{{ asset('images/Card Fiture/Api Company.png') }}" alt="API Company"
                         class="h-20 mx-auto mb-4">
                    <h3 class="text-lg font-bold text-blue-800 mb-2">API COMPANY</h3>
                    <p class="text-gray-600 text-sm">
                        Pengguna mengakses lowongan dari perusahaan yang telah terintegrasi serta dapat dikirim ke perusahaan tujuan.
                    </p>
                </div>

                <!-- Auto Correct -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <img src="{{ asset('images/Card Fiture/Auto Correct.png') }}" alt="Auto Correct"
                         class="h-20 mx-auto mb-4">
                    <h3 class="text-lg font-bold text-blue-800 mb-2">AUTO CORRECT</h3>
                    <p class="text-gray-600 text-sm">
                        Membantu pengguna mengoreksi kesalahan ejaan dan tata bahasa dan memastikan CV terlihat lebih profesional.
                    </p>
                </div>

                <!-- Job References -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <img src="{{ asset('images/Card Fiture/Job References.png') }}" alt="Job References"
                         class="h-20 mx-auto mb-4">
                    <h3 class="text-lg font-bold text-blue-800 mb-2">JOB REFERENCES</h3>
                    <p class="text-gray-600 text-sm">
                        Pengguna akan mendapatkan Referensi pekerjaan yang sesuai dengan isi dari CV yang dibuat.
                    </p>
                </div>

                <!-- Export More File -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <img src="{{ asset('images/Card Fiture/Export More File.png') }}" alt="Export More File"
                         class="h-20 mx-auto mb-4">
                    <h3 class="text-lg font-bold text-blue-800 mb-2">EXPORT MORE FILE</h3>
                    <p class="text-gray-600 text-sm">
                        Dapat menyimpan CV dan Cover Letter dalam format file seperti Word atau PDF sesuai dengan kebutuhan.
                    </p>
                </div>

                <!-- Security & Privacy -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <img src="{{ asset('images/Card Fiture/Security And Privacy.png') }}" alt="Security Privacy"
                         class="h-20 mx-auto mb-4">
                    <h3 class="text-lg font-bold text-blue-800 mb-2">SECURITY & PRIVACY</h3>
                    <p class="text-gray-600 text-sm">
                        Mendapatkan perlindungan data dengan enkripsi yang kuat, sehingga informasi pribadi tetap aman dan terlindungi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Cover Letter Section -->
    <section class="py-12 bg-blue-50">
        <div class="container mx-auto flex flex-col lg:flex-row items-center bg-white shadow-lg rounded-lg p-8">
            <!-- Text Content -->
            <div class="lg:w-1/2 text-center lg:text-left">
                <h2 class="text-4xl font-extrabold text-blue-800 mb-6">Mulai Langkah Suksesmu!</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Dapatkan pekerjaan impian Anda dengan Cover Letter yang menarik dan efektif.
                    Dengan CVRE Generate, menulis cover letter tidak butuh waktu yang lama dan membingungkan.
                </p>
                <a href="{{ route('cv.generate') }}"
                   class="bg-blue-800 hover:bg-blue-700 text-white font-medium text-lg py-3 px-16 rounded-lg shadow-lg">
                    Buat CV
                </a>
            </div>

            <!-- CV Slider -->
            <div class="lg:w-1/2 flex justify-center lg:justify-end">
                <div class="swiper mySwiper w-full max-w-2xl">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 10; $i++)
                            <div class="swiper-slide">
                                <img src="{{ asset('images/Cover Letter/Cover Letter Color ' . $i . '.png') }}"
                                     alt="Cover Letter Preview {{ $i }}"
                                     class="rounded-lg shadow-md w-full h-auto max-w-full mx-auto"
                                     style="object-fit: cover;">
                            </div>
                        @endfor
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
                    <img src="images/User/ellipse 431.png" alt="Rambo LI"
                        class="w-20 h-20 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-bold text-blue-800 flex items-center justify-center">
                        Rambo LI
                        <img src="images/icons/checklist.svg" alt="Checklist"
                            class="w-5 h-5 ml-2">
                    </h3>
                    <p class="text-sm text-gray-500 mb-2">SPV Produksi Di PT Burok</p>
                    <p class="text-sm text-gray-700">Saya sangat merekomendasikan bagi para pelamar yang sedang mencari template CV, karena di CVRE ini memiliki berbagai macam template.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="images/User/ellipse 432.png" alt="Sarah Li"
                        class="w-20 h-20 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-bold text-blue-800 flex items-center justify-center">
                        Sarah Li
                        <img src="images/icons/checklist.svg" alt="Checklist"
                            class="w-5 h-5 ml-2">
                    </h3>
                    <p class="text-sm text-gray-500 mb-2">Manager Di PT Ti Maju Mundur</p>
                    <p class="text-sm text-gray-700">Setelah saya membuat template di CVRE, saya merasa percaya diri dan mendapat feedback positif dari HRD karena CV saya.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="images/User/ellipse 433.png" alt="Andrew"
                        class="w-20 h-20 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-bold text-blue-800 flex items-center justify-center">
                        Andrew
                        <img src="images/icons/checklist.svg" alt="Checklist"
                            class="w-5 h-5 ml-2">
                    </h3>
                    <p class="text-sm text-gray-500 mb-2">IT Support Di Sumsang</p>
                    <p class="text-sm text-gray-700">Saya dapat membuat CV, Cover Letter, hingga mengirim lamaran langsung ke perusahaan hanya dengan satu platform. Sangat memudahkan sekali.</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="images/User/ellipse 434.png" alt="John Doe"
                        class="w-20 h-20 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-bold text-blue-800 flex items-center justify-center">
                        John Doe
                        <img src="images/icons/checklist.svg" alt="Checklist"
                            class="w-5 h-5 ml-2">
                    </h3>
                    <p class="text-sm text-gray-500 mb-2">UI/UX Designer Di Sumsang</p>
                    <p class="text-sm text-gray-700">Saya sangat merekomendasikan CVRE untuk membuat CV dan Cover Letter, dengan pilihan template yang rapi dan menarik.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Swiper.js Initialization -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Hero Section Swiper tanpa interaksi pengguna
            const heroSwiper = new Swiper('.heroSwiper', {
                effect: 'fade', // Fading effect
                fadeEffect: { crossFade: true },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false, // Tetap autoplay meskipun disentuh
                },
                loop: true,
                allowTouchMove: false, // Menonaktifkan interaksi geser
            });

            // Call to Action CV Section Swiper
            const ctaSwiper = new Swiper('.mySwiper', {
                slidesPerView: 2,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false, // Tetap autoplay meskipun disentuh
                },
                allowTouchMove: false, // Menonaktifkan interaksi geser
            });
        });
    </script>
@endsection
