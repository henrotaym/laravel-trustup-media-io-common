<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Enums\Media;

enum MediaCollections: string
{
    case IMAGES = "images";
    case AVATAR = "avatar";
    case VIDEOS = "videos";
    case FILES = "files";

    public function getName(): string
    {
        return $this->value;
    }
}