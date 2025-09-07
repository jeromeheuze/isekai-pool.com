<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isekai Pool - Yenten Mining Information Hub</title>
    <meta name="description" content="Comprehensive Yenten (YTN) cryptocurrency mining information, guides, and tools. CPU mining made simple with YescryptR16 algorithm.">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <?php include 'includes/ga.php'; ?>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        zen: {
                            50: '#f8faf8',
                            100: '#e8f5e8',
                            200: '#d1e7d1',
                            300: '#a8d3a8',
                            400: '#7bb87b',
                            500: '#4a9d4a',
                            600: '#3a7c3a',
                            700: '#2f5f2f',
                            800: '#284d28',
                            900: '#234023',
                            950: '#0f1f0f'
                        },
                        slate: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                            950: '#020617'
                        }
                    },
                    fontFamily: {
                        'zen': ['Inter', 'system-ui', 'sans-serif'],
                    },
                    animation: {
                        'drift': 'drift 8s ease-in-out infinite',
                        'pulse-soft': 'pulseSoft 3s ease-in-out infinite',
                        'fade-in-slow': 'fadeInSlow 1.2s ease-out',
                        'slide-up-gentle': 'slideUpGentle 0.8s ease-out',
                        'breathe': 'breathe 4s ease-in-out infinite',
                    },
                    keyframes: {
                        drift: {
                            '0%, 100%': { transform: 'translateY(0px) translateX(0px)' },
                            '25%': { transform: 'translateY(-15px) translateX(10px)' },
                            '50%': { transform: 'translateY(-25px) translateX(0px)' },
                            '75%': { transform: 'translateY(-15px) translateX(-10px)' }
                        },
                        pulseSoft: {
                            '0%, 100%': { opacity: '0.4' },
                            '50%': { opacity: '0.8' }
                        },
                        fadeInSlow: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0px)' }
                        },
                        slideUpGentle: {
                            '0%': { transform: 'translateY(40px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        breathe: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.05)' }
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS for zen elements -->
    <style>
        .zen-gradient {
            background: linear-gradient(135deg, #020617 0%, #0f172a 25%, #1e293b 50%, #0f172a 75%, #020617 100%);
        }
        .zen-text-glow {
            text-shadow: 0 0 30px rgba(74, 157, 74, 0.4);
        }
        .zen-border-subtle {
            border: 1px solid rgba(74, 157, 74, 0.1);
            box-shadow: 0 0 20px rgba(74, 157, 74, 0.05);
        }
        .zen-card {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(74, 157, 74, 0.1);
        }
        .zen-glass {
            background: rgba(15, 23, 42, 0.3);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(74, 157, 74, 0.05);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 font-zen min-h-screen overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 zen-glass border-b border-zen-500/10" id="navbar">
        <div class="max-w-6xl mx-auto px-8 flex items-center justify-between h-24">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-gradient-to-br from-zen-500 to-zen-600 rounded-2xl flex items-center justify-center animate-breathe">
                    <span class="text-slate-100 text-2xl font-bold">禅</span>
                </div>
                <span class="text-3xl font-light text-zen-400 zen-text-glow">Isekai Pool</span>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-12">
                <a href="index.php" class="text-zen-400 font-light text-lg relative">
                    Home
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-zen-400"></span>
                </a>
                <a href="about.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg relative group">
                    About
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-zen-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="mining.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg relative group">
                    Mining
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-zen-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="pools.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg relative group">
                    Pools
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-zen-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="calculator.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg relative group">
                    Calculator
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-zen-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="md:hidden p-3 text-slate-300 hover:text-zen-400 transition-colors" id="mobile-menu-btn">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden zen-glass border-b border-zen-500/10" id="mobile-menu">
            <div class="px-8 py-6 space-y-6">
                <a href="index.php" class="block text-zen-400 font-light text-lg">Home</a>
                <a href="about.php" class="block text-slate-300 hover:text-zen-400 transition-colors duration-300 font-light text-lg">About</a>
                <a href="mining.php" class="block text-slate-300 hover:text-zen-400 transition-colors duration-300 font-light text-lg">Mining</a>
                <a href="pools.php" class="block text-slate-300 hover:text-zen-400 transition-colors duration-300 font-light text-lg">Pools</a>
                <a href="calculator.php" class="block text-slate-300 hover:text-zen-400 transition-colors duration-300 font-light text-lg">Calculator</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center zen-gradient overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-32 left-16 w-40 h-40 bg-zen-500/10 rounded-full animate-drift"></div>
            <div class="absolute top-48 right-24 w-32 h-32 bg-zen-400/15 rounded-full animate-drift" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-48 left-24 w-48 h-48 bg-zen-600/8 rounded-full animate-drift" style="animation-delay: 4s;"></div>
            <div class="absolute bottom-32 right-16 w-36 h-36 bg-zen-500/12 rounded-full animate-drift" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-zen-400/5 rounded-full animate-pulse-soft"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center max-w-5xl mx-auto px-8">
            <div class="animate-fade-in-slow">
                <h1 class="text-7xl md:text-9xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Isekai
                    <span class="text-zen-400 block mt-4 font-light">Pool</span>
                </h1>
                <p class="text-2xl md:text-3xl text-slate-300 mb-12 max-w-4xl mx-auto leading-relaxed font-light">
                    Where the art of mining meets the serenity of zen
                </p>
                <div class="flex flex-col sm:flex-row gap-8 justify-center items-center">
                    <a href="mining.php" class="px-12 py-6 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-3xl font-light text-xl transition-all duration-500 transform hover:scale-105 zen-border-subtle">
                        Begin Journey
                    </a>
                    <a href="pools.php" class="px-12 py-6 border-2 border-zen-500/30 text-zen-400 hover:bg-zen-500/10 hover:border-zen-400 rounded-3xl font-light text-xl transition-all duration-500">
                        Explore Pools
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="w-8 h-12 border-2 border-zen-400/50 rounded-full flex justify-center">
                <div class="w-1 h-4 bg-zen-400/70 rounded-full mt-3 animate-pulse-soft"></div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-32 bg-slate-900/30">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    The Way of Mining
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    In the stillness of computation, we find the path to digital enlightenment
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Card 1 -->
                <div class="zen-card rounded-3xl p-12 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-4xl">🧘‍♂️</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Mindful Computing</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light">
                        Each hash calculation becomes a moment of meditation, bringing you closer to the essence of decentralized harmony.
                    </p>
                </div>
                
                <!-- Card 2 -->
                <div class="zen-card rounded-3xl p-12 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-4xl">🌱</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Sustainable Growth</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light">
                        Yenten's YescryptR16 algorithm nurtures both your hardware and the environment with gentle efficiency.
                    </p>
                </div>
                
                <!-- Card 3 -->
                <div class="zen-card rounded-3xl p-12 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-4xl">⚖️</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Perfect Balance</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light">
                        Discover the equilibrium between profitability and peace in the Yenten ecosystem.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mining Section -->
    <section id="mining" class="py-32 bg-slate-950">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    The Art of Mining
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Master the ancient art of CPU mining with modern zen principles
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Content -->
                <div class="space-y-12">
                    <div class="zen-card rounded-3xl p-12">
                        <h3 class="text-4xl font-light text-slate-200 mb-6">🌿 The Path Begins</h3>
                        <p class="text-slate-400 mb-8 leading-relaxed text-lg font-light">
                            Start your mining journey with our gentle guidance. From wallet creation to pool connection, 
                            every step is designed to bring you closer to digital harmony.
                        </p>
                        <a href="mining.php" class="inline-block px-8 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light text-lg transition-all duration-500">
                            Begin Learning →
                        </a>
                    </div>
                    
                    <div class="zen-card rounded-3xl p-12">
                        <h3 class="text-4xl font-light text-slate-200 mb-6">⚡ Harmony Optimization</h3>
                        <p class="text-slate-400 mb-8 leading-relaxed text-lg font-light">
                            Fine-tune your mining setup to achieve perfect balance. Learn the secrets of efficient 
                            CPU mining without disturbing your system's natural rhythm.
                        </p>
                        <a href="calculator.php" class="inline-block px-8 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light text-lg transition-all duration-500">
                            Optimize Now →
                        </a>
                    </div>
                </div>
                
                <!-- Visual -->
                <div class="relative">
                    <div class="zen-card rounded-3xl p-16 text-center">
                        <div class="w-40 h-40 bg-zen-500/10 rounded-3xl flex items-center justify-center mx-auto mb-8 animate-breathe">
                            <span class="text-8xl">💻</span>
                        </div>
                        <h3 class="text-3xl font-light text-slate-200 mb-6">CPU Mining</h3>
                        <p class="text-slate-400 mb-8 text-xl font-light">
                            YescryptR16 Algorithm
                        </p>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-slate-400 text-lg font-light">Efficiency</span>
                                <span class="text-zen-400 font-light text-xl">98%</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-slate-400 text-lg font-light">Energy Usage</span>
                                <span class="text-zen-400 font-light text-xl">Minimal</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-slate-400 text-lg font-light">Difficulty</span>
                                <span class="text-zen-400 font-light text-xl">Balanced</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-32 bg-slate-900/20">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Network Harmony
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Real-time insights into the peaceful operation of the Yenten network
                </p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Stat 1 -->
                <div class="zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">💰</span>
                    </div>
                    <h3 class="text-4xl font-light text-zen-400 mb-3" id="ytn-price">$0.0000</h3>
                    <p class="text-slate-400 text-lg font-light">Yenten Price</p>
                </div>
                
                <!-- Stat 2 -->
                <div class="zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">⚡</span>
                    </div>
                    <h3 class="text-4xl font-light text-zen-400 mb-3" id="network-hashrate">0 MH/s</h3>
                    <p class="text-slate-400 text-lg font-light">Network Hashrate</p>
                </div>
                
                <!-- Stat 3 -->
                <div class="zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">🧱</span>
                    </div>
                    <h3 class="text-4xl font-light text-zen-400 mb-3" id="block-height">0</h3>
                    <p class="text-slate-400 text-lg font-light">Block Height</p>
                </div>
                
                <!-- Stat 4 -->
                <div class="zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">👥</span>
                    </div>
                    <h3 class="text-4xl font-light text-zen-400 mb-3" id="active-miners">0</h3>
                    <p class="text-slate-400 text-lg font-light">Active Miners</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-zen-500/10 py-16">
        <div class="max-w-6xl mx-auto px-8">
            <div class="grid md:grid-cols-4 gap-12">
                <!-- Logo & Description -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-zen-500 to-zen-600 rounded-2xl flex items-center justify-center">
                            <span class="text-slate-100 text-2xl font-bold">禅</span>
                        </div>
                        <span class="text-3xl font-light text-zen-400">Isekai Pool</span>
                    </div>
                    <p class="text-slate-400 mb-8 max-w-lg text-lg font-light leading-relaxed">
                        Your sanctuary for Yenten mining. Discover the zen of decentralized cryptocurrency 
                        and find peace in the art of CPU mining.
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-light text-slate-200 mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="index.php" class="text-slate-400 hover:text-zen-400 transition-colors text-lg font-light">Home</a></li>
                        <li><a href="about.php" class="text-slate-400 hover:text-zen-400 transition-colors text-lg font-light">About</a></li>
                        <li><a href="mining.php" class="text-slate-400 hover:text-zen-400 transition-colors text-lg font-light">Mining</a></li>
                        <li><a href="pools.php" class="text-slate-400 hover:text-zen-400 transition-colors text-lg font-light">Pools</a></li>
                    </ul>
                </div>
                
                <!-- Resources -->
                <div>
                    <h3 class="text-xl font-light text-slate-200 mb-6">Resources</h3>
                    <ul class="space-y-3">
                        <li><a href="calculator.php" class="text-slate-400 hover:text-zen-400 transition-colors text-lg font-light">Calculator</a></li>
                        <li><a href="wallets.php" class="text-slate-400 hover:text-zen-400 transition-colors text-lg font-light">Wallets</a></li>
                        <li><a href="faq.php" class="text-slate-400 hover:text-zen-400 transition-colors text-lg font-light">FAQ</a></li>
                        <li><a href="contact.php" class="text-slate-400 hover:text-zen-400 transition-colors text-lg font-light">Support</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-zen-500/10 mt-12 pt-8 text-center">
                <p class="text-slate-500 text-lg font-light">
                    © 2024 Isekai Pool. Find your zen in the art of mining. 🌿
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                navbar.classList.add('bg-slate-950/90');
            } else {
                navbar.classList.remove('bg-slate-950/90');
            }
        });
        
        // Load network statistics (placeholder)
        function loadNetworkStats() {
            // Simulate loading network data
            setTimeout(() => {
                document.getElementById('ytn-price').textContent = '$0.0012';
                document.getElementById('network-hashrate').textContent = '45.2 MH/s';
                document.getElementById('block-height').textContent = '1,234,567';
                document.getElementById('active-miners').textContent = '1,234';
            }, 1000);
        }
        
        // Initialize
        loadNetworkStats();
    </script>
</body>
</html>