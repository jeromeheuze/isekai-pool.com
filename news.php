<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Isekai Pool | Yenten Mining News & Updates</title>
    <meta name="description" content="Stay updated with the latest Yenten mining news, network updates, hardware reviews, and community insights. Your source for mindful mining information.">
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
        .news-card {
            transition: all 0.3s ease;
        }
        .news-card:hover {
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
                <a href="news.php" class="text-zen-400 font-light text-lg relative">
                    News
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
                <a href="calculator.php" class="block text-slate-300 hover:text-zen-400 transition-colors duration-300 font-light text-lg">Calculator</a>
                <a href="news.php" class="block text-zen-400 font-light text-lg">News</a>
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
                    News
                </h1>
                <p class="text-2xl md:text-3xl text-slate-300 mb-12 max-w-4xl mx-auto leading-relaxed font-light">
                    Stay informed with mindful mining insights
                </p>
            </div>
        </div>
    </section>

    <!-- Featured Article -->
    <section class="py-32 bg-slate-900/30">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-thin text-slate-200 mb-4 zen-text-glow">
                    Featured Story
                </h2>
                <p class="text-xl text-slate-400 font-light">Our latest insights on zen mining</p>
            </div>
            
            <div class="zen-card rounded-3xl p-12 mb-16">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="flex items-center gap-4 mb-6">
                            <span class="px-4 py-2 bg-zen-500/20 text-zen-400 rounded-full text-sm font-light">Featured</span>
                            <span class="text-slate-400 font-light">January 15, 2024</span>
                        </div>
                        <h3 class="text-4xl font-light text-slate-200 mb-6">Welcome to Isekai Pool: The Zen of Mining</h3>
                        <p class="text-slate-400 text-lg font-light leading-relaxed mb-8">
                            Discover how we're bringing mindfulness to cryptocurrency mining. Learn about our philosophy of sustainable, 
                            peaceful mining practices that benefit both your hardware and the environment.
                        </p>
                        <a href="article.php?id=welcome-to-isekai-pool" class="inline-block px-8 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                            Read Full Article →
                        </a>
                    </div>
                    <div class="text-center">
                        <div class="w-64 h-64 bg-zen-500/10 rounded-3xl flex items-center justify-center mx-auto animate-breathe">
                            <span class="text-9xl">🧘‍♂️</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Categories -->
    <section class="py-32 bg-slate-950">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-thin text-slate-200 mb-4 zen-text-glow">
                    Latest News
                </h2>
                <p class="text-xl text-slate-400 font-light">Stay updated with Yenten mining insights</p>
            </div>
            
            <!-- Category Filters -->
            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <button class="px-6 py-3 bg-zen-500/20 text-zen-400 rounded-2xl font-light transition-all duration-300 hover:bg-zen-500/30" data-category="all">
                    All News
                </button>
                <button class="px-6 py-3 bg-slate-800/50 text-slate-300 rounded-2xl font-light transition-all duration-300 hover:bg-slate-700/50" data-category="mining">
                    Mining Tips
                </button>
                <button class="px-6 py-3 bg-slate-800/50 text-slate-300 rounded-2xl font-light transition-all duration-300 hover:bg-slate-700/50" data-category="hardware">
                    Hardware
                </button>
                <button class="px-6 py-3 bg-slate-800/50 text-slate-300 rounded-2xl font-light transition-all duration-300 hover:bg-slate-700/50" data-category="market">
                    Market
                </button>
                <button class="px-6 py-3 bg-slate-800/50 text-slate-300 rounded-2xl font-light transition-all duration-300 hover:bg-slate-700/50" data-category="community">
                    Community
                </button>
            </div>
            
            <!-- News Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="news-grid">
                <?php
                // Load articles from JSON file
                $articlesFile = 'data/articles.json';
                $articles = [];
                
                // Default articles if no JSON file exists
                $defaultArticles = [
                    'yenten-mining-101' => [
                        'title' => 'Yenten Mining 101: Getting Started',
                        'date' => 'January 12, 2024',
                        'category' => 'Mining Tips',
                        'excerpt' => 'A comprehensive beginner\'s guide to Yenten mining. Learn the basics of CPU mining, wallet setup, and joining your first mining pool.'
                    ],
                    'best-cpus-2024' => [
                        'title' => 'Best CPUs for Yenten Mining in 2024',
                        'date' => 'January 10, 2024',
                        'category' => 'Hardware',
                        'excerpt' => 'Our comprehensive review of the best CPUs for Yenten mining. Compare performance, efficiency, and value across different price ranges.'
                    ],
                    'yescryptr16-algorithm' => [
                        'title' => 'Understanding YescryptR16 Algorithm',
                        'date' => 'January 8, 2024',
                        'category' => 'Market',
                        'excerpt' => 'Deep dive into the YescryptR16 algorithm that powers Yenten. Learn why it\'s perfect for CPU mining and how it ensures network security.'
                    ],
                    'mindful-mining-community' => [
                        'title' => 'Building a Mindful Mining Community',
                        'date' => 'January 5, 2024',
                        'category' => 'Community',
                        'excerpt' => 'How we\'re creating a supportive environment for miners of all experience levels. Learn about our zen principles and community values.'
                    ],
                    'optimizing-mining-setup' => [
                        'title' => 'Optimizing Your Mining Setup',
                        'date' => 'January 3, 2024',
                        'category' => 'Mining Tips',
                        'excerpt' => 'Advanced tips for maximizing your mining efficiency while maintaining system stability. Learn about temperature management and power optimization.'
                    ],
                    'raspberry-pi-mining' => [
                        'title' => 'Raspberry Pi Mining Guide',
                        'date' => 'January 1, 2024',
                        'category' => 'Hardware',
                        'excerpt' => 'Turn your Raspberry Pi into a Yenten mining node. Complete setup guide for energy-efficient, low-power mining solutions.'
                    ]
                ];
                
                // Load articles from JSON file if it exists, otherwise use defaults
                if (file_exists($articlesFile)) {
                    $articles = json_decode(file_get_contents($articlesFile), true) ?: [];
                } else {
                    $articles = $defaultArticles;
                }
                
                // Category colors
                $categoryColors = [
                    'Mining Tips' => 'bg-zen-500/20 text-zen-400',
                    'Hardware' => 'bg-blue-500/20 text-blue-400',
                    'Market' => 'bg-green-500/20 text-green-400',
                    'Community' => 'bg-purple-500/20 text-purple-400',
                    'Featured' => 'bg-zen-500/20 text-zen-400'
                ];
                
                // Display articles
                foreach ($articles as $id => $article) {
                    $categoryClass = $categoryColors[$article['category']] ?? 'bg-slate-500/20 text-slate-400';
                    $categorySlug = strtolower(str_replace(' ', '', $article['category']));
                    ?>
                    <article class="news-card zen-card rounded-3xl p-8" data-category="<?php echo $categorySlug; ?>">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="px-3 py-1 <?php echo $categoryClass; ?> rounded-full text-sm font-light"><?php echo htmlspecialchars($article['category']); ?></span>
                            <span class="text-slate-400 text-sm font-light"><?php echo htmlspecialchars($article['date']); ?></span>
                        </div>
                        <h3 class="text-2xl font-light text-slate-200 mb-4"><?php echo htmlspecialchars($article['title']); ?></h3>
                        <p class="text-slate-400 font-light leading-relaxed mb-6">
                            <?php echo htmlspecialchars($article['excerpt']); ?>
                        </p>
                        <a href="article.php?id=<?php echo urlencode($id); ?>" class="text-zen-400 hover:text-zen-300 font-light transition-colors">
                            Read More →
                        </a>
                    </article>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="py-32 bg-slate-900/20">
        <div class="max-w-4xl mx-auto px-8 text-center">
            <div class="zen-card rounded-3xl p-16">
                <h2 class="text-4xl md:text-5xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Stay Updated
                </h2>
                <p class="text-2xl text-slate-400 mb-12 font-light leading-relaxed">
                    Get the latest mining insights delivered to your inbox
                </p>
                <form class="max-w-md mx-auto">
                    <div class="flex gap-4">
                        <input type="email" placeholder="Enter your email" 
                               class="flex-1 px-6 py-4 bg-slate-800/50 border border-zen-500/20 rounded-2xl text-slate-200 font-light focus:outline-none focus:border-zen-400 transition-colors">
                        <button type="submit" class="px-8 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                            Subscribe
                        </button>
                    </div>
                </form>
                <p class="text-slate-500 text-sm font-light mt-4">
                    We respect your privacy. Unsubscribe at any time.
                </p>
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
        
        // Category filtering
        const categoryButtons = document.querySelectorAll('[data-category]');
        const newsArticles = document.querySelectorAll('[data-category]');
        
        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');
                
                // Update button states
                categoryButtons.forEach(btn => {
                    btn.className = 'px-6 py-3 bg-slate-800/50 text-slate-300 rounded-2xl font-light transition-all duration-300 hover:bg-slate-700/50';
                });
                button.className = 'px-6 py-3 bg-zen-500/20 text-zen-400 rounded-2xl font-light transition-all duration-300 hover:bg-zen-500/30';
                
                // Filter articles
                newsArticles.forEach(article => {
                    if (category === 'all' || article.getAttribute('data-category') === category) {
                        article.style.display = 'block';
                    } else {
                        article.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>
