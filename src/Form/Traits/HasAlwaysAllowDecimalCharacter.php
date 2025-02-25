<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

use Binsarjr\FilamentAutonumeric\Enum\AlwaysAllowDecimalCharacter;

trait HasAlwaysAllowDecimalCharacter
{
    protected AlwaysAllowDecimalCharacter | bool $alwaysAllowDecimalCharacter = AlwaysAllowDecimalCharacter::DoNotAllow;

    public function alwaysAllowDecimalCharacter(AlwaysAllowDecimalCharacter | bool $allowDecimalPadding): static
    {
        $this->alwaysAllowDecimalCharacter = $allowDecimalPadding;

        return $this;
    }

    public function getAlwaysAllowDecimalCharacter(): bool
    {
        if ($this->alwaysAllowDecimalCharacter instanceof AlwaysAllowDecimalCharacter) {
            return $this->alwaysAllowDecimalCharacter == AlwaysAllowDecimalCharacter::AlwaysAllow;
        }

        return $this->alwaysAllowDecimalCharacter;
    }
}
