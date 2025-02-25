<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

trait HasDigitGroupSeparator
{
    protected string $digitGroupSeparator = ',';



    public function digitGroupSeparator(string $digitGroupSeparator): static
    {
        $this->digitGroupSeparator = $digitGroupSeparator;

        return $this;
    }

    public function getDigitGroupSeparator(): string
    {
        return $this->digitGroupSeparator;
    }

}
