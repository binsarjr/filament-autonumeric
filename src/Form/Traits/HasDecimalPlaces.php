<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

trait HasDecimalPlaces
{
    protected int $decimalPlaces = 2;

    public function decimalPlaces(int $decimalPlaces): static
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    public function getDecimalPlaces(): int
    {
        return $this->decimalPlaces;
    }
}
