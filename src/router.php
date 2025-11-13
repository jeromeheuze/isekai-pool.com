<?php
declare(strict_types=1);

require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/repositories.php';

final class Router
{
    /** @var array<string, callable> */
    private array $routes;

    public function __construct()
    {
        $this->routes = [
            '/' => fn (): string => $this->renderHome(),
            '/coins' => fn (): string => $this->renderCoins(),
            '/pools' => fn (): string => $this->renderPools(),
            '/guides' => fn (): string => $this->renderGuides(),
        ];
    }

    public function dispatch(string $path): string
    {
        $path = rtrim($path, '/') ?: '/';

        if (isset($this->routes[$path])) {
            return ($this->routes[$path])();
        }

        if (preg_match('#^/pools/([\w\-]+)$#', $path, $matches)) {
            return $this->renderPoolDetail($matches[1]);
        }

        http_response_code(404);
        return render('404', [
            'title' => 'Page not found',
        ]);
    }

    private function renderHome(): string
    {
        $featuredCoins = array_slice(get_coins(), 0, 6);
        $featuredPools = array_slice(get_pools(), 0, 6);

        return render('home', [
            'title' => 'Isekai CPU Mining',
            'featuredCoins' => $featuredCoins,
            'featuredPools' => $featuredPools,
        ]);
    }

    private function renderCoins(): string
    {
        return render('coins/index', [
            'title' => 'CPU Coins',
            'coins' => get_coins(),
        ]);
    }

    private function renderPools(): string
    {
        return render('pools/index', [
            'title' => 'CPU Mining Pools',
            'pools' => get_pools(),
        ]);
    }

    private function renderGuides(): string
    {
        return render('guides/index', [
            'title' => 'Guides & Resources',
        ]);
    }

    private function renderPoolDetail(string $slug): string
    {
        $pool = get_pool($slug);
        if (!$pool) {
            http_response_code(404);
            return render('404', [
                'title' => 'Pool not found',
            ]);
        }

        $coin = get_coin($pool['coin'] ?? '');

        return render('pools/show', [
            'title' => $pool['name'] ?? 'Pool',
            'pool' => $pool,
            'coin' => $coin,
        ]);
    }
}

