<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Providers;

use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;

class LaravelTrustupMediaIoCommonServiceProvider extends VersionablePackageServiceProvider
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }

    protected function addToRegister(): void
    {
        $this->app->bind(StorableMediaContract::class, StorableMedia::class);
        $this->app->bind(GetMediaRequestContract::class, GetMediaRequest::class);
        $this->app->bind(StoreMediaRequestContract::class, StoreMediaRequest::class);
        $this->app->bind(StorableMediaTransformerContract::class, StorableMediaTransformer::class);
        $this->app->bind(GetMediaRequestTransformerContract::class, GetMediaRequestTransformer::class);
        $this->app->bind(StoreMediaRequestTransformerContract::class, StoreMediaRequestTransformer::class);
    }

    protected function addToBoot(): void
    {
        //
    }
}