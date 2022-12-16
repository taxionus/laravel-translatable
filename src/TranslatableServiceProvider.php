<?php

namespace Taxionus\Translatable;

use Taxionus\LaravelPackageTools\Package;
use Taxionus\LaravelPackageTools\PackageServiceProvider;

class TranslatableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-translatable');
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(Translatable::class, fn () => new Translatable());
        $this->app->bind('translatable', Translatable::class);
    }
}
