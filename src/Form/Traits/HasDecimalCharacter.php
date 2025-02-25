<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

trait HasDecimalCharacter
{

    protected string $decimalCharacter = '.';
    public function decimalCharacter(string $decimalCharacter): static
    {
        $this->decimalCharacter = $decimalCharacter;

        return $this;
    }

    public function getDecimalCharacter(): string
    {
        return $this->decimalCharacter;
    }
}
