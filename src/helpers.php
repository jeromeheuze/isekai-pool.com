<?php
declare(strict_types=1);

function project_path(string $path = ''): string
{
    return rtrim(__DIR__ . '/..' . ($path ? '/' . ltrim($path, '/') : ''), '/');
}

function render(string $view, array $params = []): string
{
    $viewPath = project_path("views/{$view}.php");
    if (!is_file($viewPath)) {
        throw new RuntimeException("View {$view} not found.");
    }

    extract($params, EXTR_SKIP);

    ob_start();
    require $viewPath;
    $content = ob_get_clean() ?: '';

    $layoutPath = project_path('views/layout.php');
    if (!is_file($layoutPath)) {
        throw new RuntimeException('Layout view not found.');
    }

    ob_start();
    require $layoutPath;
    return ob_get_clean() ?: '';
}

function asset(string $path): string
{
    return '/assets/' . ltrim($path, '/');
}

function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

