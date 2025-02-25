<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

trait HasDecimalCharacterAlternative
{
    protected ?string $decimalCharacterAlternative = null;

    public function decimalCharacterAlternative(string $decimalCharacterAlternative): static
    {
        $this->decimalCharacterAlternative = $decimalCharacterAlternative;

        return $this;
    }

    public function getDecimalCharacterAlternative(): ?string
    {
        return $this->decimalCharacterAlternative;
    }
}
