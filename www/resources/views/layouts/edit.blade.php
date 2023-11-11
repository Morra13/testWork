<div class="edit__wrapper_darkening">
    <div class="edit__wrapper_popup">
        <form method="post" id="formEditProduct" action="{{ route(\App\Http\Controllers\Api\ProductController::ROUTE_EDIT) }}" class="add__form flex">
            <button type="button" class="edit__exit_link btn-reset">
                <img src="{{ asset('storage') }}/img/exit.svg" alt="{{ __('main.exit') }}" class="add__exit">
            </button>
            <h2 class="add__title" id="editProductNameTitle"></h2>
            <input type="hidden" name="id" id="productEditId">
            <label for="article" class="add__label">{{ __('main.article') }}</label>
            <input type="text" class="add__input input-reset" id="productEditArticle" name="article" value="">
            <span style="color: red" id="articleEditError"></span>
            <label for="name" class="add__label">{{ __('main.name') }}</label>
            <input type="text" class="add__input input-reset" id="productEditName" name="name" value="">
            <span style="color: red" id="nameEditError"></span>
            <label for="status" class="add__label flex">{{ __('main.status') }}</label>
            <div class="dropdown">
                <button class="dropdown__button" name="status" type="button" id="productEditStatusVisible"></button>
                <ul class="dropdown__list list-reset">
                    <li class="dropdown__list_item" data-value="available">{{ __('main.available') }}</li>
                    <li class="dropdown__list_item" data-value="unavailable">{{ __('main.unavailable') }}</li>
                </ul>
                <input type="text" name="status" id="productEditStatusValue" class="dropdown__input_hidden">
            </div>
            <h3 class="add__subtitle">{{ __('main.attributes') }}</h3>
            <div class="add__link_div">
                <div id="editAttributes">
                </div>
                <input type="hidden" id="editInputArrKeys" name="editInputArrKeys" value="">
                <button type="button" onclick="addDivForEdit()" class="add__link btn-reset">{{ __('main.addAttribute') }}</button>
            </div>
            <div>
                <button class="add__btn btn-reset">{{ __('main.save') }}</button>
            </div>
        </form>
    </div>
</div>
