<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Tests;

use Henrotaym\LaravelTrustupTaskIoCommon\Package;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Henrotaym\LaravelTrustupTaskIoCommon\Providers\LaravelTrustupTaskIoCommonServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }
    
    public function getServiceProviders(): array
    {
        return [
            LaravelTrustupTaskIoCommonServiceProvider::class
        ];
    }
}