<div class='add__attributes flex' id='attributes_{{ $attributeId }}'>
    <div class='add__name flex'>
        <label for='attributeName_{{ $attributeId }}' class='add__label'>
            {{ __('main.name') }}
        </label>
        <input type='text' class='add__input add__input_attributes input-reset' id='attributeName_{{ $attributeId }}' name='attributeName_{{ $attributeId }}' value="{{ $name }}">
    </div>
    <div class='add__value flex'>
        <label for='attributeValue_{{ $attributeId }}' class='add__label'>
            {{ __('main.value') }}
        </label>
        <input type='text' class='add__input add__input_attributes input-reset' id='attributeValue_{{ $attributeId }}' name="attributeValue_{{ $attributeId }}" value="{{ $value }}">
    </div>
    <a href='#' onclick='deleteDiv(attributes_{{ $attributeId }})' class='add__trash'>
        <img src='{{ asset('storage') }}/img/trash.svg' alt='{{ __('main.delete') }}' class='add__trash_img'>
    </a>
</div>
