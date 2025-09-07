<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallets - Isekai Pool | Yenten Wallet Setup & Security Guide</title>
    <meta name="description" content="Complete guide to Yenten wallets. Learn how to set up, secure, and use YTN wallets for mining rewards. Desktop, mobile, and hardware wallet options.">
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
        .wallet-card {
            transition: all 0.3s ease;
        }
        .wallet-card:hover {
            transform: translateY(-4px);
            border-color: rgba(74, 157, 74, 0.3);
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
                    Wallets
                </h1>
                <p class="text-2xl md:text-3xl text-slate-300 mb-12 max-w-4xl mx-auto leading-relaxed font-light">
                    Secure your Yenten with mindful wallet practices
                </p>
            </div>
        </div>
    </section>

    <!-- Wallet Types Section -->
    <section class="py-32 bg-slate-900/30">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Choose Your Wallet
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Find the perfect wallet for your needs and security level
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Desktop Wallet -->
                <div class="wallet-card zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <span class="text-4xl">💻</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Desktop Wallet</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-8">
                        Full-featured wallet with complete control over your private keys. 
                        Best for experienced users who want maximum security.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Full node support</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Complete control</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Advanced features</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-red-400">⚠</span>
                            <span class="text-slate-300 font-light">Requires technical knowledge</span>
                        </div>
                    </div>
                    <a href="#desktop-setup" class="block w-full text-center px-6 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                        Setup Guide
                    </a>
                </div>
                
                <!-- Mobile Wallet -->
                <div class="wallet-card zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <span class="text-4xl">📱</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Mobile Wallet</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-8">
                        Convenient wallet for everyday use. Perfect for beginners and 
                        those who need quick access to their YTN.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Easy to use</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Portable</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Quick transactions</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-red-400">⚠</span>
                            <span class="text-slate-300 font-light">Less secure than desktop</span>
                        </div>
                    </div>
                    <a href="#mobile-setup" class="block w-full text-center px-6 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                        Setup Guide
                    </a>
                </div>
                
                <!-- Hardware Wallet -->
                <div class="wallet-card zen-card rounded-3xl p-12 text-center">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <span class="text-4xl">🔒</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Hardware Wallet</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-8">
                        Maximum security for large amounts. Your private keys never 
                        leave the device, making it virtually unhackable.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Maximum security</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Offline storage</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-zen-400">✓</span>
                            <span class="text-slate-300 font-light">Multi-coin support</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-red-400">⚠</span>
                            <span class="text-slate-300 font-light">Requires purchase</span>
                        </div>
                    </div>
                    <a href="#hardware-setup" class="block w-full text-center px-6 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                        Setup Guide
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Desktop Wallet Setup -->
    <section id="desktop-setup" class="py-32 bg-slate-950">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Desktop Wallet Setup
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Step-by-step guide to setting up your Yenten desktop wallet
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Steps -->
                <div class="space-y-12">
                    <!-- Step 1 -->
                    <div class="zen-card rounded-3xl p-12">
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-zen-500/20 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <span class="text-2xl font-bold text-zen-400">1</span>
                            </div>
                            <div>
                                <h3 class="text-3xl font-light text-slate-200 mb-4">Download Wallet</h3>
                                <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                                    Download the official Yenten desktop wallet from the official website. 
                                    Choose the version for your operating system.
                                </p>
                                <a href="https://github.com/yentencoin/yenten" target="_blank" class="inline-block px-6 py-3 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                                    Download →
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
                                <h3 class="text-3xl font-light text-slate-200 mb-4">Install & Sync</h3>
                                <p class="text-slate-400 text-lg font-light leading-relaxed">
                                    Install the wallet and let it sync with the Yenten network. 
                                    This may take several hours on first run as it downloads the blockchain.
                                </p>
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
                                <h3 class="text-3xl font-light text-slate-200 mb-4">Create Wallet</h3>
                                <p class="text-slate-400 text-lg font-light leading-relaxed">
                                    Create a new wallet or import an existing one. 
                                    Write down your seed phrase and store it securely offline.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Visual Guide -->
                <div class="zen-card rounded-3xl p-16 text-center">
                    <div class="w-40 h-40 bg-zen-500/10 rounded-3xl flex items-center justify-center mx-auto mb-8 animate-breathe">
                        <span class="text-8xl">💻</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Desktop Wallet</h3>
                    <p class="text-slate-400 mb-8 text-xl font-light">
                        Full Node Wallet
                    </p>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 text-lg font-light">Security</span>
                            <span class="text-zen-400 font-light text-xl">Maximum</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 text-lg font-light">Storage</span>
                            <span class="text-zen-400 font-light text-xl">~2GB</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 text-lg font-light">Sync Time</span>
                            <span class="text-zen-400 font-light text-xl">2-4 hours</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Best Practices -->
    <section class="py-32 bg-slate-900/20">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Security Best Practices
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Protect your Yenten with mindful security practices
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Essential Security -->
                <div class="zen-card rounded-3xl p-12">
                    <h3 class="text-3xl font-light text-slate-200 mb-8">Essential Security</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-sm">🔐</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Backup Your Seed</h4>
                                <p class="text-slate-400 font-light">Write down your seed phrase on paper and store it in multiple secure locations. Never store it digitally.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-sm">🛡️</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Use Strong Passwords</h4>
                                <p class="text-slate-400 font-light">Create unique, complex passwords for your wallet. Consider using a password manager.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-sm">🔒</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Keep Software Updated</h4>
                                <p class="text-slate-400 font-light">Regularly update your wallet software to receive security patches and new features.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-sm">🌐</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Verify Addresses</h4>
                                <p class="text-slate-400 font-light">Always double-check wallet addresses before sending transactions. One wrong character means lost funds.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Advanced Security -->
                <div class="zen-card rounded-3xl p-12">
                    <h3 class="text-3xl font-light text-slate-200 mb-8">Advanced Security</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-sm">🏠</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Use Hardware Wallets</h4>
                                <p class="text-slate-400 font-light">For large amounts, use hardware wallets like Ledger or Trezor for maximum security.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-sm">🔍</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Verify Downloads</h4>
                                <p class="text-slate-400 font-light">Always verify wallet downloads using checksums and digital signatures from official sources.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-sm">🌍</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Use VPN</h4>
                                <p class="text-slate-400 font-light">Consider using a VPN when accessing your wallet to protect your privacy and location.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-zen-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-zen-400 text-sm">📱</span>
                            </div>
                            <div>
                                <h4 class="text-xl font-light text-slate-200 mb-2">Enable 2FA</h4>
                                <p class="text-slate-400 font-light">Use two-factor authentication wherever possible to add an extra layer of security.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Troubleshooting -->
    <section class="py-32 bg-slate-950">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Troubleshooting
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Common issues and peaceful solutions
                </p>
            </div>
            
            <div class="zen-card rounded-3xl p-12">
                <div class="space-y-8">
                    <!-- Issue 1 -->
                    <div class="border-l-4 border-zen-500/30 pl-8">
                        <h3 class="text-2xl font-light text-zen-400 mb-4">Wallet Won't Sync</h3>
                        <p class="text-slate-400 font-light leading-relaxed mb-4">
                            If your wallet is stuck syncing or taking too long, try these solutions:
                        </p>
                        <ul class="text-slate-400 font-light space-y-2 ml-4">
                            <li>• Check your internet connection</li>
                            <li>• Restart the wallet application</li>
                            <li>• Delete the blockchain data and re-sync</li>
                            <li>• Check firewall settings</li>
                        </ul>
                    </div>
                    
                    <!-- Issue 2 -->
                    <div class="border-l-4 border-zen-500/30 pl-8">
                        <h3 class="text-2xl font-light text-zen-400 mb-4">Transaction Not Confirming</h3>
                        <p class="text-slate-400 font-light leading-relaxed mb-4">
                            If your transaction is stuck or taking too long to confirm:
                        </p>
                        <ul class="text-slate-400 font-light space-y-2 ml-4">
                            <li>• Check network congestion</li>
                            <li>• Increase transaction fee if possible</li>
                            <li>• Wait for network to process</li>
                            <li>• Contact support if stuck for days</li>
                        </ul>
                    </div>
                    
                    <!-- Issue 3 -->
                    <div class="border-l-4 border-zen-500/30 pl-8">
                        <h3 class="text-2xl font-light text-zen-400 mb-4">Lost Seed Phrase</h3>
                        <p class="text-slate-400 font-light leading-relaxed mb-4">
                            If you've lost your seed phrase:
                        </p>
                        <ul class="text-slate-400 font-light space-y-2 ml-4">
                            <li>• Check all your backup locations</li>
                            <li>• Look for any written notes</li>
                            <li>• Check password managers</li>
                            <li>• Unfortunately, without the seed phrase, funds may be lost</li>
                        </ul>
                    </div>
                    
                    <!-- Issue 4 -->
                    <div class="border-l-4 border-zen-500/30 pl-8">
                        <h3 class="text-2xl font-light text-zen-400 mb-4">Wrong Address Sent To</h3>
                        <p class="text-slate-400 font-light leading-relaxed mb-4">
                            If you sent YTN to the wrong address:
                        </p>
                        <ul class="text-slate-400 font-light space-y-2 ml-4">
                            <li>• Double-check the address format</li>
                            <li>• Contact the recipient if possible</li>
                            <li>• Unfortunately, transactions are irreversible</li>
                            <li>• Always verify addresses before sending</li>
                        </ul>
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
                    Ready to Secure Your YTN?
                </h2>
                <p class="text-2xl text-slate-400 mb-12 font-light leading-relaxed">
                    Start your journey with mindful wallet practices
                </p>
                <div class="flex flex-col sm:flex-row gap-8 justify-center items-center">
                    <a href="mining.php" class="px-12 py-6 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-3xl font-light text-xl transition-all duration-500 transform hover:scale-105 zen-border-subtle">
                        Start Mining
                    </a>
                    <a href="contact.php" class="px-12 py-6 border-2 border-zen-500/30 text-zen-400 hover:bg-zen-500/10 hover:border-zen-400 rounded-3xl font-light text-xl transition-all duration-500">
                        Get Support
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
        
        // Smooth scrolling for anchor links
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
    </script>
</body>
</html>
