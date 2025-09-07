<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mining Calculator - Isekai Pool | Yenten Profitability Calculator</title>
    <meta name="description" content="Calculate your Yenten mining profitability with our zen-inspired calculator. Estimate earnings, power costs, and ROI for CPU mining.">
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
        .input-field {
            background: rgba(15, 23, 42, 0.4);
            border: 1px solid rgba(74, 157, 74, 0.2);
            transition: all 0.3s ease;
        }
        .input-field:focus {
            background: rgba(15, 23, 42, 0.6);
            border-color: rgba(74, 157, 74, 0.4);
            outline: none;
        }
        .result-card {
            background: rgba(74, 157, 74, 0.1);
            border: 1px solid rgba(74, 157, 74, 0.2);
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
                <a href="pools.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg relative group">
                    Pools
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-zen-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="calculator.php" class="text-zen-400 font-light text-lg relative">
                    Calculator
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-zen-400"></span>
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
                <a href="pools.php" class="block text-slate-300 hover:text-zen-400 transition-colors duration-300 font-light text-lg">Pools</a>
                <a href="calculator.php" class="block text-zen-400 font-light text-lg">Calculator</a>
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
                    Mining Calculator
                </h1>
                <p class="text-2xl md:text-3xl text-slate-300 mb-12 max-w-4xl mx-auto leading-relaxed font-light">
                    Find your perfect mining balance
                </p>
            </div>
        </div>
    </section>

    <!-- Calculator Section -->
    <section class="py-32 bg-slate-900/30">
        <div class="max-w-6xl mx-auto px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Input Form -->
                <div class="zen-card rounded-3xl p-12">
                    <h2 class="text-4xl font-light text-slate-200 mb-8">Calculate Your Profit</h2>
                    
                    <form id="calculator-form" class="space-y-8">
                        <!-- Hashrate Input -->
                        <div>
                            <label for="hashrate" class="block text-xl font-light text-slate-300 mb-4">Your Hashrate (H/s)</label>
                            <input type="number" id="hashrate" name="hashrate" placeholder="e.g., 1000000" 
                                   class="w-full px-6 py-4 input-field rounded-2xl text-slate-200 text-lg font-light focus:ring-2 focus:ring-zen-500/50">
                            <p class="text-slate-400 text-sm mt-2 font-light">Enter your CPU's hashrate in hashes per second</p>
                        </div>
                        
                        <!-- Power Consumption -->
                        <div>
                            <label for="power" class="block text-xl font-light text-slate-300 mb-4">Power Consumption (W)</label>
                            <input type="number" id="power" name="power" placeholder="e.g., 65" 
                                   class="w-full px-6 py-4 input-field rounded-2xl text-slate-200 text-lg font-light focus:ring-2 focus:ring-zen-500/50">
                            <p class="text-slate-400 text-sm mt-2 font-light">Your CPU's power consumption in watts</p>
                        </div>
                        
                        <!-- Electricity Cost -->
                        <div>
                            <label for="electricity" class="block text-xl font-light text-slate-300 mb-4">Electricity Cost ($/kWh)</label>
                            <input type="number" id="electricity" name="electricity" step="0.01" placeholder="e.g., 0.12" 
                                   class="w-full px-6 py-4 input-field rounded-2xl text-slate-200 text-lg font-light focus:ring-2 focus:ring-zen-500/50">
                            <p class="text-slate-400 text-sm mt-2 font-light">Cost of electricity per kilowatt-hour</p>
                        </div>
                        
                        <!-- Pool Fee -->
                        <div>
                            <label for="pool-fee" class="block text-xl font-light text-slate-300 mb-4">Pool Fee (%)</label>
                            <input type="number" id="pool-fee" name="pool-fee" step="0.1" placeholder="e.g., 1.0" 
                                   class="w-full px-6 py-4 input-field rounded-2xl text-slate-200 text-lg font-light focus:ring-2 focus:ring-zen-500/50">
                            <p class="text-slate-400 text-sm mt-2 font-light">Mining pool fee percentage</p>
                        </div>
                        
                        <!-- Calculate Button -->
                        <button type="submit" class="w-full px-8 py-6 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light text-xl transition-all duration-500 transform hover:scale-105">
                            Calculate Profitability
                        </button>
                    </form>
                </div>
                
                <!-- Results -->
                <div class="space-y-8">
                    <!-- Daily Results -->
                    <div class="result-card rounded-3xl p-12">
                        <h3 class="text-3xl font-light text-slate-200 mb-8">Daily Results</h3>
                        <div class="space-y-6">
                            <div class="flex justify-between items-center">
                                <span class="text-slate-400 text-lg font-light">Yenten Earned</span>
                                <span class="text-zen-400 text-2xl font-light" id="daily-ytn">0.00 YTN</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-slate-400 text-lg font-light">USD Value</span>
                                <span class="text-zen-400 text-2xl font-light" id="daily-usd">$0.00</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-slate-400 text-lg font-light">Power Cost</span>
                                <span class="text-red-400 text-2xl font-light" id="daily-power">$0.00</span>
                            </div>
                            <div class="flex justify-between items-center border-t border-zen-500/20 pt-6">
                                <span class="text-slate-300 text-xl font-light">Net Profit</span>
                                <span class="text-zen-400 text-3xl font-light" id="daily-profit">$0.00</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Monthly Results -->
                    <div class="result-card rounded-3xl p-12">
                        <h3 class="text-3xl font-light text-slate-200 mb-8">Monthly Results</h3>
                        <div class="space-y-6">
                            <div class="flex justify-between items-center">
                                <span class="text-slate-400 text-lg font-light">Yenten Earned</span>
                                <span class="text-zen-400 text-2xl font-light" id="monthly-ytn">0.00 YTN</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-slate-400 text-lg font-light">USD Value</span>
                                <span class="text-zen-400 text-2xl font-light" id="monthly-usd">$0.00</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-slate-400 text-lg font-light">Power Cost</span>
                                <span class="text-red-400 text-2xl font-light" id="monthly-power">$0.00</span>
                            </div>
                            <div class="flex justify-between items-center border-t border-zen-500/20 pt-6">
                                <span class="text-slate-300 text-xl font-light">Net Profit</span>
                                <span class="text-zen-400 text-3xl font-light" id="monthly-profit">$0.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Market Data Section -->
    <section class="py-32 bg-slate-950">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Market Data
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Real-time Yenten market information
                </p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                <!-- YTN Price -->
                <div class="zen-card rounded-3xl p-8 text-center">
                    <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">💰</span>
                    </div>
                    <h3 class="text-3xl font-light text-zen-400 mb-2" id="ytn-price">$0.0012</h3>
                    <p class="text-slate-400 text-lg font-light">Yenten Price</p>
                </div>
                
                <!-- Network Difficulty -->
                <div class="zen-card rounded-3xl p-8 text-center">
                    <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">⚖️</span>
                    </div>
                    <h3 class="text-3xl font-light text-zen-400 mb-2" id="difficulty">1,234,567</h3>
                    <p class="text-slate-400 text-lg font-light">Network Difficulty</p>
                </div>
                
                <!-- Block Reward -->
                <div class="zen-card rounded-3xl p-8 text-center">
                    <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">🎁</span>
                    </div>
                    <h3 class="text-3xl font-light text-zen-400 mb-2" id="block-reward">50 YTN</h3>
                    <p class="text-slate-400 text-lg font-light">Block Reward</p>
                </div>
                
                <!-- Network Hashrate -->
                <div class="zen-card rounded-3xl p-8 text-center">
                    <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">⚡</span>
                    </div>
                    <h3 class="text-3xl font-light text-zen-400 mb-2" id="network-hashrate">45.2 MH/s</h3>
                    <p class="text-slate-400 text-lg font-light">Network Hashrate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips Section -->
    <section class="py-32 bg-slate-900/20">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Optimization Tips
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Maximize your mining efficiency with mindful practices
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Hardware Tips -->
                <div class="zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <span class="text-4xl">💻</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Hardware</h3>
                    <div class="space-y-4 text-left">
                        <div class="flex items-start gap-3">
                            <span class="text-zen-400 mt-1">•</span>
                            <span class="text-slate-400 font-light">Use modern CPUs with good single-thread performance</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-zen-400 mt-1">•</span>
                            <span class="text-slate-400 font-light">Ensure adequate cooling for sustained mining</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-zen-400 mt-1">•</span>
                            <span class="text-slate-400 font-light">Monitor temperatures to prevent throttling</span>
                        </div>
                    </div>
                </div>
                
                <!-- Software Tips -->
                <div class="zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <span class="text-4xl">⚙️</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Software</h3>
                    <div class="space-y-4 text-left">
                        <div class="flex items-start gap-3">
                            <span class="text-zen-400 mt-1">•</span>
                            <span class="text-slate-400 font-light">Keep mining software updated</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-zen-400 mt-1">•</span>
                            <span class="text-slate-400 font-light">Optimize thread count for your CPU</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-zen-400 mt-1">•</span>
                            <span class="text-slate-400 font-light">Use stable internet connection</span>
                        </div>
                    </div>
                </div>
                
                <!-- Economic Tips -->
                <div class="zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <span class="text-4xl">📊</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Economics</h3>
                    <div class="space-y-4 text-left">
                        <div class="flex items-start gap-3">
                            <span class="text-zen-400 mt-1">•</span>
                            <span class="text-slate-400 font-light">Consider electricity costs vs. earnings</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-zen-400 mt-1">•</span>
                            <span class="text-slate-400 font-light">Choose pools with lower fees</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-zen-400 mt-1">•</span>
                            <span class="text-slate-400 font-light">Monitor market conditions regularly</span>
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
                    Ready to Start?
                </h2>
                <p class="text-2xl text-slate-400 mb-12 font-light leading-relaxed">
                    Begin your mindful mining journey today
                </p>
                <div class="flex flex-col sm:flex-row gap-8 justify-center items-center">
                    <a href="mining.php" class="px-12 py-6 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-3xl font-light text-xl transition-all duration-500 transform hover:scale-105 zen-border-subtle">
                        Learn Mining
                    </a>
                    <a href="pools.php" class="px-12 py-6 border-2 border-zen-500/30 text-zen-400 hover:bg-zen-500/10 hover:border-zen-400 rounded-3xl font-light text-xl transition-all duration-500">
                        Find Pools
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
        
        // Calculator functionality
        const form = document.getElementById('calculator-form');
        
        // Sample data (in real implementation, this would come from APIs)
        const marketData = {
            ytnPrice: 0.0012,
            difficulty: 1234567,
            blockReward: 50,
            networkHashrate: 45200000, // 45.2 MH/s
            blockTime: 150 // 2.5 minutes in seconds
        };
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            calculateProfitability();
        });
        
        function calculateProfitability() {
            const hashrate = parseFloat(document.getElementById('hashrate').value) || 0;
            const power = parseFloat(document.getElementById('power').value) || 0;
            const electricity = parseFloat(document.getElementById('electricity').value) || 0;
            const poolFee = parseFloat(document.getElementById('pool-fee').value) || 0;
            
            if (hashrate === 0) {
                alert('Please enter your hashrate');
                return;
            }
            
            // Calculate daily YTN earnings
            const dailyYTN = (hashrate / marketData.networkHashrate) * (marketData.blockReward * (86400 / marketData.blockTime));
            const dailyYTNAfterFee = dailyYTN * (1 - poolFee / 100);
            const dailyUSD = dailyYTNAfterFee * marketData.ytnPrice;
            
            // Calculate power costs
            const dailyPowerCost = (power * 24 * electricity) / 1000;
            const dailyProfit = dailyUSD - dailyPowerCost;
            
            // Monthly calculations
            const monthlyYTN = dailyYTNAfterFee * 30;
            const monthlyUSD = dailyUSD * 30;
            const monthlyPowerCost = dailyPowerCost * 30;
            const monthlyProfit = dailyProfit * 30;
            
            // Update UI
            document.getElementById('daily-ytn').textContent = dailyYTNAfterFee.toFixed(4) + ' YTN';
            document.getElementById('daily-usd').textContent = '$' + dailyUSD.toFixed(4);
            document.getElementById('daily-power').textContent = '$' + dailyPowerCost.toFixed(4);
            document.getElementById('daily-profit').textContent = '$' + dailyProfit.toFixed(4);
            
            document.getElementById('monthly-ytn').textContent = monthlyYTN.toFixed(2) + ' YTN';
            document.getElementById('monthly-usd').textContent = '$' + monthlyUSD.toFixed(2);
            document.getElementById('monthly-power').textContent = '$' + monthlyPowerCost.toFixed(2);
            document.getElementById('monthly-profit').textContent = '$' + monthlyProfit.toFixed(2);
            
            // Color coding for profit
            const dailyProfitElement = document.getElementById('daily-profit');
            const monthlyProfitElement = document.getElementById('monthly-profit');
            
            if (dailyProfit >= 0) {
                dailyProfitElement.className = 'text-zen-400 text-3xl font-light';
            } else {
                dailyProfitElement.className = 'text-red-400 text-3xl font-light';
            }
            
            if (monthlyProfit >= 0) {
                monthlyProfitElement.className = 'text-zen-400 text-3xl font-light';
            } else {
                monthlyProfitElement.className = 'text-red-400 text-3xl font-light';
            }
        }
        
        // Update market data
        function updateMarketData() {
            document.getElementById('ytn-price').textContent = '$' + marketData.ytnPrice.toFixed(4);
            document.getElementById('difficulty').textContent = marketData.difficulty.toLocaleString();
            document.getElementById('block-reward').textContent = marketData.blockReward + ' YTN';
            document.getElementById('network-hashrate').textContent = (marketData.networkHashrate / 1000000).toFixed(1) + ' MH/s';
        }
        
        // Initialize
        updateMarketData();
        
        // Auto-calculate on input change
        document.querySelectorAll('#calculator-form input').forEach(input => {
            input.addEventListener('input', calculateProfitability);
        });
    </script>
</body>
</html>
