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

    /** @return array<MediaConversions> */
    public function getConversions(): array
    {
        switch ($this):
            case self::IMAGES:
                return MediaConversions::cases();
            default:
                return [];
        endswitch;
    }

    public function hasConversions(): bool
    {
        return count($this->getConversions()) > 0;
    }

    /** @return array<MediaMimeType> */
    public function getMimeTypes(): array
    {
        return array_filter(
            MediaMimeType::cases(),
            fn (MediaMimeType $mimeType) => $mimeType->getCollection() === $this
        );
    }
}