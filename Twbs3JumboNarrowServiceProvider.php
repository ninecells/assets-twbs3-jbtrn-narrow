<?php

namespace NineCells\Assets\Twbs3;

use App;
use Illuminate\Support\ServiceProvider;

class Twbs3JumboNarrowServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'ncells');

        $this->publishes([
            __DIR__ . '/resources/assets' => public_path('vendor/ninecells/assets-twbs3-jbtrn-narrow'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/resources/views/app.blade.php'
            => resource_path('views/vendor/ncells/app.blade.php'),
        ]);
    }

    public function register()
    {
        App::register(Twbs3ServiceProvider::class);
    }
}
