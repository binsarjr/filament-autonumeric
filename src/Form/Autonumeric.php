<?php

namespace Binsarjr\FilamentAutonumeric\Form;

use Filament\Forms\Components\Concerns;
use Filament\Forms\Components\Contracts\HasAffixActions;
use Filament\Forms\Components\Field;
use Filament\Support\Concerns\HasExtraAlpineAttributes;

class Autonumeric extends Field implements HasAffixActions
{
    use Concerns\CanBeReadOnly;
    use Concerns\HasAffixes;
    use Concerns\HasExtraInputAttributes;
    use Concerns\HasPlaceholder;
    use Concerns\HasStep;
    use HasExtraAlpineAttributes;
    use Traits\HasAllowDecimalPadding;
    use Traits\HasAlwaysAllowDecimalCharacter;
    use Traits\HasCaretPositionOnFocus;
    use Traits\HasCurrencySymbol;
    use Traits\HasCurrencySymbolPlacement;
    use Traits\HasDecimalCharacter;
    use Traits\HasDecimalCharacterAlternative;
    use Traits\HasDecimalPlaces;
    use Traits\HasDecimalPlacesRawValue;

    //    use Traits\HasDecimalPlacesShownOnBlur;
    //    use Traits\HasDecimalPlacesShownOnFocus;
    use Traits\HasDigitalGroupSpacing;
    use Traits\HasDigitGroupSeparator;
    use Traits\HasUnformatOnSubmit;

    protected string $view = 'filament-autonumeric::autonumeric';
}
