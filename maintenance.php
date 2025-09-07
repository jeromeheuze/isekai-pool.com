<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance - Isekai Pool</title>
    <meta name="description" content="Isekai Pool is temporarily under maintenance. We'll be back soon with improved zen mining experience.">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    
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
    <!-- Maintenance Content -->
    <section class="relative min-h-screen flex items-center justify-center zen-gradient overflow-hidden">
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
                        <span class="text-8xl">🔧</span>
                    </div>
                    
                    <h1 class="text-6xl md:text-8xl font-thin text-slate-200 mb-8 zen-text-glow">
                        Maintenance
                    </h1>
                    
                    <h2 class="text-3xl md:text-4xl font-light text-slate-300 mb-8">
                        We're Improving Your Experience
                    </h2>
                    
                    <p class="text-xl text-slate-400 mb-12 max-w-2xl mx-auto leading-relaxed font-light">
                        Isekai Pool is temporarily under maintenance as we enhance our zen mining experience. 
                        We're working mindfully to bring you even better features and performance.
                    </p>
                    
                    <div class="space-y-6 mb-12">
                        <div class="flex items-center justify-center gap-4">
                            <div class="w-3 h-3 bg-zen-400 rounded-full animate-pulse-soft"></div>
                            <span class="text-slate-300 font-light">Upgrading our mining infrastructure</span>
                        </div>
                        <div class="flex items-center justify-center gap-4">
                            <div class="w-3 h-3 bg-zen-400 rounded-full animate-pulse-soft" style="animation-delay: 0.5s;"></div>
                            <span class="text-slate-300 font-light">Enhancing user experience</span>
                        </div>
                        <div class="flex items-center justify-center gap-4">
                            <div class="w-3 h-3 bg-zen-400 rounded-full animate-pulse-soft" style="animation-delay: 1s;"></div>
                            <span class="text-slate-300 font-light">Preparing new features</span>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <p class="text-slate-400 font-light mb-4">Expected completion:</p>
                        <p class="text-zen-400 text-xl font-light">Soon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-zen-500/10 py-16">
        <div class="max-w-6xl mx-auto px-8 text-center">
            <div class="flex items-center justify-center space-x-4 mb-6">
                <div class="w-12 h-12 bg-gradient-to-br from-zen-500 to-zen-600 rounded-2xl flex items-center justify-center">
                    <span class="text-slate-100 text-2xl font-bold">禅</span>
                </div>
                <span class="text-3xl font-light text-zen-400">Isekai Pool</span>
            </div>
            <p class="text-slate-500 text-lg font-light">
                © 2024 Isekai Pool. Find your zen in the art of mining. 🌿
            </p>
        </div>
    </footer>
</body>
</html>
