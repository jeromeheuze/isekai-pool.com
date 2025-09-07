<?php
// Simple article management system
// In a real implementation, this would use a database and proper authentication

$articlesFile = '../data/articles.json';

// Load existing articles
$articles = [];
if (file_exists($articlesFile)) {
    $articles = json_decode(file_get_contents($articlesFile), true) ?: [];
}

// Handle form submission
if ($_POST) {
    $newArticle = [
        'id' => strtolower(str_replace(' ', '-', $_POST['title'])),
        'title' => $_POST['title'],
        'date' => $_POST['date'],
        'category' => $_POST['category'],
        'excerpt' => $_POST['excerpt'],
        'content' => $_POST['content']
    ];
    
    $articles[$newArticle['id']] = $newArticle;
    
    // Save to file
    if (!is_dir('../data')) {
        mkdir('../data', 0755, true);
    }
    file_put_contents($articlesFile, json_encode($articles, JSON_PRETTY_PRINT));
    
    $success = "Article added successfully!";
}
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Management - Isekai Pool</title>
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
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans min-h-screen">
    <div class="max-w-4xl mx-auto px-8 py-16">
        <div class="mb-8">
            <h1 class="text-4xl font-light text-slate-200 mb-4">Article Management</h1>
            <p class="text-slate-400">Add and manage news articles for Isekai Pool</p>
        </div>
        
        <?php if (isset($success)): ?>
            <div class="bg-zen-500/20 border border-zen-500/30 rounded-2xl p-6 mb-8">
                <p class="text-zen-400"><?php echo htmlspecialchars($success); ?></p>
            </div>
        <?php endif; ?>
        
        <!-- Add New Article Form -->
        <div class="bg-slate-900/50 rounded-3xl p-8 mb-12">
            <h2 class="text-2xl font-light text-slate-200 mb-6">Add New Article</h2>
            
            <form method="POST" class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-slate-300 mb-2">Title</label>
                        <input type="text" name="title" required 
                               class="w-full px-4 py-3 bg-slate-800/50 border border-zen-500/20 rounded-2xl text-slate-200 focus:outline-none focus:border-zen-400">
                    </div>
                    <div>
                        <label class="block text-slate-300 mb-2">Date</label>
                        <input type="date" name="date" required 
                               class="w-full px-4 py-3 bg-slate-800/50 border border-zen-500/20 rounded-2xl text-slate-200 focus:outline-none focus:border-zen-400">
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-slate-300 mb-2">Category</label>
                        <select name="category" required 
                                class="w-full px-4 py-3 bg-slate-800/50 border border-zen-500/20 rounded-2xl text-slate-200 focus:outline-none focus:border-zen-400">
                            <option value="Mining Tips">Mining Tips</option>
                            <option value="Hardware">Hardware</option>
                            <option value="Market">Market</option>
                            <option value="Community">Community</option>
                            <option value="Featured">Featured</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-slate-300 mb-2">Excerpt</label>
                        <input type="text" name="excerpt" required 
                               class="w-full px-4 py-3 bg-slate-800/50 border border-zen-500/20 rounded-2xl text-slate-200 focus:outline-none focus:border-zen-400">
                    </div>
                </div>
                
                <div>
                    <label class="block text-slate-300 mb-2">Content (HTML)</label>
                    <textarea name="content" rows="15" required 
                              class="w-full px-4 py-3 bg-slate-800/50 border border-zen-500/20 rounded-2xl text-slate-200 focus:outline-none focus:border-zen-400"
                              placeholder="Enter article content in HTML format..."></textarea>
                </div>
                
                <button type="submit" 
                        class="px-8 py-4 bg-gradient-to-r from-zen-500 to-zen-600 hover:from-zen-400 hover:to-zen-500 text-white rounded-2xl font-light transition-all duration-500">
                    Add Article
                </button>
            </form>
        </div>
        
        <!-- Existing Articles -->
        <div class="bg-slate-900/50 rounded-3xl p-8">
            <h2 class="text-2xl font-light text-slate-200 mb-6">Existing Articles</h2>
            
            <?php if (empty($articles)): ?>
                <p class="text-slate-400">No articles found. Add your first article above!</p>
            <?php else: ?>
                <div class="space-y-4">
                    <?php foreach ($articles as $id => $article): ?>
                        <div class="bg-slate-800/30 rounded-2xl p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-light text-slate-200 mb-2"><?php echo htmlspecialchars($article['title']); ?></h3>
                                    <div class="flex items-center gap-4 text-sm text-slate-400">
                                        <span><?php echo htmlspecialchars($article['date']); ?></span>
                                        <span class="px-2 py-1 bg-zen-500/20 text-zen-400 rounded-full"><?php echo htmlspecialchars($article['category']); ?></span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <a href="../article.php?id=<?php echo urlencode($id); ?>" 
                                       class="px-4 py-2 bg-zen-500/20 text-zen-400 rounded-xl hover:bg-zen-500/30 transition-colors">
                                        View
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="mt-8 text-center">
            <a href="../news.php" class="text-zen-400 hover:text-zen-300 transition-colors">← Back to News</a>
        </div>
    </div>
</body>
</html>
