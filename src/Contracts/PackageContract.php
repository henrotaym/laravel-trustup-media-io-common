<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts;

use Henrotaym\LaravelPackageVersioning\Services\Versioning\Contracts\VersionablePackageContract;
use Henrotaym\LaravelContainerAutoRegister\Services\AutoRegister\Contracts\AutoRegistrableContract;

/**
 * Versioning package.
 */
interface PackageContract extends VersionablePackageContract, AutoRegistrableContract
{
    
}