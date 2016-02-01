<?php

namespace NineCells\Assets\Twbs3;

use Illuminate\Support\ServiceProvider;

class Twbs3JumboNarrowServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/resources/assets' => public_path('vendor/ninecells/assets-twbs3-jbtrn-narrow'),
        ], 'public');
    }

    public function register()
    {
        App::register(Twbs3ServiceProvider::class);
    }
}
