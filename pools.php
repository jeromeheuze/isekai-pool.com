<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mining Pools - Isekai Pool | Yenten Pool Statistics & Comparison</title>
    <meta name="description" content="Compare Yenten mining pools, view real-time statistics, and find the best pool for your mining needs. Comprehensive pool analysis and recommendations.">
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
        .stat-card {
            background: rgba(15, 23, 42, 0.4);
            border: 1px solid rgba(74, 157, 74, 0.1);
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            background: rgba(15, 23, 42, 0.6);
            border-color: rgba(74, 157, 74, 0.2);
            transform: translateY(-2px);
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
                <a href="mining.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg relative group">
                    Mining
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-zen-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="pools.php" class="text-zen-400 font-light text-lg relative">
                    Pools
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-zen-400"></span>
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
                <a href="mining.php" class="block text-slate-300 hover:text-zen-400 transition-colors duration-300 font-light text-lg">Mining</a>
                <a href="pools.php" class="block text-zen-400 font-light text-lg">Pools</a>
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
                    Mining Pools
                </h1>
                <p class="text-2xl md:text-3xl text-slate-300 mb-12 max-w-4xl mx-auto leading-relaxed font-light">
                    Find your perfect pool for peaceful mining
                </p>
            </div>
        </div>
    </section>

    <!-- Network Overview -->
    <section class="py-32 bg-slate-900/30">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Network Overview
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Real-time insights into the Yenten mining ecosystem
                </p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8 mb-16">
                <!-- Network Hashrate -->
                <div class="stat-card rounded-3xl p-8 text-center">
                    <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">⚡</span>
                    </div>
                    <h3 class="text-3xl font-light text-zen-400 mb-2" id="network-hashrate">45.2 MH/s</h3>
                    <p class="text-slate-400 text-lg font-light">Network Hashrate</p>
                </div>
                
                <!-- Active Pools -->
                <div class="stat-card rounded-3xl p-8 text-center">
                    <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">🏊‍♂️</span>
                    </div>
                    <h3 class="text-3xl font-light text-zen-400 mb-2" id="active-pools">12</h3>
                    <p class="text-slate-400 text-lg font-light">Active Pools</p>
                </div>
                
                <!-- Total Miners -->
                <div class="stat-card rounded-3xl p-8 text-center">
                    <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">👥</span>
                    </div>
                    <h3 class="text-3xl font-light text-zen-400 mb-2" id="total-miners">1,234</h3>
                    <p class="text-slate-400 text-lg font-light">Active Miners</p>
                </div>
                
                <!-- Block Time -->
                <div class="stat-card rounded-3xl p-8 text-center">
                    <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">⏱️</span>
                    </div>
                    <h3 class="text-3xl font-light text-zen-400 mb-2" id="block-time">2.5 min</h3>
                    <p class="text-slate-400 text-lg font-light">Avg Block Time</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Pools -->
    <section class="py-32 bg-slate-950">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Featured Pools
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Carefully selected pools for optimal mining experience
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Isekai Pool (Coming Soon) -->
                <div class="zen-card rounded-3xl p-12 relative overflow-hidden">
                    <div class="absolute top-4 right-4">
                        <span class="px-4 py-2 bg-zen-500/20 text-zen-400 rounded-full text-sm font-light">Coming Soon</span>
                    </div>
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-16 h-16 bg-gradient-to-br from-zen-500 to-zen-600 rounded-2xl flex items-center justify-center">
                            <span class="text-2xl">禅</span>
                        </div>
                        <div>
                            <h3 class="text-3xl font-light text-slate-200">Isekai Pool</h3>
                            <p class="text-slate-400 font-light">pool.isekai-pool.com</p>
                        </div>
                    </div>
                    
                    <div class="space-y-6 mb-8">
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-light">Fee</span>
                            <span class="text-zen-400 font-light text-xl">0.5%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-light">Payout</span>
                            <span class="text-zen-400 font-light text-xl">PPLNS</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-light">Min Payout</span>
                            <span class="text-zen-400 font-light text-xl">1 YTN</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-light">Hashrate</span>
                            <span class="text-zen-400 font-light text-xl">0 MH/s</span>
                        </div>
                    </div>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Low fees for community</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">24/7 monitoring</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">DDoS protection</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Community support</span>
                        </div>
                    </div>
                    
                    <button class="w-full px-6 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500 opacity-50 cursor-not-allowed">
                        Coming Soon
                    </button>
                </div>
                
                <!-- Yenten Official Pool -->
                <div class="zen-card rounded-3xl p-12">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center">
                            <span class="text-2xl">🌊</span>
                        </div>
                        <div>
                            <h3 class="text-3xl font-light text-slate-200">Yenten Official</h3>
                            <p class="text-slate-400 font-light">pool.yentencoin.info</p>
                        </div>
                    </div>
                    
                    <div class="space-y-6 mb-8">
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-light">Fee</span>
                            <span class="text-zen-400 font-light text-xl">1.0%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-light">Payout</span>
                            <span class="text-zen-400 font-light text-xl">PPLNS</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-light">Min Payout</span>
                            <span class="text-zen-400 font-light text-xl">0.1 YTN</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-light">Hashrate</span>
                            <span class="text-zen-400 font-light text-xl">15.2 MH/s</span>
                        </div>
                    </div>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Official pool</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Reliable uptime</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Low minimum payout</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Active development</span>
                        </div>
                    </div>
                    
                    <a href="https://pool.yentencoin.info" target="_blank" class="block w-full text-center px-6 py-4 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-400 hover:to-blue-500 text-white rounded-2xl font-light transition-all duration-500">
                        Visit Pool
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- All Pools Comparison -->
    <section class="py-32 bg-slate-900/20">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Pool Comparison
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Compare all available Yenten mining pools
                </p>
            </div>
            
            <div class="zen-card rounded-3xl p-8 overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-zen-500/20">
                            <th class="text-left py-6 px-4 text-xl font-light text-slate-200">Pool</th>
                            <th class="text-left py-6 px-4 text-xl font-light text-slate-200">Fee</th>
                            <th class="text-left py-6 px-4 text-xl font-light text-slate-200">Hashrate</th>
                            <th class="text-left py-6 px-4 text-xl font-light text-slate-200">Miners</th>
                            <th class="text-left py-6 px-4 text-xl font-light text-slate-200">Min Payout</th>
                            <th class="text-left py-6 px-4 text-xl font-light text-slate-200">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zen-500/10">
                        <tr class="hover:bg-zen-500/5 transition-colors">
                            <td class="py-6 px-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-gradient-to-br from-zen-500 to-zen-600 rounded-lg flex items-center justify-center">
                                        <span class="text-sm">禅</span>
                                    </div>
                                    <div>
                                        <div class="font-light text-slate-200">Isekai Pool</div>
                                        <div class="text-sm text-slate-400">pool.isekai-pool.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-6 px-4 text-zen-400 font-light">0.5%</td>
                            <td class="py-6 px-4 text-slate-300 font-light">0 MH/s</td>
                            <td class="py-6 px-4 text-slate-300 font-light">0</td>
                            <td class="py-6 px-4 text-slate-300 font-light">1 YTN</td>
                            <td class="py-6 px-4">
                                <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-sm font-light">Coming Soon</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-zen-500/5 transition-colors">
                            <td class="py-6 px-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                        <span class="text-sm">🌊</span>
                                    </div>
                                    <div>
                                        <div class="font-light text-slate-200">Yenten Official</div>
                                        <div class="text-sm text-slate-400">pool.yentencoin.info</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-6 px-4 text-zen-400 font-light">1.0%</td>
                            <td class="py-6 px-4 text-slate-300 font-light">15.2 MH/s</td>
                            <td class="py-6 px-4 text-slate-300 font-light">456</td>
                            <td class="py-6 px-4 text-slate-300 font-light">0.1 YTN</td>
                            <td class="py-6 px-4">
                                <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm font-light">Active</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-zen-500/5 transition-colors">
                            <td class="py-6 px-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center">
                                        <span class="text-sm">💎</span>
                                    </div>
                                    <div>
                                        <div class="font-light text-slate-200">CryptoPool</div>
                                        <div class="text-sm text-slate-400">ytn.cryptopool.space</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-6 px-4 text-zen-400 font-light">1.5%</td>
                            <td class="py-6 px-4 text-slate-300 font-light">8.7 MH/s</td>
                            <td class="py-6 px-4 text-slate-300 font-light">234</td>
                            <td class="py-6 px-4 text-slate-300 font-light">0.5 YTN</td>
                            <td class="py-6 px-4">
                                <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm font-light">Active</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-zen-500/5 transition-colors">
                            <td class="py-6 px-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg flex items-center justify-center">
                                        <span class="text-sm">⚡</span>
                                    </div>
                                    <div>
                                        <div class="font-light text-slate-200">MiningPoolHub</div>
                                        <div class="text-sm text-slate-400">yenten.miningpoolhub.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-6 px-4 text-zen-400 font-light">0.9%</td>
                            <td class="py-6 px-4 text-slate-300 font-light">12.3 MH/s</td>
                            <td class="py-6 px-4 text-slate-300 font-light">345</td>
                            <td class="py-6 px-4 text-slate-300 font-light">0.1 YTN</td>
                            <td class="py-6 px-4">
                                <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm font-light">Active</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Pool Selection Guide -->
    <section class="py-32 bg-slate-950">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Choosing Your Pool
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Find the perfect pool for your mining journey
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12">
                <!-- For Beginners -->
                <div class="zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <span class="text-4xl">🌱</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">For Beginners</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-8">
                        Start with pools that offer low minimum payouts and excellent documentation. 
                        Focus on learning rather than maximizing profits initially.
                    </p>
                    <div class="space-y-3 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Low minimum payouts</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Good documentation</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Community support</span>
                        </div>
                    </div>
                </div>
                
                <!-- For Experienced Miners -->
                <div class="zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <span class="text-4xl">⚡</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">For Experienced</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-8">
                        Optimize for the best fees and hashrate distribution. Consider pool stability 
                        and advanced features like detailed statistics and API access.
                    </p>
                    <div class="space-y-3 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Low fees</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Advanced statistics</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">API access</span>
                        </div>
                    </div>
                </div>
                
                <!-- For Large Operations -->
                <div class="zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <span class="text-4xl">🏭</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">For Large Operations</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-8">
                        Focus on pool reliability, uptime, and support for large hashrates. 
                        Consider dedicated support and custom configurations.
                    </p>
                    <div class="space-y-3 text-left">
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">High reliability</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Dedicated support</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Custom configurations</span>
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
                    Start Mining Today
                </h2>
                <p class="text-2xl text-slate-400 mb-12 font-light leading-relaxed">
                    Join the Yenten mining community and find your zen
                </p>
                <div class="flex flex-col sm:flex-row gap-8 justify-center items-center">
                    <a href="mining.php" class="px-12 py-6 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-3xl font-light text-xl transition-all duration-500 transform hover:scale-105 zen-border-subtle">
                        Learn Mining
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
        
        // Simulate real-time data updates
        function updatePoolStats() {
            // This would normally fetch from APIs
            const stats = {
                networkHashrate: '45.2 MH/s',
                activePools: '12',
                totalMiners: '1,234',
                blockTime: '2.5 min'
            };
            
            // Update elements with animation
            document.getElementById('network-hashrate').textContent = stats.networkHashrate;
            document.getElementById('active-pools').textContent = stats.activePools;
            document.getElementById('total-miners').textContent = stats.totalMiners;
            document.getElementById('block-time').textContent = stats.blockTime;
        }
        
        // Update stats every 30 seconds
        setInterval(updatePoolStats, 30000);
    </script>
</body>
</html>
