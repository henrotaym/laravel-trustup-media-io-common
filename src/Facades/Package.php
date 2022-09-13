<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Facades;

use Henrotaym\LaravelTrustupTaskIoCommon\Package as Underlying;
use Henrotaym\LaravelPackageVersioning\Facades\Abstracts\VersionablePackageFacade;

class Package extends VersionablePackageFacade
{
    public static function getPackageClass(): string
    {
        return Underlying::class;
    }
}