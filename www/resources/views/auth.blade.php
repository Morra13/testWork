@extends('layouts.app', ['title' => __('main.auth')])

@section('content')
    <div id="regDarkening darkening">
        <div class="add__wrapper_popup wrapper__popup_visible" id="regWrapperPopup">
            <form method="post" action="{{ route(\App\Http\Controllers\Auth\AuthController::ROUTE_AUTH) }}" class="add__form flex">
                @csrf
                <a href="{{ route(\App\Http\Controllers\PublicController::ROUTE_INDEX) }}" type="button" class="btn-reset" id="buttonRegExit">
                    <img src="{{ asset('storage') }}/img/exit.svg" alt="{{ __('main.exit') }}" class="auth__exit">
                </a>
                <h2 class="add__title">{{ __('main.auth') }}</h2>
                <label for="email" class="auth__label">{{ __('main.email') }}</label>
                <input type="email" class="auth__input input-reset" id="email" name="email">
                @error('email')
                <p style="color: red">{{ $message }}</p>
                @enderror
                <label for="password" class="auth__label">{{ __('main.password') }}</label>
                <input type="password" class="auth__input input-reset" id="password" name="password">
                @error('password')
                <p style="color: red">{{ $message }}</p>
                @enderror
                <div>
                    <button type="submit" class="add__btn btn-reset">{{ __('main.auth   ') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
