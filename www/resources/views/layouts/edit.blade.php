<div class="edit__wrapper_darkening">
    <div class="edit__wrapper_popup">
        <form action="/" class="add__form flex">
            <button type="button" class="edit__exit_link btn-reset">
                <img src="{{ asset('storage') }}/img/exit.svg" alt="{{ __('main.exit') }}" class="add__exit">
            </button>
            <h2 class="add__title">{{ __('main.addProduct') }}</h2>
            <label for="article" class="add__label">{{ __('main.article') }}</label>
            <input type="text" class="add__input input-reset" id="article">
            <label for="name" class="add__label">{{ __('main.name') }}</label>
            <input type="text" class="add__input input-reset" id="name">
            <label for="status" class="add__label flex">{{ __('main.status') }}</label>
            <div class="dropdown">
                <button class="dropdown__button" name="status" type="button">{{ __('main.available') }}</button>
                <ul class="dropdown__list list-reset">
                    <li class="dropdown__list_item" data-value="available">{{ __('main.available') }}</li>
                    <li class="dropdown__list_item" data-value="unavailable">{{ __('main.unavailable') }}</li>
                </ul>
                <input type="text" name="status" value="available" class="dropdown__input_hidden">
            </div>
            <h3 class="add__subtitle">{{ __('main.attributes') }}</h3>
            <div class="add__link_div">
                <div id="attributes">
                    @include('layouts.editRow')
                    <input class="count" type="hidden" value="3">
                </div>
                <button type="button" onclick="addDiv()" class="add__link btn-reset">{{ __('main.addAttribute') }}</button>
            </div>
            <div>
                <button class="add__btn btn-reset">{{ __('main.add') }}</button>
            </div>
        </form>
    </div>
</div>

