<?php
// Load articles from JSON file
$articlesFile = 'data/articles.json';
$articles = [];

// Default articles if no JSON file exists
$defaultArticles = [
    'welcome-to-isekai-pool' => [
        'title' => 'Welcome to Isekai Pool: The Zen of Mining',
        'date' => 'January 15, 2024',
        'category' => 'Featured',
        'excerpt' => 'Discover how we\'re bringing mindfulness to cryptocurrency mining.',
        'content' => '
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                Welcome to Isekai Pool, where the ancient wisdom of zen meets the modern world of cryptocurrency mining. 
                Our journey began with a simple observation: mining should be a mindful practice, not a frantic race.
            </p>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">The Philosophy of Mindful Mining</h3>
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                In traditional zen practice, every action is performed with intention and awareness. We believe the same 
                principles should apply to cryptocurrency mining. Each hash calculation becomes a moment of meditation, 
                bringing you closer to the essence of decentralized technology.
            </p>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">Sustainable Practices</h3>
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                Yenten\'s YescryptR16 algorithm embodies our values perfectly. It\'s designed for CPU mining, making it 
                accessible to everyone while maintaining environmental consciousness. No expensive ASIC miners needed – 
                just your existing computer and a mindful approach.
            </p>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">Community Harmony</h3>
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                We\'re building more than just a mining pool – we\'re creating a sanctuary for those who seek balance 
                between profitability and peace. Our community supports miners of all experience levels, from beginners 
                taking their first steps to veterans sharing their wisdom.
            </p>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">The Path Forward</h3>
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                As we continue to develop Isekai Pool, we remain committed to our core principles: mindfulness, 
                sustainability, and community. Join us on this journey of discovery, where every block found is a 
                step toward digital enlightenment.
            </p>
        '
    ],
    'yenten-mining-101' => [
        'title' => 'Yenten Mining 101: Getting Started',
        'date' => 'January 12, 2024',
        'category' => 'Mining Tips',
        'excerpt' => 'A comprehensive beginner\'s guide to Yenten mining.',
        'content' => '
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                Welcome to the world of Yenten mining! This guide will walk you through everything you need to know 
                to start your mining journey with confidence and mindfulness.
            </p>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">What You\'ll Need</h3>
            <ul class="text-slate-400 text-lg font-light leading-relaxed mb-6 space-y-2">
                <li>• A computer with a modern CPU</li>
                <li>• Stable internet connection</li>
                <li>• Yenten wallet</li>
                <li>• Mining software</li>
                <li>• Patience and curiosity</li>
            </ul>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">Step 1: Create Your Wallet</h3>
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                Before you can start mining, you need a place to store your YTN rewards. We recommend starting with 
                the official Yenten GUI wallet, which includes a built-in mining interface perfect for beginners.
            </p>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">Step 2: Choose Your Mining Software</h3>
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                For beginners, we recommend the Yenten GUI Miner. It\'s user-friendly and includes everything you need 
                to get started. More experienced users might prefer cpuminer-opt for advanced features.
            </p>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">Step 3: Join a Mining Pool</h3>
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                While you can mine solo, joining a pool provides more consistent rewards. Look for pools with low fees, 
                good uptime, and supportive communities. Our pool comparison tool can help you find the right fit.
            </p>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">Step 4: Start Mining</h3>
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                Configure your miner with your wallet address and pool information, then start mining! Remember to 
                monitor your system temperature and adjust settings as needed. Mining should be sustainable for your hardware.
            </p>
        '
    ],
    'best-cpus-2024' => [
        'title' => 'Best CPUs for Yenten Mining in 2024',
        'date' => 'January 10, 2024',
        'category' => 'Hardware',
        'excerpt' => 'Our comprehensive review of the best CPUs for Yenten mining.',
        'content' => '
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                Choosing the right CPU for Yenten mining can significantly impact your profitability and mining experience. 
                Here\'s our comprehensive guide to the best CPUs for 2024.
            </p>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">Budget-Friendly Options</h3>
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                <strong>AMD Ryzen 5 5600G:</strong> Excellent value for money with good single-thread performance. 
                Perfect for beginners who want to start mining without breaking the bank.
            </p>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">Mid-Range Champions</h3>
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                <strong>Intel Core i5-13600K:</strong> Outstanding performance for YescryptR16 algorithm. 
                Great balance of power efficiency and mining performance.
            </p>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">High-Performance Options</h3>
            <p class="text-slate-400 text-lg font-light leading-relaxed mb-6">
                <strong>AMD Ryzen 7 7700X:</strong> Exceptional mining performance with excellent power efficiency. 
                Ideal for serious miners who want maximum hashrate.
            </p>
            
            <h3 class="text-2xl font-light text-slate-200 mb-4">What to Consider</h3>
            <ul class="text-slate-400 text-lg font-light leading-relaxed mb-6 space-y-2">
                <li>• Single-thread performance is crucial for YescryptR16</li>
                <li>• Power efficiency affects long-term profitability</li>
                <li>• Cooling requirements for sustained mining</li>
                <li>• Price-to-performance ratio</li>
            </ul>
        '
    ]
];

