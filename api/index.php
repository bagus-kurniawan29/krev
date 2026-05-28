
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krev | Creative & Tech Agency</title>
    <link rel="shortcut icon" href="/logo1.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: '#A2D514',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        body {
            font-family: 'Plus+Jakarta+Sans', sans-serif;
            background-color: #000000;
        }
        .glow-text {
            text-shadow: 0 0 20px rgba(162, 213, 20, 0.2);
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px); 
        }
    </style>
</head>
<body class="text-white min-h-screen flex flex-col justify-between selection:bg-brand selection:text-white">
    <!-- NavBar -->
    <header class="w-full  mx-auto px-6 py-6 flex justify-between items-center fixed z-50 glass-effect">
        <div class="flex items-center gap-2">
            <img src="/logo.png" alt="Krev Logo" class="h-8 onerror='this.style.display=\"none\"'">
            <span class="text-brand font-extrabold text-2xl tracking-wider">KREV</span>
        </div>
        
<nav class="hidden md:flex gap-8 items-center text-sm font-semibold tracking-wide text-gray-400">
    <a href="#home" class="nav-link text-brand transition-colors duration-300">Home</a>
    <a href="#services" class="nav-link hover:text-white transition-colors duration-300">Services</a>
    <a href="#project" class="nav-link hover:text-white transition-colors duration-300">Project</a>
    <a href="#recent" class="nav-link hover:text-white transition-colors duration-300">Recent Projek</a>
</nav>
        <div class="hidden md:block">
            <a href="#contact" class="border border-brand text-brand hover:bg-brand hover:text-black px-5 py-2 rounded-full text-sm font-bold transition-all duration-300">
                Contact Us
            </a>
        </div>
    </header>

    <!-- Hero -->
    <main id="home" class="w-full max-w-7xl mx-auto px-6 flex-grow flex items-center py-8 md:py-28 relative scroll-mt-24 py-16">
    <div class="absolute bg-brand/20 w-96 h-96 rounded-full blur-[120px] -right-0 -top-12 mix-blend-screen pointer-event-none"></div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center w-full">
            <div class="md:col-span-7 flex flex-col space-y-6 text-left z-10">
                <div class="inline-flex items-center gap-2 bg-neutral-900 border border-neutral-800 px-4 py-1.5 rounded-full w-fit">
                    <span class="flex h-2 w-2 rounded-full bg-brand animate-pulse"></span>
                    <span class="text-xs font-medium tracking-wider text-gray-300 uppercase">Creative & Code Agency</span>
                </div>
                
                <h1 class="text-brand text-6xl md:text-8xl font-extrabold tracking-tight leading-none glow-text">
                    KREV
                </h1>
                <h3 class="text-2xl text-white font-mono">
                    What we build next?
                </h3>
                <p class="text-gray-400 text-lg md:text-xl max-w-xl font-light leading-relaxed">
                    Krev membantu bisnis Anda berkembang melalui kombinasi <span class="text-white font-medium">high-end video editing</span>, strategi <span class="text-white font-medium">periklanan digital</span>, dan sistem <span class="text-white font-medium">koding website</span> yang solid.
                </p>
                
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#services" class="bg-brand text-black hover:bg-white px-8 py-4 rounded-xl font-bold tracking-wide shadow-lg shadow-brand/10 transition-all duration-300 transform hover:-translate-y-1">
                        Our Services
                    </a>
                    <a href="#portfolio" class="bg-neutral-900 hover:bg-neutral-800 border border-neutral-800 px-8 py-4 rounded-xl font-bold tracking-wide transition-all duration-300">
                        View project
                    </a>
                </div>
            </div>

            <div class="md:col-span-5 relative flex justify-center items-center">
                <div class="absolute w-72 h-7z2 bg-brand/10 rounded-full blur-[100px] -z-10"></div>
                
                <div class="w-full max-w-sm bg-neutral-950 border border-neutral-900 p-6 rounded-2xl space-y-4 shadow-2xl relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand/5 rounded-full blur-2xl transition-all group-hover:bg-brand/10"></div>
                    
                    <div class="flex justify-between items-center border-b border-neutral-900 pb-3">
                        <span class="text-xs text-neutral-500 font-mono">// SERVICES_LIST</span>
                        <span class="text-brand text-xs font-mono">● LIVE</span>
                    </div>
                    <ul class="space-y-3 font-mono text-sm text-neutral-400">
                        <li class="flex items-center gap-3 hover:text-white transition-colors cursor-default">
                            <span class="text-brand">01.</span> High-End Video Editing
                        </li>
                        <li class="flex items-center gap-3 hover:text-white transition-colors cursor-default">
                            <span class="text-brand">02.</span> Digital Advertising & Promo
                        </li>
                        <li class="flex items-center gap-3 hover:text-white transition-colors cursor-default">
                            <span class="text-brand">03.</span> Premium Web Development
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <div class="md:flex justify-between bg-[#090909] grid grid-cols-2 gap-4 md:p-12 p-8 mx-auto rounded-lg md:gap-12 w-full max-w-7xl">

        <div class="flex-flex-col justify-center md:border-r border-[#1e1e1e] px-12 text-center">
        <h1 class="text-brand text-6xl font-bold">150+</h1>
        <p class="font-mono">Project Completed</p>
        </div>

        <div class="flex-flex-col justify-center md:border-r border-[#1e1e1e] px-12 text-center">
        <h1 class="text-brand text-6xl font-bold">12M+</h1>
        <p class="font-mono">Ad Reach / Views</p>
        </div>

        <div class="flex-flex-col justify-center md:border-r border-[#1e1e1e] px-12 text-center">
        <h1 class="text-brand text-6xl font-bold">99%</h1>
        <p class="font-mono">Client Satifaction</p>
        </div>

        <div class="flex-flex-col justify-center px-12 text-center">
        <h1 class="text-brand text-6xl font-bold">3+</h1>
        <p class="font-mono">Years Experience</p>
        </div>
    </div>
    <!-- Service -->
    <div id="services" class="w-full max-w-7xl mx-auto px-6 flex-grow flex-col flex items-start py-8 md:py-28 relative scroll-mt-24 py-16">
    <div class="absolute bg-brand/20 w-96 h-96 rounded-full blur-[120px] -left-0 -bottom-12 mix-blend-screen pointer-event-none"></div>
    <p class="text-brand font-mono text-xl mb-2">// WHAT WE DO?</p>
    <div class="md:flex-row flex flex-col">
    <h1 class="text-6xl font-bold w-full max-w-8xl">Layanan Unggulan Kami</h1>
    <p class="text-[#9CA3AF] max-w-7xl w-full">Kami memadukan kreativitas visual tingkat tinggi dengan kode pemrograman modern yang menghasilkan performa bisnis yang eksponensial.</p>    
    </div>
