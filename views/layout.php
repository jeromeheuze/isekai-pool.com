<?php
/** @var string $title */
/** @var string $content */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= e($title ?? 'Isekai CPU Mining') ?></title>
    <link rel="stylesheet" href="<?= asset('app.css') ?>" />
  </head>
  <body class="min-h-screen bg-slate-950 bg-[radial-gradient(circle_at_top,_#1e293b,_#020617_60%)] text-slate-100">
    <header class="border-b border-slate-800 bg-slate-950/70 backdrop-blur">
      <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <a href="/" class="text-lg font-semibold uppercase tracking-widest text-lime-400">
          Isekai CPU
        </a>
        <nav class="flex items-center gap-6 text-sm font-medium text-slate-300">
          <a href="/coins" class="hover:text-lime-300">Coins</a>
          <a href="/pools" class="hover:text-lime-300">Pools</a>
          <a href="/guides" class="hover:text-lime-300">Guides</a>
          <a
            href="https://discord.gg/"
            class="rounded-full bg-lime-500 px-4 py-2 text-slate-950 transition hover:bg-lime-400"
            target="_blank"
            rel="noopener"
          >
            Join Community
          </a>
        </nav>
      </div>
    </header>
    <main class="mx-auto max-w-6xl px-4 py-12 sm:px-6 lg:px-8">
      <?= $content ?>
    </main>
    <footer class="border-t border-slate-800 bg-slate-950/70">
      <div class="mx-auto flex max-w-6xl flex-col gap-3 px-4 py-8 text-sm text-slate-400 sm:flex-row sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <span>&copy; <?= date('Y') ?> Isekai CPU Mining</span>
        <span>Promoting open CPU mining — decentralised hashing for everyone.</span>
      </div>
    </footer>
  </body>
</html>

