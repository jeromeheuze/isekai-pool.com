<?php
/** @var array<int, array<string, mixed>> $pools */

$filterCoin = isset($_GET['coin']) ? strtolower(trim((string) $_GET['coin'])) : null;
$filteredPools = array_values(array_filter(
    $pools,
    fn (array $pool): bool => $filterCoin === null || strtolower((string) ($pool['coin'] ?? '')) === $filterCoin,
));
?>
<section class="space-y-10">
  <header class="space-y-4">
    <h1 class="text-3xl font-semibold text-white">CPU Mining Pools</h1>
    <p class="text-slate-300">
      Compare hashrate-focused communities, payout designs, and uptime. We highlight pools that publish transparent APIs and support CPU-friendly proof-of-work.
    </p>
    <form method="get" class="flex flex-wrap items-center gap-3 text-sm">
      <label class="flex items-center gap-2 rounded-full border border-slate-800 bg-slate-900 px-4 py-2">
        <span class="text-slate-400">Filter coin:</span>
        <input
          type="text"
          name="coin"
          value="<?= e($filterCoin) ?>"
          placeholder="ytn, rtm, xmr..."
          class="w-32 bg-transparent text-white focus:outline-none"
        />
      </label>
      <button class="rounded-full bg-lime-400 px-4 py-2 font-semibold text-slate-950 hover:bg-lime-300">
        Apply
      </button>
      <?php if ($filterCoin): ?>
        <a href="/pools" class="text-slate-400 hover:text-lime-200">Reset</a>
      <?php endif; ?>
    </form>
  </header>

  <div class="overflow-hidden rounded-3xl border border-slate-800 bg-slate-900/60">
    <table class="min-w-full divide-y divide-slate-800 text-sm text-slate-300">
      <thead class="bg-slate-900/80 text-xs uppercase tracking-wide text-slate-500">
        <tr>
          <th class="px-5 py-4 text-left">Pool</th>
          <th class="px-5 py-4 text-left">Coin</th>
          <th class="px-5 py-4 text-left">Region</th>
          <th class="px-5 py-4 text-left">Fee</th>
          <th class="px-5 py-4 text-left">Payout</th>
          <th class="px-5 py-4 text-left">Hashrate</th>
          <th class="px-5 py-4 text-left">Updated</th>
          <th class="px-5 py-4 text-right"></th>
        </tr>
      </thead>
      <tbody class="divide-y divide-slate-800">
        <?php foreach ($filteredPools as $pool): ?>
          <tr class="transition hover:bg-slate-900/80">
            <td class="px-5 py-4 font-semibold text-white">
              <div class="flex flex-col">
                <a href="<?= e($pool['homepage'] ?? '#') ?>" target="_blank" rel="noopener" class="hover:text-lime-300">
                  <?= e($pool['name'] ?? 'Pool') ?>
                </a>
                <?php if (!empty($pool['hashtags'])): ?>
                  <div class="mt-1 flex flex-wrap gap-2 text-xs text-slate-500">
                    <?php foreach ($pool['hashtags'] as $tag): ?>
                      <span>#<?= e($tag) ?></span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </td>
            <td class="px-5 py-4 text-slate-200">
              <?= strtoupper(e((string) ($pool['coin'] ?? ''))) ?>
            </td>
            <td class="px-5 py-4"><?= e($pool['region'] ?? 'Global') ?></td>
            <td class="px-5 py-4"><?= e($pool['fee'] ?? '—') ?></td>
            <td class="px-5 py-4"><?= e($pool['payout_scheme'] ?? '—') ?></td>
            <td class="px-5 py-4"><?= e($pool['status']['hashrate'] ?? 'N/A') ?></td>
            <td class="px-5 py-4"><?= e($pool['status']['last_updated'] ?? '—') ?></td>
            <td class="px-5 py-4 text-right">
              <a href="/pools/<?= urlencode((string) ($pool['slug'] ?? '')) ?>" class="text-lime-300 hover:text-lime-200">
                Details →
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
        <?php if (!$filteredPools): ?>
          <tr>
            <td colspan="8" class="px-5 py-10 text-center text-slate-500">
              No pools match this filter yet. <a href="/pools" class="text-lime-300 hover:text-lime-200">Clear filters</a>
              or <a href="mailto:list@isekai-pool.com" class="text-lime-300 hover:text-lime-200">submit a pool</a>.
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</section>

