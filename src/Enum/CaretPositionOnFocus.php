<?php

namespace Binsarjr\FilamentAutonumeric\Enum;

enum CaretPositionOnFocus: string
{
    case Start = 'start';
    case End = 'end';
    case DecimalLeft = 'decimalLeft';
    case DecimalRight = 'decimalRight';
    case DoNoForceCaretPosition = '';
}
