<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Tests\Unit;

use Henrotaym\LaravelTrustupMediaIoCommon\Tests\TestCase;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\MediaContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\ConversionContract;
use Henrotaym\LaravelPackageVersioning\Testing\Traits\InstallPackageTest;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\StorableMediaContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Endpoints\MediaEndpointContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\StoreMediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\GetMediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Responses\Media\GetMediaResponseContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Responses\Media\StoreMediaResponseContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Models\MediaTransformerContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Models\ConversionTransformerContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Models\StorableMediaTransformerContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media\GetMediaRequestTransformerContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media\StoreMediaRequestTransformerContract;

class InstallingPackageTest extends TestCase
{
    use InstallPackageTest;

    /** @test */
    public function gettingMediaClient()
    {
        dd(
            $this->app->make(MediaEndpointContract::class),
            $this->app->make(ConversionContract::class),
            $this->app->make(MediaContract::class),
            $this->app->make(StorableMediaContract::class),
            $this->app->make(GetMediaRequestContract::class),
            $this->app->make(StoreMediaRequestContract::class),
            $this->app->make(GetMediaResponseContract::class),
            $this->app->make(StoreMediaResponseContract::class),
            $this->app->make(ConversionTransformerContract::class),
            $this->app->make(MediaTransformerContract::class),
            $this->app->make(StorableMediaTransformerContract::class),
            $this->app->make(GetMediaRequestTransformerContract::class),
            $this->app->make(StoreMediaRequestTransformerContract::class),
        );
    }
}