<div class="grid grid-cols-1 md:grid-cols-3 mt-8 gap-8 w-full max-w-7xl mx-auto">
    <div class="bg-[#090909] w-full p-8 rounded-lg flex flex-col border border-zinc-900">
        <i class="fa-solid fa-video text-brand bg-brand/10 p-6 rounded-lg inline-flex items-center justify-center w-14 h-14 text-xl"></i>
        <h1 class="text-2xl font-bold mt-6">Cinematic Video Editing</h1>
        <p class="py-6 text-[#9CA3AF] border-b border-[#1e1e1e] flex-grow">
            Pengeditan video berkelas tinggi untuk iklan digital, profil perusahaan, video musik, hingga video pendek media sosial yang langsung menarik audiens.
        </p>
            <div class="flex mt-8 justify-between items-center">
            <p class="text-[#9CA3AF] font-mono">Video & Sound</p>
            <i class="fa-solid fa-arrow-right text-brand text-xl"></i>
        </div>
    </div> <div class="bg-[#090909] w-full p-8 rounded-lg flex flex-col border border-zinc-900">
        <i class="fa-solid fa-bullhorn text-brand bg-brand/10 p-6 rounded-lg inline-flex items-center justify-center w-14 h-14 text-xl"></i>
        <h1 class="text-2xl font-bold mt-6">Digital Advertising & Promo</h1>
        <p class="py-6 text-[#9CA3AF] border-b border-[#1e1e1e] flex-grow">
            Strategi perklanan digital yang tertarget untuk meningkatkan konversi penjualan, visibilitas brand, serta jangkauan pasar bisnis Anda secara maksimal.
        </p>
        <div class="flex mt-8 justify-between items-center">
            <p class="text-[#9CA3AF] font-mono">Strategy & Growth</p>
            <i class="fa-solid fa-arrow-right text-brand text-xl"></i>
        </div>
    </div> 
    <div class="bg-[#090909] w-full p-8 rounded-lg flex flex-col border border-zinc-900">
        <i class="fa-solid fa-code text-brand bg-brand/10 p-6 rounded-lg inline-flex items-center justify-center w-14 h-14 text-xl"></i> 
        <h1 class="text-2xl font-bold mt-6">Premium Web Development</h1>
        <p class="py-6 text-[#9CA3AF] border-b border-[#1e1e1e] flex-grow">
            Pembuatan website modern yang cepat, responsif, aman, dan dioptimasi dengan UI/UX eksklusif untuk memperkuat kredibilitas agensi maupun bisnis Anda.
        </p>
        <div class="flex mt-8 justify-between items-center">
            <p class="text-[#9CA3AF] font-mono">Code & System</p>
            <i class="fa-solid fa-arrow-right text-brand text-xl"></i>
        </div>
    </div>
