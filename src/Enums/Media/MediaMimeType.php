<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Enums\Media;

enum MediaMimeType: string
{
    case JPEG = "image/jpeg";
    case JPG = "image/jpg";
    case PNG = "image/png";
    case GIF = "image/gif";
    case SVG = "image/svg+xml";
    case MP4 = "video/mp4";
    case MOV = "video/quicktime";
    case PDF = "application/pdf";
    case DOC = "application/msword";
    case DOCX = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";
    case XLSX = "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet";
    case XLS = "application/vnd.ms-excel";
    case CSV = "text/csv";

    public function getCollection(): MediaCollections
    {
        switch ($this):
            case self::JPEG
                || self::JPG
                || self::PNG
                || self::GIF
                || self::SVG
            :
                return MediaCollections::IMAGES;
            case self::MP4
                || self::MOV
            :
                return MediaCollections::VIDEOS;
            default:
                return MediaCollections::FILES;
        endswitch;
    }
}