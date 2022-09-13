<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\PackageContract;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\VersionablePackage;

class Package extends VersionablePackage implements PackageContract
{
    public static function prefix(): string
    {
        return "laravel_trustup_task_io_common";
    }
}