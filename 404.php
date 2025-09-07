<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - Isekai Pool</title>
    <meta name="description" content="The page you're looking for doesn't exist. Return to Isekai Pool for Yenten mining resources.">
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
        .zen-card {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(74, 157, 74, 0.1);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 font-zen min-h-screen overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 bg-slate-950/90 backdrop-blur-15px border-b border-zen-500/10">
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
            
            <!-- Navigation -->
            <div class="hidden md:flex items-center space-x-12">
                <a href="index.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg">Home</a>
                <a href="about.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg">About</a>
                <a href="mining.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg">Mining</a>
                <a href="pools.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg">Pools</a>
                <a href="calculator.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg">Calculator</a>
            </div>
        </div>
    </nav>

    <!-- 404 Content -->
    <section class="relative min-h-screen flex items-center justify-center zen-gradient overflow-hidden pt-24">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-32 left-16 w-40 h-40 bg-zen-500/10 rounded-full animate-drift"></div>
            <div class="absolute top-48 right-24 w-32 h-32 bg-zen-400/15 rounded-full animate-drift" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-48 left-24 w-48 h-48 bg-zen-600/8 rounded-full animate-drift" style="animation-delay: 4s;"></div>
            <div class="absolute bottom-32 right-16 w-36 h-36 bg-zen-500/12 rounded-full animate-drift" style="animation-delay: 1s;"></div>
        </div>
        
        <!-- Content -->
        <div class="relative z-10 text-center max-w-4xl mx-auto px-8">
            <div class="animate-fade-in-slow">
                <div class="zen-card rounded-3xl p-16">
                    <div class="w-32 h-32 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 animate-breathe">
                        <span class="text-8xl">🧘‍♂️</span>
                    </div>
                    
                    <h1 class="text-8xl md:text-9xl font-thin text-slate-200 mb-8 zen-text-glow">
                        404
                    </h1>
                    
                    <h2 class="text-4xl md:text-5xl font-light text-slate-300 mb-8">
                        Page Not Found
                    </h2>
                    
                    <p class="text-2xl text-slate-400 mb-12 max-w-2xl mx-auto leading-relaxed font-light">
                        The page you're looking for has drifted away like a leaf in the wind. 
                        Let's find your way back to the path of zen mining.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-8 justify-center items-center">
                        <a href="index.php" class="px-12 py-6 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-3xl font-light text-xl transition-all duration-500 transform hover:scale-105">
                            Return Home
                        </a>
                        <a href="mining.php" class="px-12 py-6 border-2 border-zen-500/30 text-zen-400 hover:bg-zen-500/10 hover:border-zen-400 rounded-3xl font-light text-xl transition-all duration-500">
                            Start Mining
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links -->
    <section class="py-32 bg-slate-900/30">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-light text-slate-200 mb-4">Popular Pages</h3>
                <p class="text-slate-400 font-light">Find what you're looking for</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <a href="mining.php" class="zen-card rounded-3xl p-8 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-3xl">⚡</span>
                    </div>
                    <h4 class="text-xl font-light text-slate-200 mb-2">Mining Guide</h4>
                    <p class="text-slate-400 font-light text-sm">Learn to mine Yenten</p>
                </a>
                
                <a href="pools.php" class="zen-card rounded-3xl p-8 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-3xl">🏊‍♂️</span>
                    </div>
                    <h4 class="text-xl font-light text-slate-200 mb-2">Mining Pools</h4>
                    <p class="text-slate-400 font-light text-sm">Compare pool options</p>
                </a>
                
                <a href="calculator.php" class="zen-card rounded-3xl p-8 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-3xl">📊</span>
                    </div>
                    <h4 class="text-xl font-light text-slate-200 mb-2">Calculator</h4>
                    <p class="text-slate-400 font-light text-sm">Calculate profitability</p>
                </a>
                
                <a href="faq.php" class="zen-card rounded-3xl p-8 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-3xl">❓</span>
                    </div>
                    <h4 class="text-xl font-light text-slate-200 mb-2">FAQ</h4>
                    <p class="text-slate-400 font-light text-sm">Find answers</p>
                </a>
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
</body>
</html>
