<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamus Digital Bahasa Cirebon - Muatan Lokal</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js untuk interaksi ringan -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Konfigurasi Tema (Desain Sistem) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'], // Font bersih dan modern
                    },
                    colors: {
                        brand: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            500: '#14b8a6', // Teal modern
                            600: '#0d9488',
                            900: '#134e4a',
                        }
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: 0, transform: 'translateY(20px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
        /* Utilitas untuk delay animasi */
        .delay-100 { animation-delay: 100ms; }
        .delay-200 { animation-delay: 200ms; }
        .delay-300 { animation-delay: 300ms; }
        .opacity-0-init { opacity: 0; }
    </style>
</head>
<body class="font-sans antialiased text-slate-800 bg-slate-50 selection:bg-brand-500 selection:text-white flex flex-col min-h-screen">

    <!-- Navbar Transparan Modern -->
    <header class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200/50 transition-all duration-300" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <!-- Ikon Buku Modern -->
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-brand-500 to-indigo-600 flex items-center justify-center shadow-sm">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <span class="font-bold text-slate-900 tracking-tight">Kamus<span class="text-brand-600">Cirebon</span></span>
            </div>
            <nav class="hidden md:flex space-x-8 text-sm font-medium text-slate-600">
                <a href="#fitur" class="hover:text-brand-600 transition-colors">Fitur</a>
                <a href="#tentang" class="hover:text-brand-600 transition-colors">Tentang Muatan Lokal</a>
            </nav>
            <div>
                <a href="/dictionary" class="text-sm font-semibold text-white bg-slate-900 hover:bg-slate-800 px-5 py-2.5 rounded-full transition-all shadow-sm hover:shadow-md">
                    Buka Kamus
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="flex-grow pt-28 pb-20 px-6">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-12">
            
            <!-- Teks Hero -->
            <div class="md:w-1/2 space-y-6 text-center md:text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-50 text-brand-700 text-xs font-semibold tracking-wide uppercase border border-brand-100 opacity-0-init animate-fade-in-up">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-500"></span>
                    </span>
                    Media Pembelajaran SMP
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.15] opacity-0-init animate-fade-in-up delay-100">
                    Lestarikan Bahasa,<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-indigo-600">
                        Kaya Maknanya.
                    </span>
                </h1>
                
                <p class="text-lg text-slate-600 max-w-lg mx-auto md:mx-0 leading-relaxed opacity-0-init animate-fade-in-up delay-200">
                    Kamus digital interaktif untuk membantu siswa SMP memahami dan melafalkan kosakata Bahasa Cirebon secara kontekstual dengan mudah dan cepat.
                </p>
                
                <div class="flex flex-col sm:flex-row items-center gap-4 pt-4 justify-center md:justify-start opacity-0-init animate-fade-in-up delay-300">
                    <a href="/dictionary" class="w-full sm:w-auto px-8 py-3.5 bg-brand-600 hover:bg-brand-700 text-white font-semibold rounded-full shadow-lg shadow-brand-500/30 transition-all transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500">
                        Mulai Pencarian
                    </a>
                    <a href="/quizzes" class="w-full sm:w-auto px-8 py-3.5 bg-white hover:bg-slate-50 text-slate-700 font-semibold rounded-full shadow-sm border border-slate-200 transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-200">
                        Latihan Kuis
                    </a>
                </div>
            </div>

            <!-- Visual Hero (Ilustrasi Interaktif) -->
            <div class="md:w-1/2 relative opacity-0-init animate-fade-in-up delay-200">
                <!-- Elemen dekoratif latar belakang -->
                <div class="absolute inset-0 bg-gradient-to-tr from-brand-100 to-indigo-50 rounded-full blur-3xl opacity-60 animate-float"></div>
                
                <!-- Mockup/Kartu Visual Modern -->
                <div class="relative bg-white p-6 rounded-2xl shadow-xl border border-slate-100 transform rotate-1 hover:rotate-0 transition-transform duration-500">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex space-x-1.5">
                            <div class="w-3 h-3 rounded-full bg-slate-200"></div>
                            <div class="w-3 h-3 rounded-full bg-slate-200"></div>
                            <div class="w-3 h-3 rounded-full bg-slate-200"></div>
                        </div>
                        <div class="text-xs font-medium text-slate-400">Pencarian Langsung</div>
                    </div>
                    
                    <div class="space-y-4">
                        <!-- Kotak Pencarian Tiruan -->
                        <div class="h-12 bg-slate-50 rounded-lg border border-slate-200 flex items-center px-4">
                            <svg class="w-5 h-5 text-slate-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <span class="text-slate-400 font-medium">Banyu...</span>
                            <span class="ml-auto w-px h-5 bg-slate-300 animate-pulse"></span>
                        </div>
                        
                        <!-- Hasil Tiruan -->
                        <div class="p-4 bg-white rounded-xl border border-brand-100 shadow-sm relative overflow-hidden group cursor-default">
                            <div class="absolute inset-0 bg-gradient-to-r from-brand-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div class="relative flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-bold text-slate-800">Banyu</h3>
                                    <p class="text-sm text-slate-500 mt-1">Kata Benda (Noun)</p>
                                </div>
                                <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center text-brand-600">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                                </div>
                            </div>
                            <div class="relative mt-3 pt-3 border-t border-slate-100">
                                <p class="text-slate-700">Artinya: <span class="font-semibold">Air</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 mt-auto">
        <div class="max-w-6xl mx-auto px-6 py-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-sm text-slate-500 font-medium">
                &copy; 2026 Kamus Digital Bahasa Cirebon. Media Pembelajaran SMP.
            </p>
            <div class="flex space-x-4 text-sm text-slate-400">
                <span>Versi 1.0 (R&D)</span>
            </div>
        </div>
    </footer>

</body>
</html>