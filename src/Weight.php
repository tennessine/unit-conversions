<?php

namespace Spatie\UnitConversions;

class Weight
{
<<<<<<< HEAD
    /** @var float */
=======
>>>>>>> 7896a69599f1687ddca97e4c74c9d7d803842b7c
    private float $kilograms;

    public static function fromKilograms(float $kilograms): self
    {
<<<<<<< HEAD
        $myArray = [
            'test',
            'test2',
        ];


=======
>>>>>>> 7896a69599f1687ddca97e4c74c9d7d803842b7c
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }
}
