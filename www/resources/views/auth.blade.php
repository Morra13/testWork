<div id="authDarkening">
    <div class="add__wrapper_popup" id="authWrapperPopup">
        <form method="post" action="{{ route(\App\Http\Controllers\Auth\AuthController::ROUTE_AUTH) }}" class="add__form flex">
            @csrf
            <button type="button" class="btn-reset" id="buttonAuthExit">
                <img src="{{ asset('storage') }}/img/exit.svg" alt="{{ __('main.exit') }}" class="auth__exit">
            </button>
            <h2 class="add__title">{{ __('main.auth') }}</h2>
            <span style="color: red" id="mainAuthError"></span>
            <label for="emailAuth" class="auth__label">{{ __('main.email') }}</label>
            <input type="text" class="auth__input input-reset" id="emailAuth" name="email">
            <span style="color: red" id="emailAuthError"></span>
            <label for="passwordAuth" class="auth__label">{{ __('main.password') }}</label>
            <input type="password" class="auth__input input-reset" id="passwordAuth" name="password" autocomplete="on">
            <span style="color: red" id="passwordAuthError"></span>
            <div>
                <button type="submit" class="add__btn btn-reset">{{ __('main.auth') }}</button>
            </div>
        </form>
    </div>
</div>
