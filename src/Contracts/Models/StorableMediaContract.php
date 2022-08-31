<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models;

use Illuminate\Http\UploadedFile;
use Psr\Http\Message\StreamInterface;

interface StorableMediaContract
{
    /** @return string|UploadedFile|StreamInterface */
    public function getResource();

    public function hasCollection(): bool;
    
    public function getCollection(): ?string;

    public function hasName(): bool;

    public function getName(): ?string;

    public function hasCustomProperties(): bool;
    
    public function getCustomProperties(): array;

    public function isBase64(): bool;

    public function isFile(): bool;

    public function isStream(): bool;

    public function isString(): bool;

    public function isUrl(): bool;
    
    /**
     * @param string|UploadedFile|StreamInterface $resource
     * @return static
     */
    public function setResource($resource): StorableMediaContract;
    
    /** @return static */
    public function setCollection(?string $collection = null): StorableMediaContract;
    
    /** @return static */
    public function setName(?string $name): StorableMediaContract;

    /** @return static */
    public function setCustomProperties(array $customProperties): StorableMediaContract;

    /** @return static */
    public function setAsBase64(): StorableMediaContract;

    /** @return static */
    public function setAsFile(): StorableMediaContract;

    /** @return static */
    public function setAsStream(): StorableMediaContract;

    /** @return static */
    public function setAsString(): StorableMediaContract;

    /** @return static */
    public function setAsUrl(): StorableMediaContract;
}