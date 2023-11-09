<div id="authDarkening">
    <div class="add__wrapper_popup" id="authWrapperPopup">
        <form method="post"  action="{{ route(\App\Http\Controllers\Api\ProductController::ROUTE_CREATE) }}" class="add__form flex">
            <button type="button" class="btn-reset" id="buttonAuthExit">
                <img src="{{ asset('storage') }}/img/exit.svg" alt="{{ __('main.exit') }}" class="auth__exit">
            </button>
            <h2 class="add__title">{{ __('main.auth') }}</h2>
            <label for="userName" class="auth__label">{{ __('main.userName') }}</label>
            <input type="text" class="auth__input input-reset" id="userName" name="userName">
            <label for="userEmail" class="auth__label">{{ __('main.email') }}</label>
            <input type="email" class="auth__input input-reset" id="userEmail" name="userEmail">
            <label for="userPassword" class="auth__label">{{ __('main.password') }}</label>
            <input type="password" class="auth__input input-reset" id="userPassword" name="userPassword">
            <div>
                <button type="submit" class="add__btn btn-reset">{{ __('main.auth') }}</button>
            </div>
        </form>
    </div>
</div>
