<?php

namespace Spatie\UnitConversions;

class Temperature
{
    private float $celsius;

    public static function forCelsius(float $celsius)
    {
        return new static($celsius);
    }

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
