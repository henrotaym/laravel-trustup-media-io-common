<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Providers;

use Henrotaym\LaravelTrustupMediaIoCommon\Package;
use Henrotaym\LaravelTrustupMediaIoCommon\Models\Conversion;
use Henrotaym\LaravelTrustupMediaIoCommon\Models\StorableMedia;
use Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media\GetMediaRequest;
use Henrotaym\LaravelTrustupMediaIoCommon\Requests\Media\StoreMediaRequest;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\ConversionContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\StorableMediaContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Transformers\Models\ConversionTransformer;
use Henrotaym\LaravelTrustupMediaIoCommon\Transformers\Models\StorableMediaTransformer;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\GetMediaRequestContract;
use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\StoreMediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Transformers\Requests\Media\GetMediaRequestTransformer;
use Henrotaym\LaravelTrustupMediaIoCommon\Transformers\Requests\Media\StoreMediaRequestTransformer;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Models\ConversionTransformerContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Models\StorableMediaTransformerContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media\GetMediaRequestTransformerContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media\StoreMediaRequestTransformerContract;

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
        $this->app->bind(ConversionContract::class, Conversion::class);
        $this->app->bind(ConversionTransformerContract::class, ConversionTransformer::class);
    }

    protected function addToBoot(): void
    {
        //
    }
}