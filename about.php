<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Isekai Pool | Yenten Mining Information Hub</title>
    <meta name="description" content="Learn about Isekai Pool's mission to bring zen principles to Yenten cryptocurrency mining. Discover our journey and philosophy.">
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
                <a href="index.php" class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-zen-500 to-zen-600 rounded-2xl flex items-center justify-center animate-breathe">
                        <span class="text-slate-100 text-2xl font-bold">禅</span>
                    </div>
                    <span class="text-3xl font-light text-zen-400 zen-text-glow">Isekai Pool</span>
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-12">
                <a href="index.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg relative group">
                    Home
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-zen-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="about.php" class="text-zen-400 font-light text-lg relative">
                    About
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-zen-400"></span>
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
                <a href="index.php" class="block text-slate-300 hover:text-zen-400 transition-colors duration-300 font-light text-lg">Home</a>
                <a href="about.php" class="block text-zen-400 font-light text-lg">About</a>
                <a href="mining.php" class="block text-slate-300 hover:text-zen-400 transition-colors duration-300 font-light text-lg">Mining</a>
                <a href="pools.php" class="block text-slate-300 hover:text-zen-400 transition-colors duration-300 font-light text-lg">Pools</a>
                <a href="calculator.php" class="block text-slate-300 hover:text-zen-400 transition-colors duration-300 font-light text-lg">Calculator</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center zen-gradient overflow-hidden pt-24">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-32 left-16 w-40 h-40 bg-zen-500/10 rounded-full animate-drift"></div>
            <div class="absolute top-48 right-24 w-32 h-32 bg-zen-400/15 rounded-full animate-drift" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-48 left-24 w-48 h-48 bg-zen-600/8 rounded-full animate-drift" style="animation-delay: 4s;"></div>
            <div class="absolute bottom-32 right-16 w-36 h-36 bg-zen-500/12 rounded-full animate-drift" style="animation-delay: 1s;"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 text-center max-w-5xl mx-auto px-8">
            <div class="animate-fade-in-slow">
                <h1 class="text-6xl md:text-8xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Our Story
                </h1>
                <p class="text-2xl md:text-3xl text-slate-300 mb-12 max-w-4xl mx-auto leading-relaxed font-light">
                    Where technology meets tranquility in the art of mining
                </p>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-32 bg-slate-900/30">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Our Mission
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    To bring peace and mindfulness to the world of cryptocurrency mining
                </p>
            </div>
            
            <div class="zen-card rounded-3xl p-16 max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <div class="w-24 h-24 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <span class="text-5xl">🌿</span>
                    </div>
                    <h3 class="text-4xl font-light text-slate-200 mb-8">The Zen of Mining</h3>
                </div>
                
                <div class="space-y-8 text-lg text-slate-300 font-light leading-relaxed">
                    <p>
                        In a world where cryptocurrency mining is often associated with chaos, competition, and environmental concerns, 
                        Isekai Pool emerged as a sanctuary of tranquility. We believe that mining should be a mindful practice, 
                        not a frantic race.
                    </p>
                    
                    <p>
                        Our journey began with a simple observation: Yenten's YescryptR16 algorithm offers something unique in the 
                        crypto space - the ability to mine efficiently with standard CPU hardware while maintaining a gentle 
                        environmental footprint.
                    </p>
                    
                    <p>
                        We saw an opportunity to create something different. Not just another mining pool, but a community 
                        dedicated to the art of mindful mining. A place where beginners can learn without intimidation, 
                        where experienced miners can find optimization without stress, and where everyone can discover 
                        the zen in decentralized technology.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-32 bg-slate-950">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Our Values
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    The principles that guide our journey
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Value 1 -->
                <div class="zen-card rounded-3xl p-12 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-4xl">🧘‍♂️</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Mindfulness</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light">
                        Every decision we make is guided by conscious awareness. We believe in thoughtful, 
                        deliberate actions that benefit both our community and the environment.
                    </p>
                </div>
                
                <!-- Value 2 -->
                <div class="zen-card rounded-3xl p-12 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-4xl">🤝</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Community</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light">
                        We foster a supportive environment where knowledge is shared freely, 
                        questions are welcomed, and everyone can grow together in their mining journey.
                    </p>
                </div>
                
                <!-- Value 3 -->
                <div class="zen-card rounded-3xl p-12 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-4xl">🌱</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Sustainability</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light">
                        We champion energy-efficient mining practices and support algorithms that 
                        promote environmental responsibility without compromising security.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-32 bg-slate-900/20">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Our Journey
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    From concept to community
                </p>
            </div>
            
            <div class="space-y-16">
                <!-- Timeline Item 1 -->
                <div class="zen-card rounded-3xl p-12">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="w-24 h-24 bg-zen-500/20 rounded-3xl flex items-center justify-center flex-shrink-0">
                            <span class="text-4xl">💡</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-3xl font-light text-slate-200 mb-4">The Vision</h3>
                            <p class="text-slate-400 text-lg font-light leading-relaxed">
                                It started with a simple idea: what if mining could be peaceful? What if we could create 
                                a space where technology and tranquility coexist? This vision became the foundation of Isekai Pool.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="zen-card rounded-3xl p-12">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="w-24 h-24 bg-zen-500/20 rounded-3xl flex items-center justify-center flex-shrink-0">
                            <span class="text-4xl">🔍</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-3xl font-light text-slate-200 mb-4">The Discovery</h3>
                            <p class="text-slate-400 text-lg font-light leading-relaxed">
                                Through research and exploration, we discovered Yenten and its unique YescryptR16 algorithm. 
                                Here was a cryptocurrency that embodied our values: efficient, accessible, and environmentally conscious.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="zen-card rounded-3xl p-12">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="w-24 h-24 bg-zen-500/20 rounded-3xl flex items-center justify-center flex-shrink-0">
                            <span class="text-4xl">🏗️</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-3xl font-light text-slate-200 mb-4">The Building</h3>
                            <p class="text-slate-400 text-lg font-light leading-relaxed">
                                We began crafting our platform with meticulous attention to detail. Every element, 
                                from the user interface to the educational content, was designed to promote calm and clarity.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 4 -->
                <div class="zen-card rounded-3xl p-12">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="w-24 h-24 bg-zen-500/20 rounded-3xl flex items-center justify-center flex-shrink-0">
                            <span class="text-4xl">🌊</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-3xl font-light text-slate-200 mb-4">The Flow</h3>
                            <p class="text-slate-400 text-lg font-light leading-relaxed">
                                Today, Isekai Pool flows like a gentle stream, providing resources, guidance, and community 
                                to miners seeking a more mindful approach to cryptocurrency. The journey continues, 
                                always evolving, always peaceful.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-32 bg-slate-950">
        <div class="max-w-4xl mx-auto px-8 text-center">
            <div class="zen-card rounded-3xl p-16">
                <h2 class="text-5xl md:text-6xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Join Our Journey
                </h2>
                <p class="text-2xl text-slate-400 mb-12 font-light leading-relaxed">
                    Become part of a community that values peace, learning, and sustainable mining practices
                </p>
                <div class="flex flex-col sm:flex-row gap-8 justify-center items-center">
                    <a href="mining.php" class="px-12 py-6 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-3xl font-light text-xl transition-all duration-500 transform hover:scale-105 zen-border-subtle">
                        Start Mining
                    </a>
                    <a href="contact.php" class="px-12 py-6 border-2 border-zen-500/30 text-zen-400 hover:bg-zen-500/10 hover:border-zen-400 rounded-3xl font-light text-xl transition-all duration-500">
                        Get in Touch
                    </a>
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
                        <li><a href="#" class="text-slate-400 hover:text-zen-400 transition-colors text-lg font-light">Documentation</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-zen-400 transition-colors text-lg font-light">Community</a></li>
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
        
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                navbar.classList.add('bg-slate-950/90');
            } else {
                navbar.classList.remove('bg-slate-950/90');
            }
        });
    </script>
</body>
</html>
