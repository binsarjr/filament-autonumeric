<?php

namespace Binsarjr\FilamentAutonumeric\Enum;

enum AllowDecimalPadding
{
    /**
     * Always pad decimals with zeros (ie. '12.3400')
     */
    case Always;
    /**
     * Never pad with zeros (ie. '12.34')
     */
    case Never;
    /**
     * Pad with zeroes only when there are decimals (ie. '12' and '12.3400')
     */
    case Floats;
}
