<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mining Guide - Isekai Pool | Yenten CPU Mining Tutorials</title>
    <meta name="description" content="Complete guide to Yenten CPU mining with YescryptR16 algorithm. Learn setup, optimization, and best practices for mindful mining.">
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
        .code-block {
            background: rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(74, 157, 74, 0.2);
            border-radius: 12px;
            padding: 1.5rem;
            font-family: 'Courier New', monospace;
            font-size: 0.9rem;
            color: #7bb87b;
            overflow-x: auto;
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
                <a href="about.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg relative group">
                    About
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-zen-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="mining.php" class="text-zen-400 font-light text-lg relative">
                    Mining
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-zen-400"></span>
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
                <a href="about.php" class="block text-slate-300 hover:text-zen-400 transition-colors duration-300 font-light text-lg">About</a>
                <a href="mining.php" class="block text-zen-400 font-light text-lg">Mining</a>
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
                    The Art of Mining
                </h1>
                <p class="text-2xl md:text-3xl text-slate-300 mb-12 max-w-4xl mx-auto leading-relaxed font-light">
                    Master the zen of CPU mining with Yenten
                </p>
            </div>
        </div>
    </section>

    <!-- Getting Started Section -->
    <section class="py-32 bg-slate-900/30">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Begin Your Journey
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Step-by-step guidance for mindful mining
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Steps -->
                <div class="space-y-12">
                    <!-- Step 1 -->
                    <div class="zen-card rounded-3xl p-12">
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <span class="text-2xl font-bold text-zen-400">1</span>
                            </div>
                            <div>
                                <h3 class="text-3xl font-light text-slate-200 mb-4">Create Your Wallet</h3>
                                <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                                    First, you'll need a Yenten wallet to receive your mining rewards. Choose from our recommended wallet options.
                                </p>
                                <a href="wallets.php" class="inline-block px-6 py-3 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                                    Choose Wallet →
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="zen-card rounded-3xl p-12">
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <span class="text-2xl font-bold text-zen-400">2</span>
                            </div>
                            <div>
                                <h3 class="text-3xl font-light text-slate-200 mb-4">Select Mining Software</h3>
                                <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                                    Choose the mining software that best fits your system and experience level.
                                </p>
                                <a href="#software" class="inline-block px-6 py-3 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                                    View Software →
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="zen-card rounded-3xl p-12">
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <span class="text-2xl font-bold text-zen-400">3</span>
                            </div>
                            <div>
                                <h3 class="text-3xl font-light text-slate-200 mb-4">Join a Pool</h3>
                                <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                                    Connect to a mining pool for consistent rewards and community support.
                                </p>
                                <a href="pools.php" class="inline-block px-6 py-3 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                                    Find Pools →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Visual Guide -->
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
                            <span class="text-slate-400 text-lg font-light">Difficulty</span>
                            <span class="text-zen-400 font-light text-xl">Balanced</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 text-lg font-light">Energy Usage</span>
                            <span class="text-zen-400 font-light text-xl">Efficient</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 text-lg font-light">Hardware</span>
                            <span class="text-zen-400 font-light text-xl">Standard CPU</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mining Software Section -->
    <section id="software" class="py-32 bg-slate-950">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Mining Software
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Choose your path to mining enlightenment
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Yenten GUI Miner -->
                <div class="zen-card rounded-3xl p-12 hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-4xl">🖥️</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6 text-center">Yenten GUI Miner</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-8">
                        Perfect for beginners. User-friendly interface with built-in pool configuration and real-time statistics.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Easy Setup</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Windows/Mac/Linux</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Real-time Stats</span>
                        </div>
                    </div>
                    <a href="https://github.com/yentencoin/yenten-gui-miner" target="_blank" class="block w-full text-center px-6 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                        Download
                    </a>
                </div>
                
                <!-- cpuminer-opt-cpupower -->
                <div class="zen-card rounded-3xl p-12 hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-4xl">⚡</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6 text-center">cpuminer-opt-cpupower</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-8">
                        High-performance command-line miner with advanced optimization features for experienced users.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">High Performance</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Advanced Options</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Cross-platform</span>
                        </div>
                    </div>
                    <a href="https://github.com/JayDDee/cpuminer-opt" target="_blank" class="block w-full text-center px-6 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                        Download
                    </a>
                </div>
                
                <!-- SRBMiner-Multi -->
                <div class="zen-card rounded-3xl p-12 hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-4xl">🔧</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6 text-center">SRBMiner-Multi</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-8">
                        Multi-algorithm miner with excellent YescryptR16 support. Great for mining multiple coins.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Multi-algorithm</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Auto-switching</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Regular Updates</span>
                        </div>
                    </div>
                    <a href="https://github.com/doktor83/SRBMiner-Multi" target="_blank" class="block w-full text-center px-6 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                        Download
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Configuration Guide -->
    <section class="py-32 bg-slate-900/20">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Configuration Guide
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Find your perfect mining balance
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Basic Configuration -->
                <div class="zen-card rounded-3xl p-12">
                    <h3 class="text-4xl font-light text-slate-200 mb-8">Basic Setup</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-2xl font-light text-zen-400 mb-4">Pool Configuration</h4>
                            <div class="code-block">
                                <div class="text-slate-300 mb-2"># Example pool configuration</div>
                                <div class="text-zen-400">stratum+tcp://pool.isekai-pool.com:3333</div>
                                <div class="text-slate-300 mt-2"># Your wallet address</div>
                                <div class="text-zen-400">YOUR_WALLET_ADDRESS</div>
                                <div class="text-slate-300 mt-2"># Worker name (optional)</div>
                                <div class="text-zen-400">worker1</div>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="text-2xl font-light text-zen-400 mb-4">Command Line Example</h4>
                            <div class="code-block">
                                <div class="text-slate-300 mb-2"># cpuminer-opt example</div>
                                <div class="text-zen-400">./cpuminer -a yescryptr16 -o stratum+tcp://pool.isekai-pool.com:3333 -u YOUR_WALLET_ADDRESS -p x</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Optimization Tips -->
                <div class="zen-card rounded-3xl p-12">
                    <h3 class="text-4xl font-light text-slate-200 mb-8">Optimization Tips</h3>
                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">CPU Threads</h4>
                                <p class="text-slate-400 font-light">Use 75-80% of available CPU cores for optimal performance without overheating.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Temperature Monitoring</h4>
                                <p class="text-slate-400 font-light">Keep CPU temperature below 80°C for long-term stability and hardware health.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Power Settings</h4>
                                <p class="text-slate-400 font-light">Set Windows power plan to "High Performance" for consistent mining performance.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-sm">4</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Network Stability</h4>
                                <p class="text-slate-400 font-light">Use a stable internet connection to minimize rejected shares and maximize earnings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Troubleshooting Section -->
    <section class="py-32 bg-slate-950">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Finding Balance
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Common challenges and peaceful solutions
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Common Issues -->
                <div class="zen-card rounded-3xl p-12">
                    <h3 class="text-3xl font-light text-slate-200 mb-8">Common Issues</h3>
                    <div class="space-y-6">
                        <div class="border-l-4 border-zen-500/30 pl-6">
                            <h4 class="text-xl font-light text-zen-400 mb-2">High Reject Rate</h4>
                            <p class="text-slate-400 font-light">Check your internet connection and try a different pool server.</p>
                        </div>
                        
                        <div class="border-l-4 border-zen-500/30 pl-6">
                            <h4 class="text-xl font-light text-zen-400 mb-2">Low Hashrate</h4>
                            <p class="text-slate-400 font-light">Ensure your CPU isn't throttling due to temperature or power limits.</p>
                        </div>
                        
                        <div class="border-l-4 border-zen-500/30 pl-6">
                            <h4 class="text-xl font-light text-zen-400 mb-2">Miner Won't Start</h4>
                            <p class="text-slate-400 font-light">Verify your wallet address and pool URL are correct.</p>
                        </div>
                        
                        <div class="border-l-4 border-zen-500/30 pl-6">
                            <h4 class="text-xl font-light text-zen-400 mb-2">System Overheating</h4>
                            <p class="text-slate-400 font-light">Reduce CPU threads or improve cooling. Mining should be sustainable.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Best Practices -->
                <div class="zen-card rounded-3xl p-12">
                    <h3 class="text-3xl font-light text-slate-200 mb-8">Best Practices</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-xs">✓</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Start Small</h4>
                                <p class="text-slate-400 font-light">Begin with fewer threads and gradually increase to find your system's sweet spot.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-xs">✓</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Monitor Temperatures</h4>
                                <p class="text-slate-400 font-light">Use tools like HWiNFO or Core Temp to keep an eye on system health.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-xs">✓</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Regular Updates</h4>
                                <p class="text-slate-400 font-light">Keep your mining software updated for the best performance and security.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-6 h-6 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-xs">✓</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Patience</h4>
                                <p class="text-slate-400 font-light">Mining is a long-term practice. Let your system find its natural rhythm.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-32 bg-slate-900/30">
        <div class="max-w-4xl mx-auto px-8 text-center">
            <div class="zen-card rounded-3xl p-16">
                <h2 class="text-5xl md:text-6xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Ready to Begin?
                </h2>
                <p class="text-2xl text-slate-400 mb-12 font-light leading-relaxed">
                    Start your mindful mining journey today
                </p>
                <div class="flex flex-col sm:flex-row gap-8 justify-center items-center">
                    <a href="pools.php" class="px-12 py-6 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-3xl font-light text-xl transition-all duration-500 transform hover:scale-105 zen-border-subtle">
                        Find a Pool
                    </a>
                    <a href="calculator.php" class="px-12 py-6 border-2 border-zen-500/30 text-zen-400 hover:bg-zen-500/10 hover:border-zen-400 rounded-3xl font-light text-xl transition-all duration-500">
                        Calculate Profit
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
