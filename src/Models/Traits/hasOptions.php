<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Models\Traits;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\Traits\HasOptionContract;

trait HasOptions
{
    protected array $options = [];

    public function getOption(string $key)
    {
        return $this->getOptionRecursively($key, $this->options);
    }

    protected function getOptionRecursively(string $key, array $options)
    {
        $explodedKey = explode('.', $key, 2);
        [ $currentKey ] = $explodedKey;
        
        if (!$value = $options[$currentKey] ?? null):
            return null;
        endif;

        if (count($explodedKey) > 1):
            [ , $nextKey ] = $explodedKey;
            return $this->getOptionRecursively($nextKey, $value);
        endif;

        return $value;
    }

    /** @return static */
    public function setOption(string $key, $value): HasOptionContract
    {
        // Losing references to model casted attribute.
        $options = $this->options;
        $this->options = $this->setOptionRecursively($key, $options, $value);

        return $this;
    }

    protected function setOptionRecursively(string $key, array &$options, $value): array
    {
        $explodedKey = explode('.', $key, 2);
        [ $currentKey ] = $explodedKey;

        if (count($explodedKey) > 1):
            [ , $nextKey ] = $explodedKey;

            if (!isset($options[$currentKey])
                || !is_array($options[$currentKey])
            ):
                $options[$currentKey] = [];
            endif;
            $this->setOptionRecursively($nextKey, $options[$currentKey], $value);
        else:
            $options[$currentKey] = $value;
        endif;

        return $options;
    }
    
    public function getOptions(): array
    {
        return $this->options;
    }

    /** @return static */
    public function setOptions(array $options): HasOptionContract
    {
        foreach ($this->getFlattenOptions($options) as $key => $value):
            $this->setOption($key, $value);
        endforeach;

        return $this;
    }

    protected function getFlattenOptions(array $options, string $key = "", array &$flatten = [], string $namespace = ""): array
    {
        $value = $key ? 
            $options[$key]
            : $options
        ;

        $currentNamespace = $namespace ?
                "$namespace.$key"
                : $key;

        if (is_array($value)):
            foreach (array_keys($value) as $innerKey):
                $this->getFlattenOptions($value, $innerKey, $flatten, $currentNamespace);
            endforeach;
        else:
            $flatten[$currentNamespace] = $value;
        endif;


        return $flatten;
    }

    /** @return static */
    public function resetOptions(): HasOptionContract
    {
        $this->options = [];

        return $this;
    }
}