@extends('layouts.app', ['title' => __('main.addProduct')])

@section('content')
    <form action="/" class="add__form flex">
        <img src="{{ asset('storage') }}/img/exit.svg" alt="{{ __('main.exit') }}" class="add__exit">
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
            <div id="attributes"></div>
            <a href="#" onclick="addDiv()" class="add__link">{{ __('main.addAttribute') }}</a>
        </div>
        <div>
            <button class="add__btn btn-reset">{{ __('main.add') }}</button>
        </div>
    </form>
    <script>
        let i = 0;
        function addDiv() {
            i++;
            var newdiv = document.createElement("div");
            newdiv.innerHTML = "<div class='add__attributes flex' id='attributes"+i+"'><div class='add__name flex'><label for='name"+i+"' class='add__label'>{{ __('main.name') }}</label><input type='text' class='add__input add__input_attributes input-reset' id='name"+i+"'></div><div class='add__value flex'><label for='value"+i+"' class='add__label'>{{ __('main.value') }}</label><input type='text' class='add__input add__input_attributes input-reset' id='value"+i+"'></div><a href='#' onclick='deleteDiv(attributes"+i+")' class='add__trash'><img src='{{ asset('storage') }}/img/trash.svg' alt='{{ __('main.delete') }}' class='add__trash_img'></a></div>";
            document.getElementById("attributes").appendChild(newdiv);
            return false;
        }

        function deleteDiv(div) {
            div.remove()
            return false;
        }
    </script>
@endsection
