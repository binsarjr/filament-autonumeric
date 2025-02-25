<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

trait HasDecimalPlacesRawValue
{
    protected ?int $decimalPlacesRawValue = null;

    public function decimalPlacesRawValue(int $decimalPlacesRawValue): static
    {
        $this->decimalPlacesRawValue = $decimalPlacesRawValue;

        return $this;
    }

    public function getDecimalPlacesRawValue(): ?int
    {
        return $this->decimalPlacesRawValue;
    }
}
