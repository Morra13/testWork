@extends('layouts.app', ['title' => __('main.main')])

@section('content')

<div class="container">
    @include('layouts.nav')
    <header class="section header">
        <div class="header__container flex">
            <nav class="header__nav">
                <ul class="header__list list-reset">
                    <li class="header__item">
                        {{ __('main.products') }}
                    </li>
                </ul>
            </nav>
            <div>
                @if(auth()->user())
                    <span class="header__auth">{{ auth()->user()->name }}</span>
                    <span class="header__auth" style="color: red">{{ auth()->user()->role }}</span>
                    <a href="{{ route(\App\Http\Controllers\Auth\RegisterController::ROUTE_CHANGE_ROLE) }}" class="auth__btn">{{ __('main.be') .' ' . __('main.'. (auth()->user()->isAdmin() ? 'user' : 'admin')) }}</a>
                    <a href="{{ route(\App\Http\Controllers\Auth\AuthController::ROUTE_LOGOUT) }}" class="auth__btn">{{ __('main.logout') }}</a>
                @else
                    <a href="{{route(\App\Http\Controllers\PublicController::ROUTE_AUTH)}}" class="auth__btn" id="buttonAuth">{{ __('main.auth') }}</a>
                    <a href="{{route(\App\Http\Controllers\PublicController::ROUTE_REGISTER)}}" class="auth__btn" id="buttonReg">{{ __('main.register') }}</a>
                @endif
            </div>
        </div>
    </header>
    <main class="main">
        <section class="section content">
            <div class="content__container flex">
                <div class="content__left">
                    <table class="content__table">
                        <thead class="content__head">
                            <tr class="content__head_items">
                                <th class="content__head_item">{{ __('main.article') }}</th>
                                <th class="content__head_item">{{ __('main.name') }}</th>
                                <th class="content__head_item">{{ __('main.status') }}</th>
                                <th class="content__head_item">{{ __('main.attributes') }}</th>
                            </tr>
                        </thead>
                        <tbody class="content__body">
                        @foreach($arProducts as $arProduct)
                            @include('layouts.product', ['arProduct' => $arProduct])
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="content__right">
                    <button class="content__btn btn-reset">{{ __('main.add') }}</button>
                </div>
            </div>
        </section>
    </main>
    @include('layouts.add')
    @include('layouts.check')
    @include('layouts.edit')
</div>

@endsection
