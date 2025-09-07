<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Isekai Pool | Frequently Asked Questions</title>
    <meta name="description" content="Find answers to common questions about Yenten mining, wallets, pools, and the Isekai Pool community. Get help with your mining journey.">
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
        .faq-item {
            transition: all 0.3s ease;
        }
        .faq-item:hover {
            border-color: rgba(74, 157, 74, 0.2);
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
                    FAQ
                </h1>
                <p class="text-2xl md:text-3xl text-slate-300 mb-12 max-w-4xl mx-auto leading-relaxed font-light">
                    Find peace in answers to your questions
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Categories -->
    <section class="py-32 bg-slate-900/30">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Common Questions
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Answers to help you on your mining journey
                </p>
            </div>
            
            <!-- FAQ Items -->
            <div class="space-y-8">
                <!-- General Questions -->
                <div class="zen-card rounded-3xl p-12">
                    <h3 class="text-3xl font-light text-slate-200 mb-8">🌿 General Questions</h3>
                    <div class="space-y-6">
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">What is Yenten (YTN)?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Yenten is a CPU-mineable cryptocurrency that uses the YescryptR16 algorithm. 
                                It's designed to be energy-efficient and accessible to regular computer users, 
                                promoting decentralization through CPU mining rather than expensive ASIC hardware.
                            </p>
                        </div>
                        
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">What makes Isekai Pool different?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Isekai Pool focuses on bringing zen principles to mining - promoting mindfulness, 
                                sustainability, and community. We emphasize education, low fees, and creating a 
                                peaceful environment for miners of all experience levels.
                            </p>
                        </div>
                        
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">Is Yenten mining profitable?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Profitability depends on your hardware, electricity costs, and market conditions. 
                                Use our <a href="calculator.php" class="text-zen-400 hover:text-zen-300 transition-colors">profitability calculator</a> to estimate your potential earnings. 
                                Remember, mining should be sustainable and mindful, not just about profit.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Mining Questions -->
                <div class="zen-card rounded-3xl p-12">
                    <h3 class="text-3xl font-light text-slate-200 mb-8">⚡ Mining Questions</h3>
                    <div class="space-y-6">
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">What hardware do I need to mine Yenten?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Yenten can be mined with any modern CPU. You don't need expensive ASIC miners or GPUs. 
                                A standard desktop or laptop computer is sufficient. The key is having a stable internet 
                                connection and keeping your system cool during mining.
                            </p>
                        </div>
                        
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">How do I start mining?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Start by downloading a Yenten wallet, then choose mining software like Yenten GUI Miner 
                                or cpuminer-opt. Join a mining pool (we recommend starting with the official pool), 
                                configure your miner with your wallet address, and begin mining. Check our 
                                <a href="mining.php" class="text-zen-400 hover:text-zen-300 transition-colors">mining guide</a> for detailed instructions.
                            </p>
                        </div>
                        
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">How many CPU cores should I use?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Use 75-80% of your available CPU cores to maintain system stability and prevent overheating. 
                                Leave some cores free for your operating system and other applications. Monitor your 
                                CPU temperature and reduce cores if it gets too hot.
                            </p>
                        </div>
                        
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">Is mining safe for my computer?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Yes, when done properly. Monitor your CPU temperature (keep it below 80°C), ensure 
                                adequate cooling, and don't run mining 24/7 unless your system is designed for it. 
                                Mining should be sustainable for both your hardware and your electricity bill.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Wallet Questions -->
                <div class="zen-card rounded-3xl p-12">
                    <h3 class="text-3xl font-light text-slate-200 mb-8">💰 Wallet Questions</h3>
                    <div class="space-y-6">
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">Which wallet should I use?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                For beginners, we recommend the Yenten GUI Miner which includes a built-in wallet. 
                                For more security, use the official Yenten desktop wallet. For large amounts, 
                                consider a hardware wallet. Check our <a href="wallets.php" class="text-zen-400 hover:text-zen-300 transition-colors">wallet guide</a> for detailed recommendations.
                            </p>
                        </div>
                        
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">How do I secure my wallet?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Always backup your seed phrase on paper and store it securely. Use strong passwords, 
                                keep your software updated, and never share your private keys. For large amounts, 
                                consider using a hardware wallet for maximum security.
                            </p>
                        </div>
                        
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">What if I lose my seed phrase?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Unfortunately, if you lose your seed phrase and don't have a backup, your funds 
                                may be permanently lost. This is why it's crucial to write down your seed phrase 
                                and store it in multiple secure locations. Always test your backup before relying on it.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Pool Questions -->
                <div class="zen-card rounded-3xl p-12">
                    <h3 class="text-3xl font-light text-slate-200 mb-8">🏊‍♂️ Pool Questions</h3>
                    <div class="space-y-6">
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">What is a mining pool?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                A mining pool is a group of miners who combine their computing power to increase 
                                their chances of finding blocks and earning rewards. Instead of waiting a long time 
                                for individual rewards, pool miners receive smaller, more frequent payouts.
                            </p>
                        </div>
                        
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">How do I choose a pool?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Consider factors like pool fees, minimum payouts, uptime, and community support. 
                                For beginners, we recommend pools with low minimum payouts and good documentation. 
                                Check our <a href="pools.php" class="text-zen-400 hover:text-zen-300 transition-colors">pool comparison</a> for detailed information.
                            </p>
                        </div>
                        
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">When will Isekai Pool be available?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Isekai Pool is currently in development. We're working on creating a pool that 
                                embodies our zen principles with low fees, excellent uptime, and community support. 
                                Follow our updates for launch announcements.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Technical Questions -->
                <div class="zen-card rounded-3xl p-12">
                    <h3 class="text-3xl font-light text-slate-200 mb-8">🔧 Technical Questions</h3>
                    <div class="space-y-6">
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">What is YescryptR16?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                YescryptR16 is the hashing algorithm used by Yenten. It's designed to be CPU-friendly 
                                and memory-intensive, making it resistant to ASIC mining. This ensures that regular 
                                computer users can participate in mining without expensive specialized hardware.
                            </p>
                        </div>
                        
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">Why is my hashrate low?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Low hashrate can be caused by CPU throttling due to heat, insufficient cooling, 
                                background processes, or incorrect miner configuration. Ensure your CPU is cool, 
                                close unnecessary programs, and optimize your miner settings for your hardware.
                            </p>
                        </div>
                        
                        <div class="faq-item border-l-4 border-zen-500/30 pl-8">
                            <h4 class="text-xl font-light text-zen-400 mb-3">How often are blocks found?</h4>
                            <p class="text-slate-400 font-light leading-relaxed">
                                Yenten has a target block time of approximately 2.5 minutes. However, actual block 
                                times can vary based on network difficulty and total hashrate. This is normal 
                                and part of how the network maintains its security and stability.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Still Have Questions -->
    <section class="py-32 bg-slate-950">
        <div class="max-w-4xl mx-auto px-8 text-center">
            <div class="zen-card rounded-3xl p-16">
                <h2 class="text-5xl md:text-6xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Still Have Questions?
                </h2>
                <p class="text-2xl text-slate-400 mb-12 font-light leading-relaxed">
                    We're here to help you find peace in your mining journey
                </p>
                <div class="flex flex-col sm:flex-row gap-8 justify-center items-center">
                    <a href="contact.php" class="px-12 py-6 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-3xl font-light text-xl transition-all duration-500 transform hover:scale-105 zen-border-subtle">
                        Contact Support
                    </a>
                    <a href="mining.php" class="px-12 py-6 border-2 border-zen-500/30 text-zen-400 hover:bg-zen-500/10 hover:border-zen-400 rounded-3xl font-light text-xl transition-all duration-500">
                        Mining Guide
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
