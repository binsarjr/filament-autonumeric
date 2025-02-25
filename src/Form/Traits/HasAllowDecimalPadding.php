<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

use Binsarjr\FilamentAutonumeric\Enum\AllowDecimalPadding;

trait HasAllowDecimalPadding
{
    protected AllowDecimalPadding | string | bool $allowDecimalPadding = AllowDecimalPadding::Always;

    public function allowDecimalPadding(AllowDecimalPadding | string | bool $value = AllowDecimalPadding::Always): static
    {
        $this->allowDecimalPadding = $value;

        return $this;
    }

    public function getAllowDecimalPadding(): string | bool
    {
        if ($this->allowDecimalPadding instanceof AllowDecimalPadding) {
            if ($this->allowDecimalPadding === AllowDecimalPadding::Floats) {
                return 'floats';
            }

            return $this->allowDecimalPadding == AllowDecimalPadding::Always;
        }

        return $this->allowDecimalPadding;
    }
}
