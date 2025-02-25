<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

trait HasUnformatOnSubmit
{
    protected ?bool $unformatOnSubmit = false;

    public function unformatOnSubmit(bool $unformatOnSubmit = true): static
    {
        $this->unformatOnSubmit = $unformatOnSubmit;

        return $this;
    }

    public function getUnformatOnSubmit(): bool
    {
        return $this->unformatOnSubmit ?? false;
    }
}
