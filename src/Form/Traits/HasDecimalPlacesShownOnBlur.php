<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

trait HasDecimalPlacesShownOnBlur
{
    protected ?int $decimalPlacesShownOnBlur = null;

    public function decimalPlacesShownOnBlur(?int $decimalPlacesShownOnBlur): static
    {
        $this->decimalPlacesShownOnBlur = $decimalPlacesShownOnBlur;

        return $this;
    }

    public function getDecimalPlacesShownOnBlur(): ?int
    {
        return $this->decimalPlacesShownOnBlur;
    }
}
