<?php
/** @var array<string, mixed> $pool */
/** @var array<string, mixed>|null $coin */
?>
<article class="space-y-10">
  <header class="space-y-4">
    <a href="/pools" class="text-sm text-slate-400 hover:text-lime-200">&larr; Back to pools</a>
    <div class="flex flex-wrap items-center justify-between gap-4">
      <div>
        <h1 class="text-3xl font-semibold text-white"><?= e($pool['name'] ?? 'Pool') ?></h1>
        <p class="text-slate-300">
          <?= strtoupper(e((string) ($pool['coin'] ?? ''))) ?>
          <?php if ($coin): ?>
            &middot; <?= e($coin['algorithm'] ?? '') ?> &middot; <?= e($coin['summary'] ?? '') ?>
          <?php endif; ?>
        </p>
      </div>
      <a
        href="<?= e($pool['homepage'] ?? '#') ?>"
        target="_blank"
        rel="noopener"
        class="inline-flex items-center gap-2 rounded-full bg-lime-400 px-5 py-2 text-sm font-semibold text-slate-950 hover:bg-lime-300"
      >
        Visit pool site →
      </a>
    </div>
  </header>

  <section class="grid gap-6 lg:grid-cols-3">
    <div class="rounded-3xl border border-slate-800 bg-slate-900/60 p-6">
      <h2 class="text-sm font-semibold uppercase tracking-wide text-lime-300">Live Metrics</h2>
      <dl class="mt-4 space-y-3 text-sm text-slate-300">
        <div class="flex justify-between text-base text-white">
          <dt>Hashrate</dt>
          <dd><?= e($pool['status']['hashrate'] ?? 'N/A') ?></dd>
        </div>
        <div class="flex justify-between">
          <dt>Miners online</dt>
          <dd><?= e($pool['status']['miners'] ?? '—') ?></dd>
        </div>
        <div class="flex justify-between">
          <dt>Last block</dt>
          <dd><?= e($pool['status']['last_block'] ?? '—') ?></dd>
        </div>
        <div class="flex justify-between">
          <dt>Updated</dt>
          <dd><?= e($pool['status']['last_updated'] ?? '—') ?></dd>
        </div>
      </dl>
      <p class="mt-4 text-xs text-slate-500">
        Metrics refresh periodically. If an API is unavailable the pool may display stale data — check the official site for the latest status.
      </p>
    </div>

    <div class="rounded-3xl border border-slate-800 bg-slate-900/60 p-6 lg:col-span-2">
      <h2 class="text-sm font-semibold uppercase tracking-wide text-lime-300">Connection Info</h2>
      <div class="mt-4 grid gap-4 text-sm text-slate-300 md:grid-cols-2">
        <div>
          <dt class="space-y-1">
            <p class="text-xs uppercase tracking-wide text-slate-500">Stratum URL</p>
            <pre class="overflow-x-auto rounded-xl border border-slate-800 bg-slate-950 px-4 py-3 text-sm text-lime-200"><?= e($pool['connection']['stratum'] ?? 'stratum+tcp://example.com:3333') ?></pre>
          </dt>
        </div>
        <div>
          <p class="text-xs uppercase tracking-wide text-slate-500">Example command</p>
          <pre class="overflow-x-auto rounded-xl border border-slate-800 bg-slate-950 px-4 py-3 text-xs text-lime-200"><?= e($pool['connection']['example'] ?? 'xmrig -o stratum+tcp://example.com:3333 -u YOUR_WALLET -p x') ?></pre>
        </div>
      </div>
      <div class="mt-6 grid gap-4 md:grid-cols-2">
        <div class="rounded-2xl border border-slate-800 bg-slate-950/60 p-4">
          <h3 class="text-sm font-semibold text-white">Payout & Fees</h3>
          <dl class="mt-3 space-y-2 text-sm text-slate-300">
            <div class="flex justify-between">
              <dt>Fee</dt>
              <dd><?= e($pool['fee'] ?? '—') ?></dd>
            </div>
            <div class="flex justify-between">
              <dt>Payout scheme</dt>
              <dd><?= e($pool['payout_scheme'] ?? '—') ?></dd>
            </div>
            <div class="flex justify-between">
              <dt>Minimum payout</dt>
              <dd><?= e($pool['min_payout'] ?? '—') ?></dd>
            </div>
          </dl>
        </div>
        <div class="rounded-2xl border border-slate-800 bg-slate-950/60 p-4">
          <h3 class="text-sm font-semibold text-white">Support & Communities</h3>
          <ul class="mt-3 space-y-2 text-sm text-lime-300">
            <?php foreach ($pool['links'] ?? [] as $label => $url): ?>
              <li>
                <a href="<?= e($url) ?>" target="_blank" rel="noopener" class="hover:text-lime-200">
                  <?= e(ucfirst((string) $label)) ?> →
                </a>
              </li>
            <?php endforeach; ?>
            <?php if (empty($pool['links'])): ?>
              <li class="text-slate-400">No social links submitted yet.</li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
</article>

