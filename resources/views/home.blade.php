<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamus Digital Bahasa Cirebon</title>
    
    <!-- Font Premium: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        cirebon: {
                            50: '#fdf3f3',
                            100: '#fbe5e5',
                            500: '#ef4444',
                            600: '#dc2626',
                            800: '#a62b2b', // Merah khas tema aplikasi
                            900: '#8c2222',
                        },
                        accent: {
                            500: '#3b82f6',
                            600: '#2563eb',
                        }
                    },
                    boxShadow: {
                        'glow': '0 0 20px rgba(166, 43, 43, 0.15)',
                        'glow-accent': '0 0 20px rgba(59, 130, 246, 0.2)',
                    }
                }
            }
        }
    </script>
    
    <!-- Alpine.js & Plugin Collapse -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- GSAP & ScrollTrigger untuk Koreografi Animasi -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <style>
        /* Sembunyikan elemen sebelum animasi GSAP berjalan (Mencegah FOUC) */
        .gsap-reveal { visibility: hidden; }
        
        /* Mikro-Interaksi Khusus CSS */
        .btn-hover-fx {
            transition: all 0.3s cubic-bezier(0.2, 0, 0, 1);
        }
        .btn-hover-fx:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
        }
        .card-hover-fx {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .card-hover-fx:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border-color: rgba(166, 43, 43, 0.2);
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased overflow-x-hidden"
      x-data="{ scrolled: false }"
      @scroll.window="scrolled = (window.pageYOffset > 20)">

    <!-- 1. HEADER (Navigasi Dinamis) -->
    <header :class="scrolled ? 'bg-white/80 backdrop-blur-lg shadow-sm border-slate-200' : 'bg-transparent border-transparent'" 
            class="fixed top-0 w-full border-b z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 md:h-20 transition-all duration-300" :class="scrolled ? 'h-16' : 'h-20'">
                <!-- Logo -->
                <div class="flex items-center gap-8">
                    <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                        <div class="w-9 h-9 bg-cirebon-800 rounded-lg flex items-center justify-center text-white font-bold text-xl rounded-tl-full rounded-br-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-105">C</div>
                        <span class="font-extrabold text-2xl tracking-tight text-slate-900">Kamus<span class="text-cirebon-800">Cirebon</span></span>
                    </a>
                    <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                        <a href="#" class="hover:text-cirebon-800 relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-cirebon-800 hover:after:w-full after:transition-all after:duration-300 py-2">Kamus</a>
                        <a href="#" class="hover:text-cirebon-800 relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-cirebon-800 hover:after:w-full after:transition-all after:duration-300 py-2">Tema</a>
                        <a href="#" class="hover:text-cirebon-800 relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-0 after:bg-cirebon-800 hover:after:w-full after:transition-all after:duration-300 py-2">Latihan</a>
                    </nav>
                </div>

                <!-- Ikon Akun & Pencarian -->
                <div class="flex items-center gap-4">
                    <a href="{{ url('/admin/login') }}" class="flex items-center gap-2 text-sm font-semibold text-slate-600 hover:text-cirebon-800 transition-colors p-2 rounded-full hover:bg-cirebon-50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        <span class="hidden sm:block">Masuk</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. HERO SECTION & PENCARIAN -->
    <section class="relative bg-white pt-36 pb-20 md:pt-48 md:pb-32 flex flex-col items-center justify-center overflow-hidden">
        <!-- Elemen Latar Belakang Dekoratif -->
        <div class="absolute inset-0 z-0 opacity-40">
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-cirebon-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
            <div class="absolute top-12 -right-24 w-96 h-96 bg-red-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
        </div>

        <div class="max-w-3xl mx-auto px-4 text-center z-10 hero-container">
            <h1 class="gsap-hero text-4xl md:text-5xl lg:text-7xl font-extrabold text-slate-900 tracking-tight mb-6 leading-tight">
                Kamus Digital <span class="text-transparent bg-clip-text bg-gradient-to-r from-cirebon-600 to-cirebon-800">Cirebon</span>
            </h1>
            <p class="gsap-hero text-lg md:text-xl text-slate-500 mb-12 font-medium max-w-2xl mx-auto">
                Temukan makna, contoh kalimat, dan dengarkan pelafalan kosakata bahasa Cirebon dalam hitungan detik.
            </p>

            <!-- Baris Pencarian Utama -->
            <!-- PERBAIKAN: Action diarahkan ke route web '/search' yang nantinya memanggil API -->
            <form action="{{ url('/search') }}" method="GET" class="gsap-hero relative group max-w-2xl mx-auto">
                <div class="absolute inset-y-0 left-0 pl-6 flex items-center pointer-events-none">
                    <svg class="w-6 h-6 text-slate-400 group-focus-within:text-accent-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" name="keyword" placeholder="Ketik kata yang ingin dicari..." 
                    class="block w-full pl-16 pr-36 py-5 md:py-6 bg-white border border-slate-200 rounded-2xl text-lg shadow-xl shadow-slate-200/50 focus:ring-4 focus:ring-accent-500/15 focus:border-accent-500 hover:border-slate-300 hover:shadow-2xl outline-none transition-all duration-300">
                <div class="absolute inset-y-2.5 right-2.5 flex items-center">
                    <button type="submit" class="bg-slate-900 hover:bg-cirebon-800 text-white font-semibold py-3 px-6 rounded-xl shadow-md btn-hover-fx">
                        Cari Kata
                    </button>
                </div>
            </form>
            
            <div class="gsap-hero flex justify-center gap-8 mt-8 text-sm font-semibold text-slate-500">
                <a href="#" class="hover:text-cirebon-800 flex items-center gap-1.5 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Jelajahi Tema
                </a>
                <a href="#" class="hover:text-cirebon-800 flex items-center gap-1.5 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    Pencarian Lanjut
                </a>
            </div>
        </div>
    </section>

    <!-- Transisi Bentuk Latar -->
    <div class="w-full bg-white relative translate-y-1 z-20">
        <svg viewBox="0 0 1440 120" class="w-full h-auto text-cirebon-800" fill="currentColor" preserveAspectRatio="none">
            <path d="M0,120 C480,0 960,0 1440,120 Z"></path>
        </svg>
    </div>

    <!-- 3. KABAR & TOPIK LATIHAN SECTON -->
    <section class="bg-cirebon-800 pt-12 pb-32 px-4 relative">
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-10 relative z-10">
            <!-- Kartu Kabar Terbaru -->
            <div class="gsap-scroll-card bg-white rounded-2xl shadow-xl shadow-black/20 overflow-hidden border border-slate-100 flex flex-col card-hover-fx gsap-reveal">
                <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50">
                    <h2 class="text-xl font-bold flex items-center gap-2 text-slate-800">
                        <span class="text-2xl">📰</span> Kabar Terbaru
                    </h2>
                </div>
                <div class="p-6 flex-1 bg-white">
                    <div x-data="{ open: true }" class="border-b border-slate-100 pb-5 mb-5">
                        <button @click="open = !open" class="flex justify-between items-center w-full text-left font-semibold text-slate-800 hover:text-cirebon-800 transition-colors focus:outline-none">
                            <span class="text-lg">Fitur Baru: Pengelompokan Tema 🔍✨</span>
                            <span class="text-sm text-slate-400 font-normal flex items-center gap-2 shrink-0">
                                Sept 2026 
                                <svg :class="{'rotate-180': open}" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </span>
                        </button>
                        <div x-show="open" x-collapse x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                            <div class="mt-4 text-slate-600 text-sm leading-relaxed">
                                <p class="mb-4">Mencari kosakata kini lebih terarah. Kami menghadirkan fitur filter untuk menampilkan kata berdasarkan materi Muatan Lokal seperti Lingkungan Sekolah dan Kehidupan Sehari-hari.</p>
                                <a href="#" class="inline-block bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-bold px-4 py-2.5 rounded-lg transition-colors uppercase tracking-wide">BACA SELENGKAPNYA</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center py-2 text-base font-medium text-slate-700 hover:text-cirebon-800 cursor-pointer transition-colors group">
                        <span class="relative after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-cirebon-800 group-hover:after:w-full after:transition-all after:duration-300">Audio Pelafalan Tersedia! 🔊</span>
                        <span class="text-slate-400 text-sm">Agust 2026</span>
                    </div>
                </div>
            </div>

            <!-- Kartu Latihan & Evaluasi -->
            <div class="gsap-scroll-card bg-white rounded-2xl shadow-xl shadow-black/20 overflow-hidden border border-slate-100 flex flex-col card-hover-fx gsap-reveal" style="transition-delay: 100ms;">
                <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50">
                    <h2 class="text-xl font-bold flex items-center gap-2 text-slate-800">
                        <span class="text-2xl">📝</span> Topik Latihan
                    </h2>
                    <a href="#" class="text-xs font-bold text-accent-600 hover:text-accent-800 uppercase tracking-wider flex items-center gap-1 transition-colors">
                        Lihat Semua <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
                <div class="p-6 flex flex-col gap-3 bg-white">
                    <a href="#" class="flex justify-between items-center p-4 rounded-xl hover:bg-slate-50 transition-all duration-300 border border-transparent hover:border-slate-200 group">
                        <span class="font-semibold text-slate-700 group-hover:text-cirebon-800 transition-colors">Anggota Keluarga</span>
                        <span class="text-xs font-medium text-slate-500 bg-white border border-slate-200 px-3 py-1.5 rounded-md shadow-sm">10 Soal</span>
                    </a>
                    <a href="#" class="flex justify-between items-center p-4 rounded-xl hover:bg-slate-50 transition-all duration-300 border border-transparent hover:border-slate-200 group">
                        <span class="font-semibold text-slate-700 group-hover:text-cirebon-800 transition-colors">Mengenal Kata Kerja Dasar</span>
                        <span class="text-xs font-medium text-slate-500 bg-white border border-slate-200 px-3 py-1.5 rounded-md shadow-sm">15 Soal</span>
                    </a>
                    <a href="#" class="flex justify-between items-center p-4 rounded-xl bg-cirebon-50/50 hover:bg-cirebon-50 transition-all duration-300 border border-transparent hover:border-cirebon-100 group">
                        <span class="font-semibold text-slate-700 group-hover:text-cirebon-800 transition-colors">Evaluasi Akhir Semester</span>
                        <span class="text-xs font-bold text-white bg-cirebon-600 px-3 py-1.5 rounded-md shadow-sm">Baru</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. ABOUT US & MISSION SECTION -->
    <section class="py-32 bg-white border-b border-slate-100 overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center mb-32">
                <div class="gsap-about-text gsap-reveal">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">Tentang Kami</h2>
                    <div class="space-y-5 text-slate-600 leading-relaxed text-lg">
                        <p>KamusCirebon adalah platform digital khusus yang dibangun sebagai sumber belajar pendamping muatan lokal bagi siswa SMP. Diinisiasi dari penelitian R&D, kami menyediakan lema, terjemahan, dan contoh kalimat yang terverifikasi.</p>
                        <p>Dengan memanfaatkan teknologi modern, aplikasi ini hadir tanpa perlu instalasi rumit—siap digunakan langsung dari peramban ponsel pintar maupun laboratorium sekolah Anda.</p>
                    </div>
                </div>
                <!-- Box Ilustrasi Visual Cirebon -->
                <div class="gsap-about-img relative flex justify-center gsap-reveal">
                    <div class="w-80 h-80 bg-gradient-to-tr from-cirebon-100 to-cirebon-50 rounded-[3rem] flex items-center justify-center shadow-inner overflow-hidden relative transform rotate-3 hover:rotate-0 transition-transform duration-500">
                        <div class="absolute bottom-0 w-full h-1/2 bg-white/40 backdrop-blur-sm border-t border-white/50"></div>
                        <div class="text-8xl drop-shadow-xl z-10 hover:scale-110 transition-transform duration-500">🏛️</div>
                    </div>
                </div>
            </div>

            <!-- Misi Kami -->
            <div class="grid lg:grid-cols-2 gap-16 items-center flex-col-reverse lg:flex-row">
                <!-- Ilustrasi Diskusi Pelajar -->
                <div class="gsap-mission-img relative flex justify-center order-2 lg:order-1 gsap-reveal">
                    <div class="w-80 h-80 flex items-center justify-center relative">
                        <div class="absolute w-72 h-56 border-4 border-slate-100 rounded-[3rem] top-12 -left-8 transform -rotate-6"></div>
                        <div class="absolute w-72 h-56 border-4 border-cirebon-800 rounded-[3rem] top-8 -left-4 bg-white shadow-xl flex items-center justify-center">
                            <div class="flex gap-4 relative z-10 text-6xl hover:scale-105 transition-transform duration-300">💬 👨‍🎓</div>
                        </div>
                    </div>
                </div>
                <div class="gsap-mission-text order-1 lg:order-2 gsap-reveal">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-8 tracking-tight">Misi Kami</h2>
                    <blockquote class="pl-8 border-l-4 border-cirebon-500 text-2xl font-medium text-slate-800 italic leading-relaxed relative">
                        <span class="text-5xl text-cirebon-200 absolute -top-4 -left-3 font-serif">"</span>
                        Membangun jembatan digital untuk melestarikan dan menginspirasi penggunaan Bahasa Cirebon yang tepat, praktis, dan menyenangkan bagi pelajar.
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. SOCIAL NETWORKS (Jejaring / Komunitas) -->
    <section class="py-32 bg-slate-50 relative overflow-hidden">
        <!-- Dekorasi Ornamen Mesh/Glow -->
        <div class="absolute right-0 bottom-0 w-1/2 h-full bg-gradient-to-l from-slate-100 to-transparent pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-20 items-center">
            <!-- Tampilan Gawai Dummy dengan Efek Float -->
            <div class="flex justify-center relative gsap-social-img gsap-reveal">
                <div class="w-[300px] h-[600px] bg-white border-8 border-slate-800 rounded-[3rem] shadow-2xl p-6 flex flex-col gap-5 relative overflow-hidden">
                    <!-- Notch HP -->
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-6 bg-slate-800 rounded-b-2xl"></div>
                    
                    <div class="mt-8 w-full h-20 bg-cirebon-50 rounded-2xl flex items-center px-5 transform hover:-translate-y-1 transition-transform cursor-pointer"><div class="w-1/2 h-3 bg-cirebon-400 rounded-full"></div></div>
                    <div class="w-5/6 h-20 bg-slate-100 rounded-2xl self-end flex items-center px-5 transform hover:-translate-y-1 transition-transform cursor-pointer"><div class="w-2/3 h-3 bg-slate-300 rounded-full"></div></div>
                    <div class="w-full h-24 bg-cirebon-50 rounded-2xl flex flex-col justify-center gap-3 px-5 transform hover:-translate-y-1 transition-transform cursor-pointer">
                        <div class="w-3/4 h-3 bg-cirebon-400 rounded-full"></div>
                        <div class="w-1/2 h-3 bg-cirebon-200 rounded-full"></div>
                    </div>
                    
                    <div class="absolute -right-12 bottom-16 text-7xl drop-shadow-2xl gsap-float-icon">📱</div>
                    <div class="absolute -left-6 top-32 text-5xl drop-shadow-xl gsap-float-icon-reverse">✨</div>
                </div>
            </div>

            <!-- Interaksi Accordion Jejaring -->
            <div class="gsap-social-text gsap-reveal">
                <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">Komunitas Interaktif</h2>
                <p class="text-slate-600 mb-10 text-lg leading-relaxed">Bergabunglah dalam jejaring sosial kami untuk berbagi pengalaman belajar, menjawab kuis harian, atau bertukar sapa menggunakan bahasa daerah bersama pelajar lainnya.</p>
                
                <div class="space-y-4" x-data="{ active: 0 }">
                    <!-- Data Loops -->
                    <template x-for="(item, index) in [
                        { name: 'Telegram', icon: '✈️', info: 'Saluran resmi untuk berlatih percakapan bahasa Cirebon. Dapatkan notifikasi kuis harian.' },
                        { name: 'Twitter / X', icon: '🐦', info: 'Menerima pembaruan \'Kosakata Hari Ini\' langsung di linimasa Anda secara real-time.' },
                        { name: 'Facebook', icon: '📘', info: 'Wadah komunitas bagi guru Muatan Lokal dan siswa untuk berbagi materi serta silabus.' },
                        { name: 'Bluesky', icon: '🦋', info: 'Ikuti artikel, pembaruan fitur aplikasi, dan diskusi budaya teknis.' }
                    ]">
                        <div class="bg-white border rounded-2xl overflow-hidden transition-all duration-300 shadow-sm hover:shadow-md"
                             :class="active === index ? 'border-cirebon-500 ring-1 ring-cirebon-500' : 'border-slate-200 hover:border-slate-300'">
                            <button @click="active = active === index ? null : index" class="w-full px-6 py-5 flex justify-between items-center focus:outline-none">
                                <span class="font-bold text-slate-800 flex items-center gap-4 text-lg">
                                    <span x-text="item.icon" class="text-2xl bg-slate-50 w-12 h-12 flex items-center justify-center rounded-full"></span>
                                    <span x-text="item.name"></span>
                                </span>
                                <div class="w-8 h-8 rounded-full flex items-center justify-center transition-colors duration-300" :class="active === index ? 'bg-cirebon-50' : ''">
                                    <svg :class="{'rotate-180 text-cirebon-600': active === index}" class="w-5 h-5 text-slate-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </button>
                            <div x-show="active === index" x-collapse>
                                <div class="px-6 pb-6 pt-0 text-slate-600 text-base leading-relaxed pl-22 ml-16" x-text="item.info"></div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </section>

    <!-- Skrip Inisialisasi Animasi (GSAP) -->
    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            gsap.registerPlugin(ScrollTrigger);

            // 1. Animasi Hero Section (Saat Pertama Muat)
            const heroTl = gsap.timeline();
            heroTl.fromTo(".gsap-hero", 
                { y: 40, opacity: 0 },
                { y: 0, opacity: 1, duration: 0.8, stagger: 0.15, ease: "power3.out", delay: 0.2 }
            );

            // 2. Tampilkan semua elemen .gsap-reveal agar tidak FOUC, lalu atur state awalnya
            gsap.set(".gsap-reveal", { visibility: "visible" });

            // 3. Animasi Scroll untuk Kartu (Berita & Latihan)
            gsap.utils.toArray(".gsap-scroll-card").forEach((card, i) => {
                gsap.from(card, {
                    scrollTrigger: {
                        trigger: card,
                        start: "top 85%", // Mulai animasi saat bagian atas elemen mencapai 85% tinggi viewport
                        toggleActions: "play none none reverse"
                    },
                    y: 50,
                    opacity: 0,
                    duration: 0.6,
                    ease: "power2.out"
                });
            });

            // 4. Animasi Scroll Tentang Kami (Teks dari Kiri, Gambar dari Kanan)
            gsap.from(".gsap-about-text", {
                scrollTrigger: { trigger: ".gsap-about-text", start: "top 80%" },
                x: -50, opacity: 0, duration: 0.8, ease: "power3.out"
            });
            gsap.from(".gsap-about-img", {
                scrollTrigger: { trigger: ".gsap-about-img", start: "top 80%" },
                scale: 0.9, opacity: 0, duration: 0.8, ease: "back.out(1.5)"
            });

            // 5. Animasi Scroll Misi Kami
            gsap.from(".gsap-mission-img", {
                scrollTrigger: { trigger: ".gsap-mission-img", start: "top 80%" },
                x: -50, opacity: 0, duration: 0.8, ease: "power3.out"
            });
            gsap.from(".gsap-mission-text", {
                scrollTrigger: { trigger: ".gsap-mission-text", start: "top 80%" },
                x: 50, opacity: 0, duration: 0.8, ease: "power3.out", delay: 0.1
            });

            // 6. Animasi Scroll Jejaring Sosial
            gsap.from(".gsap-social-img", {
                scrollTrigger: { trigger: ".gsap-social-img", start: "top 80%" },
                y: 50, opacity: 0, duration: 0.8, ease: "power3.out"
            });
            gsap.from(".gsap-social-text", {
                scrollTrigger: { trigger: ".gsap-social-text", start: "top 80%" },
                y: 30, opacity: 0, duration: 0.6, ease: "power2.out", delay: 0.2
            });

            // 7. Ambient Continuous Animation (Floating Elements)
            gsap.to(".gsap-float-icon", {
                y: -20,
                duration: 2.5,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });
            gsap.to(".gsap-float-icon-reverse", {
                y: 15,
                duration: 3,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
                delay: 0.5
            });
        });
    </script>
</body>
</html>