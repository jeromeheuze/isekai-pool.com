<?php
/** @var array<int, array<string, mixed>> $coins */
?>
<section class="space-y-10">
  <header class="space-y-4">
    <h1 class="text-3xl font-semibold text-white">CPU Mineable Coins</h1>
    <p class="text-slate-300">
      A curated collection of CPU-first proof-of-work projects. Use this as a launch pad to explore fundamentals, wallets, and compatible mining pools.
    </p>
  </header>

  <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
    <?php foreach ($coins as $coin): ?>
      <article class="flex flex-col gap-4 rounded-2xl border border-slate-800 bg-slate-900/60 p-5 transition hover:border-lime-400/60 hover:bg-slate-900">
        <div class="flex items-start justify-between">
          <div>
            <h2 class="text-xl font-semibold text-white"><?= e($coin['name'] ?? '') ?></h2>
            <p class="text-sm text-slate-400"><?= e($coin['symbol'] ?? '') ?> &middot; <?= e($coin['algorithm'] ?? '') ?></p>
          </div>
          <span class="rounded-full bg-lime-400/10 px-3 py-1 text-xs font-semibold uppercase text-lime-300">
            <?= e($coin['network'] ?? 'Mainnet') ?>
          </span>
        </div>
        <p class="flex-1 text-sm text-slate-300"><?= e($coin['summary'] ?? '') ?></p>
        <dl class="grid grid-cols-2 gap-4 text-xs text-slate-400">
          <div>
            <dt class="uppercase tracking-wide text-slate-500">Launch</dt>
            <dd class="text-sm text-white"><?= e($coin['launch'] ?? '—') ?></dd>
          </div>
          <div>
            <dt class="uppercase tracking-wide text-slate-500">Block time</dt>
            <dd class="text-sm text-white"><?= e($coin['block_time'] ?? '—') ?></dd>
          </div>
          <div>
            <dt class="uppercase tracking-wide text-slate-500">Supply</dt>
            <dd class="text-sm text-white"><?= e($coin['supply'] ?? '—') ?></dd>
          </div>
          <div>
            <dt class="uppercase tracking-wide text-slate-500">Community</dt>
            <dd class="text-sm text-white"><?= e($coin['community'] ?? '—') ?></dd>
          </div>
        </dl>
        <div class="flex flex-wrap gap-2 text-xs text-slate-400">
          <?php foreach ($coin['tags'] ?? [] as $tag): ?>
            <span class="rounded-full border border-slate-700 px-3 py-1">#<?= e($tag) ?></span>
          <?php endforeach; ?>
        </div>
        <div class="mt-4 flex justify-between text-sm">
          <a href="<?= e($coin['website'] ?? '#') ?>" target="_blank" rel="noopener" class="text-lime-300 hover:text-lime-200">
            Website
          </a>
          <?php if (!empty($coin['docs'])): ?>
            <a href="<?= e($coin['docs']) ?>" target="_blank" rel="noopener" class="text-slate-300 hover:text-lime-200">
              Docs
            </a>
          <?php endif; ?>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

