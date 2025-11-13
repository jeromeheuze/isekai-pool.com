<?php
declare(strict_types=1);

/**
 * @return array<int, array<string, mixed>>
 */
function get_coins(): array
{
    static $coins;
    if ($coins === null) {
        $coinsPath = project_path('storage/data/coins.json');
        $coins = file_exists($coinsPath)
            ? json_decode((string) file_get_contents($coinsPath), true, flags: JSON_THROW_ON_ERROR)
            : [];
    }

    return $coins;
}

/**
 * @return array<int, array<string, mixed>>
 */
function get_pools(): array
{
    static $pools;
    if ($pools === null) {
        $poolsPath = project_path('storage/data/pools.json');
        $pools = file_exists($poolsPath)
            ? json_decode((string) file_get_contents($poolsPath), true, flags: JSON_THROW_ON_ERROR)
            : [];
    }

    return $pools;
}

/**
 * @return array<string, mixed>|null
 */
function get_coin(string $slug): ?array
{
    foreach (get_coins() as $coin) {
        if (($coin['slug'] ?? '') === $slug) {
            return $coin;
        }
    }

    return null;
}

/**
 * @return array<string, mixed>|null
 */
function get_pool(string $slug): ?array
{
    foreach (get_pools() as $pool) {
        if (($pool['slug'] ?? '') === $slug) {
            return $pool;
        }
    }

    return null;
}

