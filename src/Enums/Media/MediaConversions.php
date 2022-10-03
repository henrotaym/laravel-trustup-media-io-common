<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Enums\Media;

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

    public function getWidth(): int
    {
        switch ($this):
            case self::HEADER:
                return 1920;

            case self::EXTRALARGE:
                return 1280;

            case self::LARGE:
                return 1024;
            
            case self::MEDIUM:
                return 700;

            case self::SMALL:
                return 450;

            case self::EXTRASMALL:
                return 300;

            case self::THUMBNAIL:
                return 150;


            case self::BLUR:
                return 50;
        endswitch;
    }

    public function getHeight(): int
    {
        switch ($this):
            case self::HEADER:
                return 1920;

            case self::EXTRALARGE:
                return 1280;

            case self::LARGE:
                return 1024;
            
            case self::MEDIUM:
                return 700;

            case self::SMALL:
                return 450;

            case self::EXTRASMALL:
                return 300;

            case self::THUMBNAIL:
                return 150;


            case self::BLUR:
                return 50;
        endswitch;
    }

    public function getSharpen(): ?int
    {
        switch ($this):
            case self::BLUR:
                return null;

            default:
                return 10;
        endswitch;
    }

    public function getBlur(): ?int
    {
        switch ($this):
            case self::BLUR:
                return 50;

            default:
                return null;
        endswitch;
    }

    /** @return array<MediaCollections> */
    public function getCollections(): array
    {
        return collect(MediaCollections::cases())
            ->filter(fn(MediaCollections $collection) =>
                in_array($this, $collection->getConversions())
            )->all();
    }
}