<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Tests\Unit;

use Henrotaym\LaravelTrustupMediaIoCommon\Tests\TestCase;
use Henrotaym\LaravelPackageVersioning\Testing\Traits\InstallPackageTest;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\StorableMediaContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\DestroyMediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\GetMediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Requests\Media\StoreMediaRequestContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Models\StorableMediaTransformerContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media\DestroyMediaRequestTransformerContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media\GetMediaRequestTransformerContract;
use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Transformers\Requests\Media\StoreMediaRequestTransformerContract;

class InstallingPackageTest extends TestCase
{
    use InstallPackageTest;

    /** @test */
    public function gettingMediaClient()
    {
        dd(
            $this->app->make(StorableMediaContract::class),
            $this->app->make(GetMediaRequestContract::class),
            $this->app->make(StoreMediaRequestContract::class),
            $this->app->make(DestroyMediaRequestContract::class),
            $this->app->make(StorableMediaTransformerContract::class),
            $this->app->make(GetMediaRequestTransformerContract::class),
            $this->app->make(StoreMediaRequestTransformerContract::class),
            $this->app->make(DestroyMediaRequestTransformerContract::class)
        );
    }
}