</div>
</div>
<!-- project -->
<div id="project" class="w-full max-w-7xl mx-auto px-6 flex-grow flex flex-col items-start py-8 md:py-8 relative scroll-mt-24 py-16">
    <div class="flex flex-col bg-[#090909] max-w-7xl w-full mt-8 rounded-xl p-8 border border-zinc-900">
        <p class="text-brand font-mono">// DYNAMIC ESTIMATION</p>
        
        <div class="flex md:flex-row gap-8 flex-col mt-4">
            <div class="flex flex-col max-w-2xl w-full">
                <h1 class="font-bold text-5xl md:text-6xl mt-4 leading-tight">Berapa perkiraan waktu pengerjaan proyek Anda?</h1>
                <p class="text-[#9CA3AF] mt-6 text-lg">Pilih tipe layanan dan kapasitas pengerjaan di samping untuk melihat perkiraan estimasi pengerjaan dari tim profesional kami.</p>
                
                <p class="mt-6 font-mono text-[#9CA3AF] text-sm tracking-wider">PILIH LAYANAN</p>
                <div class="flex flex-wrap gap-3 mt-2">
                    <button class="btn-layanan border-brand text-brand bg-brand/10 rounded-lg p-4 font-semibold transition" data-layanan="Video Editing">Video Editing</button>
                    <button class="btn-layanan border-zinc-800 text-[#9CA3AF] border rounded-lg p-4 transition" data-layanan="Digital Ads">Digital Ads</button>
                    <button class="btn-layanan border-zinc-800 text-[#9CA3AF] border rounded-lg p-4 transition" data-layanan="Coding">Coding Web</button>
                </div>
                
                <p class="mt-6 font-mono text-[#9CA3AF] text-sm tracking-wider">SKALA PROJECT</p>
                <div class="flex flex-wrap gap-3 mt-2">
                    <button class="btn-skala border-brand text-brand bg-brand/10 rounded-lg p-4 font-semibold transition" data-skala="Standar">Standar</button>
                    <button class="btn-skala border-zinc-800 text-[#9CA3AF] border rounded-lg p-4 transition" data-skala="Menengah">Menengah</button>
                    <button class="btn-skala border-zinc-800 text-[#9CA3AF] border rounded-lg p-4 transition" data-skala="Besar">Besar</button>
                </div>
            </div>
            
            <div class="bg-[#0F0F0F] flex flex-col p-8 rounded-xl w-full md:max-w-md border border-zinc-900 justify-between">
                <div>
                    <p class="font-mono text-[#9CA3AF] text-sm">// RINGKASAN ESTIMASI</p>
                    <p class="mt-6 text-[#9CA3AF] text-sm">Total Perkiraan Waktu</p>
                    <h1 id="hari_kerja" class="font-mono text-brand text-5xl font-bold mt-1">3 - 5 Hari kerja</h1>
                    
                    <div class="bg-[#0B0B0B] rounded-xl flex flex-col p-6 gap-4 mt-6 border border-zinc-900/50">
                        <div class="flex justify-between text-sm">
                            <p class="text-[#9CA3AF]">Cakupan Layanan:</p>
                            <p id="output_layanan" class="font-medium text-white">Video Editing (Standar)</p>
                        </div>
                        <div class="flex justify-between text-sm">
                            <p class="text-[#9CA3AF]">Rekomendasi Tim:</p>
                            <p id="output_tim" class="font-medium text-white text-right max-w-[200px]">1 Editor & 1 Creative Director</p>
                        </div>
                        <div class="flex justify-between text-sm">
                            <p class="text-[#9CA3AF]">Prioritas Antrean:</p>
                            <p id="output_prioritas" class="font-mono text-brand font-bold">TINGGI</p>
                        </div>
                    </div>
                </div>
                <button class="bg-white text-black p-4 text-base rounded-xl font-bold hover:bg-zinc-200 transition w-full">
                    Ajukan projek ini sekarang
                </button>
            </div>
        </div>
    </div>