// Load articles from JSON file if it exists, otherwise use defaults
if (file_exists($articlesFile)) {
    $articles = json_decode(file_get_contents($articlesFile), true) ?: [];
} else {
    $articles = $defaultArticles;
}

$articleId = $_GET['id'] ?? '';
$article = $articles[$articleId] ?? null;

if (!$article) {
    header('Location: 404.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($article['title']); ?> - Isekai Pool</title>
    <meta name="description" content="<?php echo htmlspecialchars($article['excerpt']); ?>">
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
        .zen-glass {
            background: rgba(15, 23, 42, 0.3);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(74, 157, 74, 0.05);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 font-zen min-h-screen overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 zen-glass border-b border-zen-500/10">
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
                <a href="index.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg">Home</a>
                <a href="about.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg">About</a>
                <a href="mining.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg">Mining</a>
                <a href="pools.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg">Pools</a>
                <a href="calculator.php" class="text-slate-300 hover:text-zen-400 transition-all duration-300 font-light text-lg">Calculator</a>
                <a href="news.php" class="text-zen-400 font-light text-lg">News</a>
            </div>
        </div>
    </nav>

    <!-- Article Content -->
    <section class="pt-32 pb-16">
        <div class="max-w-4xl mx-auto px-8">
            <!-- Breadcrumb -->
            <div class="mb-8">
                <a href="news.php" class="text-zen-400 hover:text-zen-300 font-light transition-colors">← Back to News</a>
            </div>
            
            <!-- Article Header -->
            <div class="zen-card rounded-3xl p-12 mb-12">
                <div class="flex items-center gap-4 mb-6">
                    <span class="px-4 py-2 bg-zen-500/20 text-zen-400 rounded-full text-sm font-light"><?php echo htmlspecialchars($article['category']); ?></span>
                    <span class="text-slate-400 font-light"><?php echo htmlspecialchars($article['date']); ?></span>
                </div>
                <h1 class="text-4xl md:text-5xl font-light text-slate-200 mb-6 zen-text-glow">
                    <?php echo htmlspecialchars($article['title']); ?>
                </h1>
                <p class="text-xl text-slate-400 font-light leading-relaxed">
                    <?php echo htmlspecialchars($article['excerpt']); ?>
                </p>
            </div>
            
            <!-- Article Body -->
            <div class="zen-card rounded-3xl p-12">
                <div class="prose prose-lg max-w-none">
                    <?php echo $article['content']; ?>
                </div>
            </div>
            
            <!-- Related Articles -->
            <div class="mt-16">
                <h2 class="text-3xl font-light text-slate-200 mb-8">Related Articles</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <a href="article.php?id=yenten-mining-101" class="zen-card rounded-3xl p-8 hover:transform hover:scale-105 transition-all duration-500 group">
                        <h3 class="text-xl font-light text-slate-200 mb-4 group-hover:text-zen-400 transition-colors">Yenten Mining 101: Getting Started</h3>
                        <p class="text-slate-400 font-light">A comprehensive beginner's guide to Yenten mining.</p>
                    </a>
                    <a href="article.php?id=best-cpus-2024" class="zen-card rounded-3xl p-8 hover:transform hover:scale-105 transition-all duration-500 group">
                        <h3 class="text-xl font-light text-slate-200 mb-4 group-hover:text-zen-400 transition-colors">Best CPUs for Yenten Mining in 2024</h3>
                        <p class="text-slate-400 font-light">Our comprehensive review of the best CPUs for Yenten mining.</p>
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
