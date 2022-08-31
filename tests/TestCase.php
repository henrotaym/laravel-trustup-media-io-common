<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Tests;

use Henrotaym\LaravelTrustupMediaIoCommon\Package;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Henrotaym\LaravelTrustupMediaIoCommon\Providers\LaravelTrustupMediaIoCommonServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }
    
    public function getServiceProviders(): array
    {
        return [
            LaravelTrustupMediaIoCommonServiceProvider::class
        ];
    }
}