</div>

<div id="project" class="flex flex-col w-full max-w-7xl p-6 md:p-8 mx-auto scroll-mt-24">
    <p class="font-mono text-brand text-xl">// RECENT WORK</p>
    <div class="flex flex-col lg:flex-row gap-6 justify-between items-start lg:items-center mt-2 mb-8">
        <h1 class="font-bold text-4xl md:text-6xl tracking-tight">Karya Kreatif Terbaru kami</h1>
        <div class="flex flex-wrap gap-3 w-full lg:w-auto">
            <button class="btn-filter bg-brand text-black font-semibold py-2.5 px-5 rounded-xl transition" data-filter="all">Semua</button>
            <button class="btn-filter bg-[#0F0F0F] text-zinc-400 hover:text-white py-2.5 px-5 rounded-xl transition" data-filter="Video">Video</button>
            <button class="btn-filter bg-[#0F0F0F] text-zinc-400 hover:text-white py-2.5 px-5 rounded-xl transition" data-filter="Iklan">Iklan</button>
            <button class="btn-filter bg-[#0F0F0F] text-zinc-400 hover:text-white py-2.5 px-5 rounded-xl transition" data-filter="Coding">Coding</button>
        </div>
    </div>
    <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
        
        <div class="card-item group w-full bg-[#0d0d0d] rounded-2xl overflow-hidden border border-zinc-900 shadow-xl transition-all duration-500" data-kategori="Video">
            <div class="relative aspect-[4/3] bg-gradient-to-b from-zinc-900/50 to-zinc-950 flex flex-col items-center justify-center p-6 overflow-hidden">
                <button class="w-16 h-16 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center text-brand transition-all duration-300 group-hover:scale-110 group-hover:bg-brand group-hover:text-black">
                    <i class="fa-solid fa-play text-xl ml-1"></i>
                </button>
                <span class="absolute bottom-6 px-4 py-1.5 rounded-full bg-black/60 border border-zinc-800/50 text-[11px] font-mono tracking-wider text-zinc-400 backdrop-blur-sm">// PREVIEW_VIDEO</span>
            </div>
            <div class="p-6 md:p-8 flex flex-col gap-3">
                <p class="text-xs font-medium tracking-wide text-brand/90 font-mono">Video Editing <span class="text-zinc-600 mx-1">/</span> Commercial</p>
                <h3 class="text-xl font-bold text-white tracking-tight group-hover:text-brand transition-colors duration-300">Commercial Video Ad – Fintech Corp</h3>
                <p class="text-sm text-zinc-400 leading-relaxed font-normal">Produksi video promosi berdurasi 30 detik untuk kampanye brand global digital banking dengan efek visual sinematik.</p>
            </div>
        </div>

        <div class="card-item group w-full bg-[#0d0d0d] rounded-2xl overflow-hidden border border-zinc-900 shadow-xl transition-all duration-500" data-kategori="Iklan">
            <div class="relative aspect-[4/3] bg-zinc-900/30 flex flex-col items-center justify-center p-6 overflow-hidden">
                <i class="fa-solid fa-bullhorn text-4xl text-zinc-700 group-hover:text-brand transition-colors duration-300"></i>
                <span class="absolute bottom-6 px-4 py-1.5 rounded-full bg-black/60 border border-zinc-800/50 text-[11px] font-mono tracking-wider text-zinc-400 backdrop-blur-sm">// CAMPAIGN_METRICS</span>
            </div>
            <div class="p-6 md:p-8 flex flex-col gap-3">
                <p class="text-xs font-medium tracking-wide text-brand/90 font-mono">Digital Ads <span class="text-zinc-600 mx-1">/</span> Meta Marketing</p>
                <h3 class="text-xl font-bold text-white tracking-tight group-hover:text-brand transition-colors duration-300">E-Commerce Scaling – Fashion Brand</h3>
                <p class="text-sm text-zinc-400 leading-relaxed font-normal">Mengelola kampanye iklan digital berkinerja tinggi yang mendongkrak penjualan produk fashion lokal hingga 300%.</p>
            </div>
        </div>

        <div class="card-item group w-full bg-[#0d0d0d] rounded-2xl overflow-hidden border border-zinc-900 shadow-xl transition-all duration-500" data-kategori="Coding">
            <div class="relative aspect-[4/3] bg-zinc-900/30 flex flex-col items-center justify-center p-6 overflow-hidden">
                <i class="fa-solid fa-code text-4xl text-zinc-700 group-hover:text-brand transition-colors duration-300"></i>
                <span class="absolute bottom-6 px-4 py-1.5 rounded-full bg-black/60 border border-zinc-800/50 text-[11px] font-mono tracking-wider text-zinc-400 backdrop-blur-sm">// LIVE_PLATFORM</span>
            </div>
            <div class="p-6 md:p-8 flex flex-col gap-3">
                <p class="text-xs font-medium tracking-wide text-brand/90 font-mono">Web Dev <span class="text-zinc-600 mx-1">/</span> Fullstack</p>
                <h3 class="text-xl font-bold text-white tracking-tight group-hover:text-brand transition-colors duration-300">Company Profile – Logistics Agency</h3>
                <p class="text-sm text-zinc-400 leading-relaxed font-normal">Arsitektur web profil perusahaan modern yang super cepat dengan sistem pelacakan logistik interaktif waktu-nyata.</p>
            </div>
        </div>

        <div class="card-item group w-full bg-[#0d0d0d] rounded-2xl overflow-hidden border border-zinc-900 shadow-xl transition-all duration-500" data-kategori="Video">
            <div class="relative aspect-[4/3] bg-gradient-to-b from-zinc-900/50 to-zinc-950 flex flex-col items-center justify-center p-6 overflow-hidden">
                <button class="w-16 h-16 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center text-brand transition-all duration-300 group-hover:scale-110 group-hover:bg-brand group-hover:text-black">
                    <i class="fa-solid fa-play text-xl ml-1"></i>
                </button>
                <span class="absolute bottom-6 px-4 py-1.5 rounded-full bg-black/60 border border-zinc-800/50 text-[11px] font-mono tracking-wider text-zinc-400 backdrop-blur-sm">// GRAPHIC_MOTION</span>
            </div>
            <div class="p-6 md:p-8 flex flex-col gap-3">
                <p class="text-xs font-medium tracking-wide text-brand/90 font-mono">Video Editing <span class="text-zinc-600 mx-1">/</span> Motion Graphics</p>
                <h3 class="text-xl font-bold text-white tracking-tight group-hover:text-brand transition-colors duration-300">3D Product Animation – Tech Gadget</h3>
                <p class="text-sm text-zinc-400 leading-relaxed font-normal">Visualisasi produk futuristik menggunakan animasi 3D premium untuk menonjolkan fitur utama perangkat keras pintar.</p>
            </div>
        </div>

        <div class="card-item group w-full bg-[#0d0d0d] rounded-2xl overflow-hidden border border-zinc-900 shadow-xl transition-all duration-500" data-kategori="Iklan">
            <div class="relative aspect-[4/3] bg-zinc-900/30 flex flex-col items-center justify-center p-6 overflow-hidden">
                <i class="fa-solid fa-chart-line text-4xl text-zinc-700 group-hover:text-brand transition-colors duration-300"></i>
                <span class="absolute bottom-6 px-4 py-1.5 rounded-full bg-black/60 border border-zinc-800/50 text-[11px] font-mono tracking-wider text-zinc-400 backdrop-blur-sm">// GOOGLE_ADS</span>
            </div>
            <div class="p-6 md:p-8 flex flex-col gap-3">
                <p class="text-xs font-medium tracking-wide text-brand/90 font-mono">Digital Ads <span class="text-zinc-600 mx-1">/</span> SEM Campaign</p>
                <h3 class="text-xl font-bold text-white tracking-tight group-hover:text-brand transition-colors duration-300">Google Search Ads – Real Estate</h3>
                <p class="text-sm text-zinc-400 leading-relaxed font-normal">Kampanye perklanan mesin pencari yang dioptimasi ketat untuk menjaring prospek (leads) berkualitas tinggi industri properti.</p>
            </div>
        </div>

        <div class="card-item group w-full bg-[#0d0d0d] rounded-2xl overflow-hidden border border-zinc-900 shadow-xl transition-all duration-500" data-kategori="Coding">
            <div class="relative aspect-[4/3] bg-zinc-900/30 flex flex-col items-center justify-center p-6 overflow-hidden">
                <i class="fa-solid fa-layer-group text-4xl text-zinc-700 group-hover:text-brand transition-colors duration-300"></i>
                <span class="absolute bottom-6 px-4 py-1.5 rounded-full bg-black/60 border border-zinc-800/50 text-[11px] font-mono tracking-wider text-zinc-400 backdrop-blur-sm">// WEB_APPLICATION</span>
            </div>
            <div class="p-6 md:p-8 flex flex-col gap-3">
                <p class="text-xs font-medium tracking-wide text-brand/90 font-mono">Web Dev <span class="text-zinc-600 mx-1">/</span> SaaS Platform</p>
                <h3 class="text-xl font-bold text-white tracking-tight group-hover:text-brand transition-colors duration-300">SaaS Dashboard – HR Management</h3>
                <p class="text-sm text-zinc-400 leading-relaxed font-normal">Sistem aplikasi berbasis web interaktif untuk mempermudah manajemen kinerja dan absensi karyawan perusahaan raksasa.</p>
            </div>
        </div>
    </div>
