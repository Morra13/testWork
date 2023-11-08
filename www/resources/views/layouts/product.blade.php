<tr class="content__body_items">
    <td class="content__body_item">
        <button
            type="button"
            class="check__link btn-reset product-block"
            data-id="{{ $arProduct->id }}"
            data-article="{{ $arProduct->article }}"
            data-name="{{ $arProduct->name }}"
            data-status="{{ $arProduct->status }}"
            data-data="{{ $arProduct->data }}"
        >{{ $arProduct->article }}</button>
    </td>
    <td class="content__body_item">{{ $arProduct->name }}</td>
    <td class="content__body_item">{{ $arProduct->status }}</td>
    <td class="content__body_item">
        @if($arProduct->arData)
            @foreach($arProduct->arData as $value)
                @foreach($value as $k => $v)
                    <p class="content__body_color">{{ $k . ' : ' . $v  }}</p>
                @endforeach
            @endforeach
        @endif
    </td>
</tr>
