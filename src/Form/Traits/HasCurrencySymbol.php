<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

trait HasCurrencySymbol
{
    protected string $currencySymbol = '';

    public function currencySymbol(string $currencySymbol): static
    {
        $this->currencySymbol = $currencySymbol;

        return $this;
    }

    public function getCurrencySymbol(): string
    {
        return $this->currencySymbol;
    }
}
