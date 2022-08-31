<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Tests;

use Henrotaym\LaravelTrustupMediaIoCommon\Package;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Deegitalbe\ServerAuthorization\Providers\ServerAuthorizationServiceProvider;
use Henrotaym\LaravelApiClient\Providers\ClientServiceProvider;
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
            ServerAuthorizationServiceProvider::class,
            ClientServiceProvider::class,
            LaravelTrustupMediaIoCommonServiceProvider::class
        ];
    }
}