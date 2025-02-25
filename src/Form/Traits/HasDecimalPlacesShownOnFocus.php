<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

trait HasDecimalPlacesShownOnFocus
{
    protected ?int $decimalPlacesShownOnFocus = null;

    public function decimalPlacesShownOnFocus(?int $decimalPlacesShownOnFocus): static
    {
        $this->decimalPlacesShownOnFocus = $decimalPlacesShownOnFocus;

        return $this;
    }

    public function getDecimalPlacesShownOnFocus(): ?int
    {
        return $this->decimalPlacesShownOnFocus;
    }
}
