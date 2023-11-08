@extends('layouts.app', ['title' => __('main.main')])

@section('content')

<div class="check__wrapper_darkening darkening">
    <div class="check__wrapper_popup wrapper__popup_visible">
        <div class="check flex">
            <a href="{{ route(App\Http\Controllers\PublicController::ROUTE_EDIT) }}" class="check__edit_link">
                <img src="{{ asset('storage') }}/img/edit.svg" alt="{{ __('main.edit') }}" class="check__edit">
            </a>
            <button type="button" class="check__delete_link btn-reset">
                <img src="{{ asset('storage') }}/img/trash.svg" alt="{{ __('main.delete') }}" class="check__delete">
            </button>
            <button type="button" class="check__exit_link btn-reset">
                <img src="{{ asset('storage') }}/img/exit.svg" alt="{{ __('main.exit') }}" class="check__exit">
            </button>
            <h2 class="check__title">{{ __('Название продукта') }}</h2>
            <div class="check__descr flex">
                <span class="check__name">{{ __('main.article') }}</span>
                <span class="check__value">{{ $arProduct->article }}</span>
            </div>
            <div class="check__descr flex">
                <span class="check__name">{{ __('main.name') }}</span>
                <span class="check__value">{{ $arProduct->name }}</span>
            </div>
            <div class="check__descr flex">
                <span class="check__name">{{ __('main.status') }}</span>
                <span class="check__value">{{ $arProduct->status }}</span>
            </div>
            <div class="check__descr flex">
                <?php
                $arrData = json_decode($arProduct->data, true);
                ?>
                <span class="check__name">{{ __('main.attributes') }}</span>
                <div>
                    @foreach($arrData as $key => $value)
                        @if(count($arrData) <= 1)
                            <span class="check__value">{{ $key . ' : ' . $value  }}</span>
                        @else
                            @foreach($value as $k => $v)
                                <span class="check__value">{{ $k . ' : ' . $v  }}</span><br>
                            @endforeach
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
