<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

use Binsarjr\FilamentAutonumeric\Enum\DigitalGroupSpacing;

trait HasDigitalGroupSpacing
{



    protected DigitalGroupSpacing | string $digitalGroupSpacing = DigitalGroupSpacing::Three;

    public function digitalGroupSpacing(DigitalGroupSpacing | string $digitalGroupSpacing): static
    {
        $this->digitalGroupSpacing = $digitalGroupSpacing;

        return $this;
    }

    public function getDigitalGroupSpacing(): string
    {
        if (is_string($this->digitalGroupSpacing)) {
            return $this->digitalGroupSpacing;
        }

        return $this->digitalGroupSpacing->value;
    }
}
