<?php

namespace App\CS\Pages;
use Closure;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Route;
use Artificertech\FilamentMultiContext\Concerns\ContextualPage;
use Filament\Pages\Page;

class Dashboard extends Page
{
    use ContextualPage;
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?int $navigationSort = -2;

    protected static string $view = 'filament::pages.dashboard';

    protected static function getNavigationLabel(): string
    {
        return static::$navigationLabel ?? static::$title ?? __('filament::pages/dashboard.title');
    }

    public static function getRoutes(): Closure
    {
        return function () {
            Route::get('/', static::class)->name(static::getSlug());
        };
    }

    protected function getWidgets(): array
    {
        return Filament::getWidgets();
    }

    protected function getColumns(): int | array
    {
        return 2;
    }

    protected function getTitle(): string
    {
        return static::$title ?? __('filament::pages/dashboard.title');
    }
}
