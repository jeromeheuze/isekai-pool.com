<?php
/** @var array<int, array<string, mixed>> $featuredCoins */
/** @var array<int, array<string, mixed>> $featuredPools */
?>
<section class="space-y-16">
  <div class="grid gap-10 lg:grid-cols-[1.1fr,0.9fr] lg:items-center">
    <div class="space-y-6">
      <span class="inline-flex items-center gap-2 rounded-full border border-lime-400/40 bg-lime-400/10 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-lime-300">
        CPU Mining Collective
      </span>
      <h1 class="text-3xl font-semibold leading-snug text-white sm:text-4xl">
        Discover CPU-friendly coins, compare pools, and grow resilient networks.
      </h1>
      <p class="text-lg text-slate-300">
        Isekai CPU curates the best-proof-of-work projects you can mine from home. Explore coin fundamentals, monitor pool health, and share knowledge with builders pushing decentralisation forward.
      </p>
      <div class="flex flex-col gap-3 sm:flex-row">
        <a
          href="/pools"
          class="inline-flex items-center justify-center rounded-full bg-lime-400 px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-lime-300"
        >
          Browse Featured Pools
        </a>
        <a
          href="/guides"
          class="inline-flex items-center justify-center rounded-full border border-slate-700 px-6 py-3 text-sm font-semibold text-slate-200 transition hover:border-lime-400 hover:text-lime-200"
        >
          Start CPU Mining
        </a>
      </div>
    </div>
    <div class="rounded-3xl border border-slate-800 bg-slate-900/60 p-6 shadow-xl shadow-slate-900/40">
      <h2 class="text-sm font-semibold uppercase tracking-wide text-lime-300">Why CPU Mining?</h2>
      <ul class="mt-4 space-y-4 text-sm text-slate-300">
        <li class="flex items-start gap-3">
          <span class="mt-1 h-2.5 w-2.5 rounded-full bg-lime-400"></span>
          <div>
            <strong class="block text-slate-100">Inclusive hashing</strong>
            <span>Mine with everyday hardware and keep networks accessible to new participants.</span>
          </div>
        </li>
        <li class="flex items-start gap-3">
          <span class="mt-1 h-2.5 w-2.5 rounded-full bg-lime-400"></span>
          <div>
            <strong class="block text-slate-100">Algorithm diversity</strong>
            <span>Support innovative algorithms like RandomX, GhostRider, and YesPower engineered for CPUs.</span>
          </div>
        </li>
        <li class="flex items-start gap-3">
          <span class="mt-1 h-2.5 w-2.5 rounded-full bg-lime-400"></span>
          <div>
            <strong class="block text-slate-100">Grassroots communities</strong>
            <span>Join teams building real utility around fair launches, micro-rewards, and hybrid consensus.</span>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <section class="space-y-6">
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-semibold text-white">Spotlight Coins</h2>
      <a href="/coins" class="text-sm font-semibold text-lime-300 hover:text-lime-200">View all</a>
    </div>
    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
      <?php foreach ($featuredCoins as $coin): ?>
        <article class="group flex flex-col gap-4 rounded-2xl border border-slate-800 bg-slate-900/60 p-5 transition hover:border-lime-400/60 hover:bg-slate-900">
          <div class="flex items-start justify-between">
            <div>
              <h3 class="text-lg font-semibold text-white"><?= e($coin['name'] ?? '') ?></h3>
              <p class="text-sm text-slate-400"><?= e($coin['symbol'] ?? '') ?> &middot; <?= e($coin['algorithm'] ?? '') ?></p>
            </div>
            <span class="rounded-full bg-lime-400/10 px-3 py-1 text-xs font-semibold uppercase text-lime-300">
              <?= e(($coin['emission'] ?? '')) ?>
            </span>
          </div>
          <p class="flex-1 text-sm text-slate-300"><?= e($coin['summary'] ?? '') ?></p>
          <div class="flex flex-wrap gap-2 text-xs text-slate-400">
            <?php foreach ($coin['tags'] ?? [] as $tag): ?>
              <span class="rounded-full border border-slate-700 px-3 py-1">#<?= e($tag) ?></span>
            <?php endforeach; ?>
          </div>
          <div class="flex justify-between text-sm">
            <a href="<?= e($coin['website'] ?? '#') ?>" target="_blank" rel="noopener" class="text-lime-300 hover:text-lime-200">
              Website
            </a>
            <a href="/pools?coin=<?= urlencode((string) ($coin['slug'] ?? '')) ?>" class="text-lime-300 hover:text-lime-200">
              View pools
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="space-y-6">
    <div class="flex items-center justify-between">
      <h2 class="text-xl font-semibold text-white">Featured Pools</h2>
      <a href="/pools" class="text-sm font-semibold text-lime-300 hover:text-lime-200">Compare pools</a>
    </div>
    <div class="grid gap-6 md:grid-cols-2">
      <?php foreach ($featuredPools as $pool): ?>
        <article class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5 transition hover:border-lime-400/60 hover:bg-slate-900">
          <div class="flex items-start justify-between gap-4">
            <div>
              <h3 class="text-lg font-semibold text-white"><?= e($pool['name'] ?? 'Pool') ?></h3>
              <p class="text-sm text-slate-400"><?= e($pool['region'] ?? 'Global') ?> &middot; <?= e(strtoupper((string) ($pool['payout_scheme'] ?? 'PPLNS'))) ?></p>
            </div>
            <span class="rounded-full bg-slate-800 px-3 py-1 text-xs font-semibold uppercase text-lime-300">
              <?= e(strtoupper((string) ($pool['coin'] ?? ''))) ?>
            </span>
          </div>
          <dl class="mt-4 grid grid-cols-2 gap-4 text-sm text-slate-300">
            <div>
              <dt class="text-xs uppercase tracking-wide text-slate-500">Fee</dt>
              <dd class="font-semibold text-white"><?= e($pool['fee'] ?? '—') ?></dd>
            </div>
            <div>
              <dt class="text-xs uppercase tracking-wide text-slate-500">Hashrate</dt>
              <dd class="font-semibold text-white"><?= e($pool['status']['hashrate'] ?? 'N/A') ?></dd>
            </div>
            <div>
              <dt class="text-xs uppercase tracking-wide text-slate-500">Min payout</dt>
              <dd class="font-semibold text-white"><?= e($pool['min_payout'] ?? '—') ?></dd>
            </div>
            <div>
              <dt class="text-xs uppercase tracking-wide text-slate-500">Last update</dt>
              <dd class="font-semibold text-white"><?= e($pool['status']['last_updated'] ?? '—') ?></dd>
            </div>
          </dl>
          <div class="mt-6 flex justify-between text-sm">
            <a href="<?= e($pool['homepage'] ?? '#') ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-lime-300 hover:text-lime-200">
              Visit pool →
            </a>
            <a href="/pools/<?= urlencode((string) ($pool['slug'] ?? '')) ?>" class="text-slate-300 hover:text-lime-200">
              Connection info
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
</section>

