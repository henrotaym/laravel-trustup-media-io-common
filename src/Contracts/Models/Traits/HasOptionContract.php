<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\Traits;

interface HasOptionContract
{
    public function getOption(string $key);

    /** @return static */
    public function setOption(string $key, $value): HasOptionContract;
    
    public function getOptions(): array;

    /** @return static */
    public function setOptions(array $options): HasOptionContract;

    /** @return static */
    public function resetOptions(): HasOptionContract;
}