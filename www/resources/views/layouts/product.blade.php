<?php
    $arrData = json_decode($arProduct->data, true);
?>

<tr class="content__body_items">
    <td class="content__body_item"><button type="button" class="check__link btn-reset">{{ $arProduct->article }}</button></td>
    <td class="content__body_item">{{ $arProduct->name }}</td>
    <td class="content__body_item">{{ $arProduct->status }}</td>
    <td class="content__body_item">
        @if($arrData)
            @foreach($arrData as $value)
                @foreach($value as $k => $v)
                    <p class="content__body_color">{{ $k . ' : ' . $v  }}</p>
                @endforeach
            @endforeach
        @endif
    </td>
</tr>