</div>

<div class="w-full max-w-7xl mx-auto px-6 flex-grow flex flex-col items-start py-8 md:py-8 relative scroll-mt-24 py-16 mb-36">
    <div class="flex flex-col bg-[#090909] max-w-7xl w-full mt-8 rounded-xl p-8 border border-zinc-900 relative">
        <div class="absolute bg-brand/20 w-96 h-96 rounded-full blur-[120px] -right-0 -top-12 mix-blend-screen pointer-event-none"></div>
        <p class="font-mono text-brand text-xl">// WHAT WE BUILD NEXT?</p>
        <div class="flex gap-8 md:flex-row flex-col">
        <div class="flex flex-col">
        <h1 class="text-6xl font-bold">Mulai Proyek Hebat anda</h1>
        <p class="text-[#9CA3AF] mt-2 text-lg">Hubungi tim KREV untuk merealisasikan visi digital Anda. Kami siap merespons kurang dari 24 jam kerja.</p>
        <div class="flex gap-5 mt-12">
            <i class="fa-solid fa-envelope text-brand p-3 bg-[#1a1a1a] rounded-lg my-auto"></i>
            <div class="flex flex-col">
                <p class="text-[#6B7280]">Hubungi Kami</p>
                <p class="text-lg font-semibold">Krev@gmail.com</p>
            </div>
         </div>
            <div class="flex gap-5 mt-12">
            <i class="fa-solid fa-location-dot text-brand p-3 bg-[#1a1a1a] rounded-lg my-auto"></i>
            <div class="flex flex-col">
                <p class="text-[#6B7280]">Alamat Kami</p>
                <p class="text-lg font-semibold">Rumbuk,Lombok Timur, Nusa Tenggara Barat, Indonesia</p>
            </div>
         </div>
        </div>
        <form action="" method="POST" class="w-full max-w-3xl flex flex-col gap-6">
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
        <div class="flex flex-col gap-2">
            <label for="nama_lengkap" class="font-mono text-xs tracking-widest text-zinc-500 uppercase">
                Nama Lengkap
            </label>
            <input 
                type="text" 
                id="nama_lengkap" 
                name="nama_lengkap" 
                placeholder="John Doe" 
                class="w-full bg-[#121212]/40 border border-zinc-800/80 rounded-xl p-4 text-white placeholder-zinc-700 text-base focus:outline-none focus:border-brand/50 focus:ring-1 focus:ring-brand/30 transition-all duration-300"
                required
            >
        </div>

        <div class="flex flex-col gap-2">
            <label for="email" class="font-mono text-xs tracking-widest text-zinc-500 uppercase">
                Alamat Email
            </label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="john@example.com" 
                class="w-full bg-[#121212]/40 border border-zinc-800/80 rounded-xl p-4 text-white placeholder-zinc-700 text-base focus:outline-none focus:border-brand/50 focus:ring-1 focus:ring-brand/30 transition-all duration-300"
                required
            >
        </div>
    </div>

