<div id="regDarkening">
    <div class="add__wrapper_popup" id="regWrapperPopup">
        <form method="post" action="{{ route(\App\Http\Controllers\Auth\RegisterController::ROUTE_REGISTER) }}" class="add__form flex">
            @csrf
            <a href="{{ route(\App\Http\Controllers\PublicController::ROUTE_INDEX) }}" type="button" class="btn-reset" id="buttonRegExit">
                <img src="{{ asset('storage') }}/img/exit.svg" alt="{{ __('main.exit') }}" class="auth__exit">
            </a>
            <h2 class="add__title">{{ __('main.register') }}</h2>
            <label for="nameReg" class="auth__label">{{ __('main.userName') }}</label>
            <input type="text" class="auth__input input-reset" id="nameReg" name="name">
            <span style="color: red" id="nameRegError"></span>
            <label for="emailReg" class="auth__label">{{ __('main.email') }}</label>
            <input type="email" class="auth__input input-reset" id="emailReg" name="email">
            <span style="color: red" id="emailRegError"></span>
            <label for="passwordReg" class="auth__label">{{ __('main.password') }}</label>
            <input type="password" class="auth__input input-reset" id="passwordReg" name="password">
            <span style="color: red" id="passwordRegError"></span>
            <label for="password_confirmationReg" class="auth__label">{{ __('main.passwordConfirm') }}</label>
            <input type="password" class="auth__input input-reset" id="password_confirmationReg" name="password_confirmation">
            <div>
                <button type="submit" class="add__btn btn-reset">{{ __('main.register') }}</button>
            </div>
        </form>
    </div>
</div>
