<div class="add__wrapper_darkening">
    <div class="add__wrapper_popup">
        <form method="post"  action="{{ route(\App\Http\Controllers\Api\ProductController::ROUTE_CREATE) }}" class="add__form flex">
            <button type="button" class="add__exit_link btn-reset">
                <img src="{{ asset('storage') }}/img/exit.svg" alt="{{ __('main.exit') }}" class="add__exit">
            </button>
            <h2 class="add__title">{{ __('main.addProduct') }}</h2>
            <label for="article" class="add__label">{{ __('main.article') }}</label>
            <input type="text" class="add__input input-reset" id="article" name="article">
            <label for="name" class="add__label">{{ __('main.name') }}</label>
            <input type="text" class="add__input input-reset" id="name" name="name">
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
                <input type="hidden" id="inputArrKeys" name="inputArrKeys" value="">
                <button type="button" onclick="addDiv()" class="add__link btn-reset">{{ __('main.addAttribute') }}</button>
            </div>
            <div>
                <button type="submit" class="add__btn btn-reset">{{ __('main.add') }}</button>
            </div>
        </form>
    </div>
</div>
<script>
    let i = 0;

    function addDiv() {
        i++;
        let newdiv = document.createElement("div");
        newdiv.innerHTML = "<div class='add__attributes flex' id='attributes_"+i+"'><div class='add__name flex'><label for='attributeName_"+i+"' class='add__label'>{{ __('main.name') }}</label><input type='text' class='add__input add__input_attributes input-reset' id='attributeName_"+i+"' name='attributeName_"+i+"'></div><div class='add__value flex'><label for='attributeValue_"+i+"' class='add__label'>{{ __('main.value') }}</label><input type='text' class='add__input add__input_attributes input-reset' id='attributeValue_"+i+"' name='attributeValue_"+i+"'></div><a href='#' onclick='deleteDiv(attributes_"+i+")' class='add__trash'><img src='{{ asset('storage') }}/img/trash.svg' alt='{{ __('main.delete') }}' class='add__trash_img'></a></div>";
        document.getElementById("attributes").appendChild(newdiv);

        function keyGen (count) {
            arrRes = [];
            for (y = 0; y < count; ++y) {
                arrRes.push( y + 1 );
            }
            return arrRes;
        }

        let arrKeys = keyGen(i);
        let sKeys = arrKeys.join(',')+',';
        const inputArrKeys = document.querySelector('#inputArrKeys');
        inputArrKeys.value = sKeys;

        return false;
    }

    function deleteDiv(div) {
        const sliceLength = 11;
        const inputArrKeys = document.querySelector('#inputArrKeys');
        let key = div.id.slice(sliceLength);
        let resultKeys = inputArrKeys.value.replace(key+',','');
        inputArrKeys.value = resultKeys;
        div.remove()
        return false;
    }
</script>