<div class="flex flex-col gap-2 w-full relative">
    <label for="layanan" class="font-mono text-xs tracking-widest text-zinc-500 uppercase relative z-10">
        Layanan Yang Diminati
    </label>
    
    <div class="relative w-full z-10">
        <select 
            id="layanan" 
            name="layanan" 
            class="w-full bg-[#121212]/60 border border-zinc-800/80 rounded-xl p-4 text-white text-base focus:outline-none focus:border-brand/50 focus:ring-1 focus:ring-brand/30 transition-all duration-300 appearance-none cursor-pointer backdrop-blur-sm"
            required>
            <option value="" disabled selected class="text-zinc-700">Pilih jenis layanan proyek Anda...</option>
            
            <optgroup label="Video Editing" class="bg-[#0d0d0d] text-zinc-500 font-sans">
                <option value="Video Editing - Standar" class="text-white bg-[#121212] py-2">Video Editing (Standar Level)</option>
                <option value="Video Editing - Mid" class="text-white bg-[#121212] py-2">Video Editing (Mid Level)</option>
                <option value="Video Editing - High" class="text-white bg-[#121212] py-2">Video Editing (High Level)</option>
            </optgroup>

            <optgroup label="Digital Advertising" class="bg-[#0d0d0d] text-zinc-500 font-sans">
                <option value="Digital Ads - Standar" class="text-white bg-[#121212] py-2">Digital Ads (Standar Level)</option>
                <option value="Digital Ads - Mid" class="text-white bg-[#121212] py-2">Digital Ads (Mid Level)</option>
                <option value="Digital Ads - High" class="text-white bg-[#121212] py-2">Digital Ads (High Level)</option>
            </optgroup>

            <optgroup label="Web & Mobile Coding" class="bg-[#0d0d0d] text-zinc-500 font-sans">
                <option value="Coding - Standar" class="text-white bg-[#121212] py-2">Coding (Standar Level)</option>
                <option value="Coding - Mid" class="text-white bg-[#121212] py-2">Coding (Mid Level)</option>
                <option value="Coding - High" class="text-white bg-[#121212] py-2">Coding (High Level)</option>
            </optgroup>
        </select>

        <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-zinc-500">
            <i class="fa-solid fa-chevron-down text-sm"></i>
        </div>
    </div>
