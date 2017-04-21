<?php

namespace WTG\Favorites\Providers;

use WTG\Favorites\Models\Favorite;
use Illuminate\Support\ServiceProvider;
use WTG\Favorites\Interfaces\FavoriteInterface;

/**
 * Favorites service provider
 *
 * @package     WTG\Favorites
 * @subpackage  Providers
 * @author      Thomas Wiringa <thomas.wiringa@gmail.com>
 */
class FavoritesServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../Migrations');

        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'favorites');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FavoriteInterface::class, Favorite::class);
    }
}
