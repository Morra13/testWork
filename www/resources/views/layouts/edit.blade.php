@extends('layouts.app', ['title' => __('main.edit')])

@section('content')
<div class="edit__wrapper_darkening darkening">
    <div class="edit__wrapper_popup wrapper__popup_visible">
        <form method="post" action="{{ route(\App\Http\Controllers\Api\ProductController::ROUTE_EDIT) }}" class="add__form flex">
            <button type="button" class="edit__exit_link btn-reset">
                <img src="{{ asset('storage') }}/img/exit.svg" alt="{{ __('main.exit') }}" class="add__exit">
            </button>
            <h2 class="add__title">{{ __('main.edit') . ' ' . $arProduct->name }}</h2>
            <input type="hidden" name="id" value="{{ $arProduct->id }}">
            <label for="article" class="add__label">{{ __('main.article') }}</label>
            <input type="text" class="add__input input-reset" id="article" name="article" value="{{ $arProduct->article }}">
            <label for="name" class="add__label">{{ __('main.name') }}</label>
            <input type="text" class="add__input input-reset" id="name" name="name" value="{{ $arProduct->name }}">
            <label for="status" class="add__label flex">{{ __('main.status') }}</label>
            <div class="dropdown">
                <button class="dropdown__button" name="status" type="button">{{ __('main.' . $arProduct->status) }}</button>
                <ul class="dropdown__list list-reset">
                    <li class="dropdown__list_item" data-value="available">{{ __('main.available') }}</li>
                    <li class="dropdown__list_item" data-value="unavailable">{{ __('main.unavailable') }}</li>
                </ul>
                <input type="text" name="status" value="available" class="dropdown__input_hidden">
            </div>
            <h3 class="add__subtitle">{{ __('main.attributes') }}</h3>
            <div class="add__link_div">
                <div id="attributes">
                    @foreach($arProduct->data as $key => $value)
                        @foreach($value as $k => $v)
                            @include('layouts.editRow', ['attributeId' => $key ,'name' => $k, 'value' => $v])
                        @endforeach
                    @endforeach
                </div>
                <input type="hidden" id="inputArrKeys" name="inputArrKeys" value="{{ $arProduct->keys }}">
                <button type="button" onclick="addDiv()" class="add__link btn-reset">{{ __('main.addAttribute') }}</button>
            </div>
            <div>
                <button class="add__btn btn-reset">{{ __('main.save') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