</div>

    <div class="flex flex-col gap-2 w-full">
        <label for="detail_proyek" class="font-mono text-xs tracking-widest text-zinc-500 uppercase">
            Detail Proyek
        </label>
        <textarea 
            id="detail_proyek" 
            name="detail_proyek" 
            rows="5" 
            placeholder="Ceritakan konsep atau gol proyek yang ingin Anda capai..." 
            class="w-full bg-[#121212]/40 border border-zinc-800/80 rounded-xl p-4 text-white placeholder-zinc-700 text-base resize-none focus:outline-none focus:border-brand/50 focus:ring-1 focus:ring-brand/30 transition-all duration-300"
            required
        ></textarea>
    </div>

    <button 
        type="submit" 
        class="w-full bg-brand text-black font-bold text-base py-4 rounded-xl flex items-center justify-center gap-2 hover:bg-brand/90 active:scale-[0.99] transition-all duration-300 shadow-[0_4px_20px_rgba(163,230,53,0.15)]">
        Kirim Pesan Ke KREV 
        <i class="fa-solid fa-paper-plane text-sm"></i>
    </button>
</form>
        </div>
    </div>
</div>
    <!-- Footer -->
    <footer class="w-full max-w-7xl mx-auto px-6 py-6 border-t border-neutral-950 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-neutral-600 font-mono">
        <p>© 2026 KREV Studio. All rights reserved.</p>
        <div class="flex gap-6">
            <a href="#" class="hover:text-neutral-400">Instagram</a>
            <a href="#" class="hover:text-neutral-400">GitHub</a>
            <a href="#" class="hover:text-neutral-400">LinkedIn</a>
        </div>
    </footer>

</body>
</html>

