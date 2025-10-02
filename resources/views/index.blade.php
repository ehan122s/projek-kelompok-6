<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota Kelompok 6</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .member-card {
            transition: all 0.3s ease;
        }
        
        .member-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .dark {
            background-color: #0f172a;
            color: #e2e8f0;
        }
        
        .dark .bg-white {
            background-color: #1e293b;
        }
        
        .dark .text-gray-800 {
            color: #e2e8f0;
        }
        
        .dark .text-gray-600 {
            color: #cbd5e1;
        }
        
        .dark .border-gray-200 {
            border-color: #334155;
        }
        
        .dark .bg-gray-50 {
            background-color: #1e293b;
        }
        
        .dark .hover\:bg-gray-100:hover {
            background-color: #334155;
        }
    </style>
</head>
<body class="bg-gray-50 transition-colors duration-300">
    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg">
        <div class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold">Tim Kreatif Indonesia</h1>
                    <p class="text-blue-100 mt-1">Kelompok 5 - Pemrograman Web</p>
                </div>
                <button id="darkModeToggle" class="p-3 rounded-full bg-white/20 hover:bg-white/30 transition-colors">
                    <i class="fas fa-moon text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Daftar Anggota Kelompok</h2>
            <p class="text-gray-600 text-lg">Klik pada nama anggota untuk melihat biodata lengkap</p>
        </div>

        <!-- Members Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Member 1 -->
            <a href="ehan" class="member-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                <div class="relative">
                    <img src="https://i.kym-cdn.com/entries/icons/original/000/031/003/cover3.jpg" alt="Meme Reyhan" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-xl font-bold">Reyhan Abdurrahman</h3>
                        <p class="text-sm opacity-90">Ketua Kelompok</p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-end mb-4">
                        <i class="fas fa-arrow-right text-blue-600"></i>
                    </div>
                    <p class="text-gray-700 mb-4">Siswa yang aktif dalam kegiatan organisasi dan memiliki jiwa kepemimpinan yang baik.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">Kreatif</span>
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">Inovatif</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-medium">Komunikatif</span>
                    </div>
                </div>
            </a>

            <!-- Member 2 -->
            <a href="nizar" class="member-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                <div class="relative">
                    <img src="https://i.kym-cdn.com/entries/icons/original/000/030/329/cover1.jpg" alt="Meme 2" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-xl font-bold">M. Nizar R.R</h3>
                        <p class="text-sm opacity-90">Wakil Ketua</p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-end mb-4">
                        <i class="fas fa-arrow-right text-blue-600"></i>
                    </div>
                    <p class="text-gray-700 mb-4">Memiliki kemampuan analitis yang baik dan dapat bekerja sama dalam tim.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-pink-100 text-pink-700 rounded-full text-xs font-medium">Teliti</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs font-medium">Disiplin</span>
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-medium">Bertanggung Jawab</span>
                    </div>
                </div>
            </a>

            <!-- Member 3 -->
            <a href="aurel" class="member-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                <div class="relative">
                    <img src="url.jpeg" alt="Meme 3" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-xl font-bold">Aurel Mustika</h3>
                        <p class="text-sm opacity-90">Anggota</p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-end mb-4">
                        <i class="fas fa-arrow-right text-blue-600"></i>
                    </div>
                    <p class="text-gray-700 mb-4">Memiliki kemampuan yang baik dalam pemecahan masalah dan logika.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">Analitis</span>
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">Problem Solver</span>
                        <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-medium">Tekun</span>
                    </div>
                </div>
            </a>

            <!-- Member 4 -->
            <a href="tian" class="member-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                <div class="relative">
                    <img src="otoo1.jpg" alt="Meme 4" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-xl font-bold">Tian Agustiani</h3>
                        <p class="text-sm opacity-90">Anggota</p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-end mb-4">
                        <i class="fas fa-arrow-right text-blue-600"></i>
                    </div>
                    <p class="text-gray-700 mb-4">Mobile developer yang fokus pada pengembangan aplikasi cross-platform.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-cyan-100 text-cyan-700 rounded-full text-xs font-medium">Flutter</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">Dart</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-medium">Firebase</span>
                    </div>
                </div>
            </a>

            <!-- Member 5 -->
            <a href="nabila" class="member-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                <div class="relative">
                    <img src="foto.jpg" alt="Meme 5" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-xl font-bold">Nabila Aisya  </h3>
                        <p class="text-sm opacity-90">Anggota</p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-end mb-4">
                        <i class="fas fa-arrow-right text-blue-600"></i>
                    </div>
                    <p class="text-gray-700 mb-4">DevOps Engineer yang berpengalaman dalam otomatisasi dan infrastruktur cloud.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">Docker</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs font-medium">Kubernetes</span>
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-medium">AWS</span>
                    </div>
                </div>
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p class="mb-2">© 2024 Tim Kreatif Indonesia. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="hover:text-blue-400 transition-colors">
                    <i class="fab fa-github text-xl"></i>
                </a>
                <a href="#" class="hover:text-blue-400 transition-colors">
                    <i class="fab fa-linkedin text-xl"></i>
                </a>
                <a href="#" class="hover:text-blue-400 transition-colors">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
            </div>
        </div>
    </footer>

    <script>
        // Dark Mode Toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        const html = document.documentElement;
        const icon = darkModeToggle.querySelector('i');

        // Check for saved dark mode preference
        if (localStorage.getItem('darkMode') === 'true') {
            html.classList.add('dark');
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
        }

        darkModeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            const isDark = html.classList.contains('dark');
            
            if (isDark) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
                localStorage.setItem('darkMode', 'true');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
                localStorage.setItem('darkMode', 'false');
            }
        });

        // Add staggered fade-in animation
        const cards = document.querySelectorAll('.member-card');
        cards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
        });
    </script>
</body>
</html>