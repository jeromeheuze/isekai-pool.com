<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Isekai Pool | Support & Community</title>
    <meta name="description" content="Get in touch with Isekai Pool for support, questions, or community discussions. Find help with Yenten mining and join our zen community.">
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
                    Contact
                </h1>
                <p class="text-2xl md:text-3xl text-slate-300 mb-12 max-w-4xl mx-auto leading-relaxed font-light">
                    Connect with our zen community
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-32 bg-slate-900/30">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Get in Touch
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    We're here to help you on your mining journey
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Contact Form -->
                <div class="zen-card rounded-3xl p-12">
                    <h3 class="text-3xl font-light text-slate-200 mb-8">Send us a Message</h3>
                    
                    <form id="contact-form" class="space-y-8">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-lg font-light text-slate-300 mb-4">Name</label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-6 py-4 input-field rounded-2xl text-slate-200 text-lg font-light focus:ring-2 focus:ring-zen-500/50">
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-lg font-light text-slate-300 mb-4">Email</label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-6 py-4 input-field rounded-2xl text-slate-200 text-lg font-light focus:ring-2 focus:ring-zen-500/50">
                        </div>
                        
                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-lg font-light text-slate-300 mb-4">Subject</label>
                            <select id="subject" name="subject" required
                                    class="w-full px-6 py-4 input-field rounded-2xl text-slate-200 text-lg font-light focus:ring-2 focus:ring-zen-500/50">
                                <option value="">Select a topic</option>
                                <option value="mining-help">Mining Help</option>
                                <option value="wallet-support">Wallet Support</option>
                                <option value="pool-inquiry">Pool Inquiry</option>
                                <option value="technical-issue">Technical Issue</option>
                                <option value="general-question">General Question</option>
                                <option value="partnership">Partnership</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-lg font-light text-slate-300 mb-4">Message</label>
                            <textarea id="message" name="message" rows="6" required
                                      class="w-full px-6 py-4 input-field rounded-2xl text-slate-200 text-lg font-light focus:ring-2 focus:ring-zen-500/50 resize-none"></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="w-full px-8 py-6 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light text-xl transition-all duration-500 transform hover:scale-105">
                            Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Support Hours -->
                    <div class="zen-card rounded-3xl p-12">
                        <h3 class="text-3xl font-light text-slate-200 mb-8">Support Hours</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <span class="text-slate-400 font-light text-lg">Monday - Friday</span>
                                <span class="text-zen-400 font-light text-lg">9:00 AM - 6:00 PM UTC</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-slate-400 font-light text-lg">Saturday</span>
                                <span class="text-zen-400 font-light text-lg">10:00 AM - 4:00 PM UTC</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-slate-400 font-light text-lg">Sunday</span>
                                <span class="text-zen-400 font-light text-lg">Community Support</span>
                            </div>
                        </div>
                        <p class="text-slate-400 font-light mt-6">
                            We typically respond within 24 hours during business days. 
                            For urgent issues, please mention "URGENT" in your subject line.
                        </p>
                    </div>
                    
                    <!-- Community Links -->
                    <div class="zen-card rounded-3xl p-12">
                        <h3 class="text-3xl font-light text-slate-200 mb-8">Join Our Community</h3>
                        <div class="space-y-6">
                            <a href="#" class="flex items-center gap-4 p-4 bg-slate-800/50 hover:bg-slate-700/50 rounded-2xl transition-all duration-300 group">
                                <div class="w-12 h-12 bg-zen-500/20 rounded-2xl flex items-center justify-center group-hover:bg-zen-500/30 transition-all duration-300">
                                    <span class="text-2xl">💬</span>
                                </div>
                                <div>
                                    <h4 class="text-xl font-light text-slate-200">Discord</h4>
                                    <p class="text-slate-400 font-light">Join our community discussions</p>
                                </div>
                            </a>
                            
                            <a href="#" class="flex items-center gap-4 p-4 bg-slate-800/50 hover:bg-slate-700/50 rounded-2xl transition-all duration-300 group">
                                <div class="w-12 h-12 bg-zen-500/20 rounded-2xl flex items-center justify-center group-hover:bg-zen-500/30 transition-all duration-300">
                                    <span class="text-2xl">🐦</span>
                                </div>
                                <div>
                                    <h4 class="text-xl font-light text-slate-200">Twitter</h4>
                                    <p class="text-slate-400 font-light">Follow for updates and news</p>
                                </div>
                            </a>
                            
                            <a href="#" class="flex items-center gap-4 p-4 bg-slate-800/50 hover:bg-slate-700/50 rounded-2xl transition-all duration-300 group">
                                <div class="w-12 h-12 bg-zen-500/20 rounded-2xl flex items-center justify-center group-hover:bg-zen-500/30 transition-all duration-300">
                                    <span class="text-2xl">📧</span>
                                </div>
                                <div>
                                    <h4 class="text-xl font-light text-slate-200">Email</h4>
                                    <p class="text-slate-400 font-light">support@isekai-pool.com</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Quick Links -->
    <section class="py-32 bg-slate-950">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    Quick Help
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Find answers to common questions
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Mining Help -->
                <div class="zen-card rounded-3xl p-12 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-4xl">⚡</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Mining Help</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-8">
                        Get help with mining setup, optimization, and troubleshooting.
                    </p>
                    <a href="mining.php" class="inline-block px-6 py-3 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                        Mining Guide
                    </a>
                </div>
                
                <!-- Wallet Support -->
                <div class="zen-card rounded-3xl p-12 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-4xl">💰</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">Wallet Support</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-8">
                        Learn about wallet setup, security, and best practices.
                    </p>
                    <a href="wallets.php" class="inline-block px-6 py-3 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                        Wallet Guide
                    </a>
                </div>
                
                <!-- FAQ -->
                <div class="zen-card rounded-3xl p-12 text-center hover:transform hover:scale-105 transition-all duration-500 group">
                    <div class="w-20 h-20 bg-zen-500/20 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-zen-500/30 transition-all duration-500">
                        <span class="text-4xl">❓</span>
                    </div>
                    <h3 class="text-3xl font-light text-slate-200 mb-6">FAQ</h3>
                    <p class="text-slate-400 leading-relaxed text-lg font-light mb-8">
                        Find answers to frequently asked questions.
                    </p>
                    <a href="faq.php" class="inline-block px-6 py-3 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                        View FAQ
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Isekai Pool -->
    <section class="py-32 bg-slate-900/20">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl md:text-7xl font-thin text-slate-200 mb-8 zen-text-glow">
                    About Isekai Pool
                </h2>
                <p class="text-2xl text-slate-400 max-w-4xl mx-auto font-light leading-relaxed">
                    Our mission and values
                </p>
            </div>
            
            <div class="zen-card rounded-3xl p-16">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h3 class="text-4xl font-light text-slate-200 mb-8">Our Mission</h3>
                        <p class="text-slate-400 text-lg font-light leading-relaxed mb-8">
                            Isekai Pool was born from a vision to bring peace and mindfulness to cryptocurrency mining. 
                            We believe that mining should be a sustainable, educational, and community-driven practice 
                            that benefits both individuals and the environment.
                        </p>
                        <p class="text-slate-400 text-lg font-light leading-relaxed mb-8">
                            Our platform provides comprehensive resources, tools, and support to help miners of all 
                            experience levels find their zen in the art of CPU mining. We're building more than just 
                            a mining pool - we're creating a sanctuary for mindful cryptocurrency enthusiasts.
                        </p>
                        <a href="about.php" class="inline-block px-8 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                            Learn More About Us
                        </a>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-40 h-40 bg-zen-500/10 rounded-3xl flex items-center justify-center mx-auto mb-8 animate-breathe">
                            <span class="text-8xl">🌿</span>
                        </div>
                        <h4 class="text-2xl font-light text-slate-200 mb-4">Zen Principles</h4>
                        <div class="space-y-4 text-left">
                            <div class="flex items-center gap-3">
                                <span class="text-zen-400">🧘‍♂️</span>
                                <span class="text-slate-300 font-light">Mindfulness in mining</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-zen-400">🌱</span>
                                <span class="text-slate-300 font-light">Sustainable practices</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-zen-400">🤝</span>
                                <span class="text-slate-300 font-light">Community support</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-zen-400">📚</span>
                                <span class="text-slate-300 font-light">Educational focus</span>
                            </div>
                        </div>
                    </div>
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
        
        // Contact form handling
        const contactForm = document.getElementById('contact-form');
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(contactForm);
            const data = Object.fromEntries(formData);
            
            // Simple validation
            if (!data.name || !data.email || !data.subject || !data.message) {
                alert('Please fill in all fields');
                return;
            }
            
            // Simulate form submission
            alert('Thank you for your message! We\'ll get back to you within 24 hours.');
            contactForm.reset();
        });
    </script>
</body>
</html>