<script>
const estimasiData = {
    "Video Editing": {
        "Standar":  { waktu: "3 - 5 Hari kerja",  tim: "1 Editor & 1 Creative Director", prioritas: "TINGGI" },
        "Menengah": { waktu: "5 - 7 Hari kerja",  tim: "2 Editor & 1 Motion Designer", prioritas: "NORMAL" },
        "Besar":    { waktu: "10 - 14 Hari kerja", tim: "3 Editor, 1 Director, 1 Audio Eng.", prioritas: "VVIP" }
    },
    "Digital Ads": {
        "Standar":  { waktu: "2 - 3 Hari kerja",  tim: "1 Media Buyer", prioritas: "NORMAL" },
        "Menengah": { waktu: "4 - 6 Hari kerja",  tim: "1 Copywriter & 1 Media Buyer", prioritas: "TINGGI" },
        "Besar":    { waktu: "7 - 10 Hari kerja", tim: "1 Strategist, 1 Copywriter, 1 Buyer", prioritas: "VVIP" }
    },
    "Coding": {
        "Standar":  { waktu: "5 - 7 Hari kerja",  tim: "1 UI/UX & 1 Frontend Developer", prioritas: "NORMAL" },
        "Menengah": { waktu: "14 - 21 Hari kerja", tim: "1 Designer, 1 Fullstack, 1 QA Tester", prioritas: "TINGGI" },
        "Besar":    { waktu: "30 - 45 Hari kerja", tim: "1 PM, 2 Developer, 1 UI/UX, 1 QA", prioritas: "VVIP" }
    }
};
document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll(".nav-link");
    const sections = document.querySelectorAll("section[id], div[id]");
    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 0.4 
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const idAktif = entry.target.getAttribute("id");
                navLinks.forEach((link) => {
                    const href = link.getAttribute("href").substring(1);
                    
                    if (href === idAktif) {
                        link.classList.add("text-brand");
                        link.classList.remove("text-gray-400", "hover:text-white");
                    } else {
                        link.classList.remove("text-brand");
                        link.classList.add("text-gray-400", "hover:text-white");
                    }
                });
            }
        });
    }, options);
    sections.forEach((section) => observer.observe(section));
});

let layananTerpilih = "Video Editing";
let skalaTerpilih = "Standar";
const btnLayanan = document.querySelectorAll('.btn-layanan');
const btnSkala = document.querySelectorAll('.btn-skala');
const elWaktu = document.getElementById('hari_kerja');
const elLayanan = document.getElementById('output_layanan');
const elTim = document.getElementById('output_tim');
const elPrioritas = document.getElementById('output_prioritas');

function updateEstimasiUI() {
    const data = estimasiData[layananTerpilih][skalaTerpilih];
    
    elWaktu.innerText = data.waktu;
    elLayanan.innerText = `${layananTerpilih} (${skalaTerpilih})`;
    elTim.innerText = data.tim;
    elPrioritas.innerText = data.prioritas;
}

btnLayanan.forEach(button => {
    button.addEventListener('click', () => {
        btnLayanan.forEach(btn => btn.className = "btn-layanan border-zinc-800 text-[#9CA3AF] border rounded-lg p-4 transition");
        button.className = "btn-layanan border-brand text-brand bg-brand/10 rounded-lg p-4 font-semibold transition";
        
        layananTerpilih = button.getAttribute('data-layanan');
        updateEstimasiUI();
    });
});

btnSkala.forEach(button => {
    button.addEventListener('click', () => {
        btnSkala.forEach(btn => btn.className = "btn-skala border-zinc-800 text-[#9CA3AF] border rounded-lg p-4 transition");
        button.className = "btn-skala border-brand text-brand bg-brand/10 rounded-lg p-4 font-semibold transition";
        skalaTerpilih = button.getAttribute('data-skala');
        updateEstimasiUI();
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const filterButtons = document.querySelectorAll(".btn-filter");
    const cardItems = document.querySelectorAll(".card-item");
    filterButtons.forEach(button => {
        button.addEventListener("click", () => {
            const targetKategori = button.getAttribute("data-filter");
            filterButtons.forEach(btn => {
                btn.className = "btn-filter bg-[#0F0F0F] text-zinc-400 hover:text-white py-2.5 px-5 rounded-xl transition";
            });
            if (targetKategori === "all") {
                button.className = "btn-filter bg-brand text-black font-semibold py-2.5 px-5 rounded-xl transition";
            } else {
                button.className = "btn-filter bg-brand text-black font-semibold py-2.5 px-5 rounded-xl transition";
            }
            cardItems.forEach(card => {
                const kategoriCard = card.getAttribute("data-kategori");
                card.style.opacity = "0";
                card.style.transform = "scale(0.95)";

                setTimeout(() => {
                    if (targetKategori === "all" || targetKategori === kategoriCard) {
                        card.style.display = "block";
                        setTimeout(() => {
                            card.style.opacity = "1";
                            card.style.transform = "scale(1)";
                        }, 50);
                    } else {
                        card.style.display = "none";
                    }
                }, 300);
            });
        });
    });
});
</script>