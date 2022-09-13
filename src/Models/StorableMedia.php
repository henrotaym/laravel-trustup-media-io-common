<?php
namespace Henrotaym\LaravelTrustupMediaIoCommon\Models;

use Henrotaym\LaravelTrustupMediaIoCommon\Contracts\Models\StorableMediaContract;
use Illuminate\Http\UploadedFile;
use Psr\Http\Message\StreamInterface;

class StorableMedia implements StorableMediaContract
{
    /** @var string|UploadedFile|StreamInterface */
    protected $resource;
    protected ?string $collection = null;
    protected ?string $name = null;
    protected string $type;
    protected array $customProperties = [];

    protected static string $BASE_64 = "BASE_64";
    protected static string $STREAM = "STREAM";
    protected static string $FILE = "FILE";
    protected static string $STRING = "STRING";
    protected static string $URL = "URL";
    
    /** @return string|UploadedFile|StreamInterface */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasCollection(): bool
    {
        return !!$this->collection;
    }
    
    public function getCollection(): ?string
    {
        return $this->collection;
    }

    public function hasName(): bool
    {
        return !!$this->name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function hasCustomProperties(): bool
    {
        return count($this->customProperties) > 0;
    }
    
    public function getCustomProperties(): array
    {
        return $this->customProperties;
    }

    public function isBase64(): bool
    {
        return $this->type === static::$BASE_64;
    }

    public function isFile(): bool
    {
        return $this->type === static::$FILE;
    }

    public function isStream(): bool
    {
        return $this->type === static::$STREAM;
    }

    public function isString(): bool
    {
        return $this->type === static::$STRING;
    }

    public function isUrl(): bool
    {
        return $this->type === static::$URL;
    }
    
    /**
     * @param string|UploadedFile|StreamInterface $resource
     * @return static
     */
    public function setResource($resource): StorableMediaContract
    {
        $this->resource = $resource;

        return $this;
    }
    
    /** @return static */
    public function setCollection(?string $collection = null): StorableMediaContract
    {
        $this->collection = $collection;

        return $this;
    }
    
    /** @return static */
    public function setName(?string $name): StorableMediaContract
    {
        $this->name = $name;

        return $this;
    }

    /** @return static */
    public function setCustomProperties(array $customProperties): StorableMediaContract
    {
        $this->customProperties = $customProperties;

        return $this;
    }

    /** @return static */
    public function setAsBase64(): StorableMediaContract
    {
        $this->type = static::$BASE_64;

        return $this;
    }

    /** @return static */
    public function setAsFile(): StorableMediaContract
    {
        $this->type = static::$FILE;

        return $this;
    }

    /** @return static */
    public function setAsStream(): StorableMediaContract
    {
        $this->type = static::$STREAM;

        return $this;
    }

    /** @return static */
    public function setAsString(): StorableMediaContract
    {
        $this->type = static::$STRING;

        return $this;
    }

    /** @return static */
    public function setAsUrl(): StorableMediaContract
    {
        $this->type = static::$URL;

        return $this;
    }
}