<?php

namespace Binsarjr\FilamentAutonumeric\Form\Traits;

use Binsarjr\FilamentAutonumeric\Enum\CaretPositionOnFocus;

trait HasCaretPositionOnFocus
{
    protected CaretPositionOnFocus | string | null $caretPositionOnFocus = CaretPositionOnFocus::DoNoForceCaretPosition;

    public function caretPositionOnFocus(CaretPositionOnFocus | string | null $caretPositionOnFocus): static
    {
        $this->caretPositionOnFocus = $caretPositionOnFocus;

        return $this;
    }

    public function getCaretPositionOnFocus(): ?string
    {
        if ($this->caretPositionOnFocus == CaretPositionOnFocus::DoNoForceCaretPosition) {
            return null;
        }

        if ($this->caretPositionOnFocus instanceof CaretPositionOnFocus) {
            return $this->caretPositionOnFocus->value;
        }

        return $this->caretPositionOnFocus;
    }
}
