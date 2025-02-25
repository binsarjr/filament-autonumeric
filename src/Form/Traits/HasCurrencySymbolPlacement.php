<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

use Binsarjr\FilamentAutonumeric\Enum\CurrencySymbolPlacement;

trait HasCurrencySymbolPlacement
{

    protected CurrencySymbolPlacement | string $currencySymbolPlacement = CurrencySymbolPlacement::Prefix;

    public function currencySymbolPlacement(CurrencySymbolPlacement | string $currencySymbolPlacement): static
    {
        $this->currencySymbolPlacement = $currencySymbolPlacement;

        return $this;
    }

    public function getCurrencySymbolPlacement(): string
    {
        if (is_string($this->currencySymbolPlacement)) {
            return $this->currencySymbolPlacement;
        }

        return $this->currencySymbolPlacement->value;
    }

}
