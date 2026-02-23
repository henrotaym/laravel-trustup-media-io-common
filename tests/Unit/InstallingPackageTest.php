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
use PHPUnit\Framework\Attributes\Test;

class InstallingPackageTest extends TestCase
{
    use InstallPackageTest;

    #[Test]
    public function resolving_contracts(): void
    {
        $this->assertInstanceOf(StorableMediaContract::class, $this->app->make(StorableMediaContract::class));
        $this->assertInstanceOf(GetMediaRequestContract::class, $this->app->make(GetMediaRequestContract::class));
        $this->assertInstanceOf(StoreMediaRequestContract::class, $this->app->make(StoreMediaRequestContract::class));
        $this->assertInstanceOf(DestroyMediaRequestContract::class, $this->app->make(DestroyMediaRequestContract::class));
        $this->assertInstanceOf(StorableMediaTransformerContract::class, $this->app->make(StorableMediaTransformerContract::class));
        $this->assertInstanceOf(GetMediaRequestTransformerContract::class, $this->app->make(GetMediaRequestTransformerContract::class));
        $this->assertInstanceOf(StoreMediaRequestTransformerContract::class, $this->app->make(StoreMediaRequestTransformerContract::class));
        $this->assertInstanceOf(DestroyMediaRequestTransformerContract::class, $this->app->make(DestroyMediaRequestTransformerContract::class));
    }
}
