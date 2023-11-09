<div class="check__wrapper_darkening">
    <div class="check__wrapper_popup">
        <div class="check flex">
            <button type="submit" class="check__edit_link btn-reset" id="editData">
                <img src="{{ asset('storage') }}/img/edit.svg" alt="{{ __('main.edit') }}" class="check__edit">
            </button>
            <form method="post" id="deleteProduct" action="{{ route(App\Http\Controllers\Api\ProductController::ROUTE_DELETE, '') }}">
            <button type="submit" class="check__delete_link btn-reset">
                <img src="{{ asset('storage') }}/img/trash.svg" alt="{{ __('main.delete') }}" class="check__delete">
            </button>
            </form>
            <button type="button" class="check__exit_link btn-reset">
                <img src="{{ asset('storage') }}/img/exit.svg" alt="{{ __('main.exit') }}" class="check__exit">
            </button>
            <h2 class="check__title" id="checkProductNameTitle"></h2>
            <div class="check__descr flex">
                <span class="check__name">{{ __('main.article') }}</span>
                <span class="check__value" id="productArticle"></span>
            </div>
            <div class="check__descr flex">
                <span class="check__name">{{ __('main.name') }}</span>
                <span class="check__value" id="productName"></span>
            </div>
            <div class="check__descr flex">
                <span class="check__name">{{ __('main.status') }}</span>
                <span class="check__value" id="productStatus"></span>
            </div>
            <div class="check__descr flex">
                <span class="check__name">{{ __('main.attributes') }}</span>
                <div id="span"></div>
            </div>
        </div>
    </div>
</div>
