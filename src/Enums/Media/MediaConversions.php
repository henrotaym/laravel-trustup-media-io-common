<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Enums\Media;

use Illuminate\Support\Collection;

enum MediaConversions: string
{
    case HEADER = "header";
    case EXTRALARGE = "x-large";
    case LARGE = "large";
    case MEDIUM = "medium";
    case SMALL = "small";
    case EXTRASMALL = "x-small";
    case THUMBNAIL = "thumbnail";
    case BLUR = "blur";

    public function getName(): string
    {
        return $this->value;
    }

    /**
     * Define here collections where conversions should be performed.
     * 
     * @return Collection<int, MediaCollections>
     */
    public function getCollections(): Collection
    {
        return collect([
            MediaCollections::IMAGES
        ]);
    }
}