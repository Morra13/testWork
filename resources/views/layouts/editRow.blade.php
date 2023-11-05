<div class='add__attributes flex' id='attributes0'>
    <div class='add__name flex'>
        <label for='name0' class='add__label'>
            {{ __('main.name') }}
        </label>
        <input type='text' class='add__input add__input_attributes input-reset' id='name0'>
    </div>
    <div class='add__value flex'>
        <label for='value0' class='add__label'>
            {{ __('main.value') }}
        </label>
        <input type='text' class='add__input add__input_attributes input-reset' id='value0'>
    </div>
    <a href='#' onclick='deleteDiv(attributes0)' class='add__trash'>
        <img src='{{ asset('storage') }}/img/trash.svg' alt='{{ __('main.delete') }}' class='add__trash_img'>
    </a>
</div>
