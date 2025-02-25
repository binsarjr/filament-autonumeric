@php
    use Filament\Forms\Components\TextInput\Actions\HidePasswordAction;
    use Filament\Forms\Components\TextInput\Actions\ShowPasswordAction;

    $extraAlpineAttributes = $getExtraAlpineAttributes();
    $hasInlineLabel = $hasInlineLabel();
    $id = $getId();
    $isConcealed = $isConcealed();
    $isDisabled = $isDisabled();
    $isPrefixInline = $isPrefixInline();
    $isSuffixInline = $isSuffixInline();
    $prefixActions = $getPrefixActions();
    $prefixIcon = $getPrefixIcon();
    $prefixLabel = $getPrefixLabel();
    $suffixActions = $getSuffixActions();
    $suffixIcon = $getSuffixIcon();
    $suffixLabel = $getSuffixLabel();
    $statePath = $getStatePath();

    $xData=null;



@endphp

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
    :has-inline-label="$hasInlineLabel"
>
    <x-slot
        name="label"
        @class([
            'sm:pt-1.5' => $hasInlineLabel,
        ])
    >
        {{ $getLabel() }}
    </x-slot>

    <x-filament::input.wrapper
        :disabled="$isDisabled"
        :inline-prefix="$isPrefixInline"
        :inline-suffix="$isSuffixInline"
        :prefix="$prefixLabel"
        :prefix-actions="$prefixActions"
        :prefix-icon="$prefixIcon"
        :prefix-icon-color="$getPrefixIconColor()"
        :suffix="$suffixLabel"
        :suffix-actions="$suffixActions"
        :suffix-icon="$suffixIcon"
        :suffix-icon-color="$getSuffixIconColor()"
        :valid="! $errors->has($statePath)"
        :x-data="$xData"
        :attributes="
            \Filament\Support\prepare_inherited_attributes($getExtraAttributeBag())
                ->class(['fi-fo-text-input overflow-hidden'])
        "
    >
        <x-filament::input
            :attributes="
                \Filament\Support\prepare_inherited_attributes($getExtraInputAttributeBag())
                    ->merge($extraAlpineAttributes, escape: false)
                    ->merge([
                        'autofocus' => $isAutofocused(),
                        'disabled' => $isDisabled,
                        'id' => $id,
                        'inlinePrefix' => $isPrefixInline && (count($prefixActions) || $prefixIcon || filled($prefixLabel)),
                        'inlineSuffix' => $isSuffixInline && (count($suffixActions) || $suffixIcon || filled($suffixLabel)),
                        'placeholder' => $getPlaceholder(),
                        'readonly' => $isReadOnly(),
                        'required' => $isRequired() && (! $isConcealed),
                        $applyStateBindingModifiers('wire:model') => $statePath,
                    ], escape: false)
                    ->class([
                    ])
            "

            x-init="
                    new window.AutoNumeric($el, {
                        allowDecimalPadding: {{ json_encode($getAllowDecimalPadding()) }},
                        alwaysAllowDecimalCharacter: {{ json_encode($getAlwaysAllowDecimalCharacter()) }},
                        caretPositionOnFocus: {{ json_encode($getCaretPositionOnFocus()) }},
                        currencySymbol: {{ json_encode($getCurrencySymbol()) }},
                        currencySymbolPlacement: {{ json_encode($getCurrencySymbolPlacement()) }},
                        decimalCharacter: {{ json_encode($getDecimalCharacter()) }},
                        decimalCharacterAlternative: {{ json_encode($getDecimalCharacterAlternative()) }},
                        decimalPlaces: {{ json_encode($getDecimalPlaces()) }},
                        decimalPlacesRawValue: {{ json_encode($getDecimalPlacesRawValue()) }},
{{--                        decimalPlacesShownOnBlur: {{ json_encode($getDecimalPlacesShownOnBlur()) }},--}}
{{--                        decimalPlacesShownOnFocus: {{ json_encode($getDecimalPlacesShownOnFocus()) }},--}}
                        digitalGroupSpacing: {{ json_encode($getDigitalGroupSpacing()) }},
                        digitGroupSeparator: {{ json_encode($getDigitGroupSeparator()) }},
                        unformatOnSubmit: {{ json_encode($getUnformatOnSubmit()) }},
                    })
                "

        />
    </x-filament::input.wrapper>
</x-dynamic-component>
