let i = document.querySelector('.count').value - 1;

function addDiv() {
    i++;
    let newDiv = document.createElement("div");
    newDiv.innerHTML = "<div class='add__attributes flex' id='attributes_"+i+"'><div class='add__name flex'><label for='attributeName_"+i+"' class='add__label'>Название</label><input type='text' class='add__input add__input_attributes input-reset' id='attributeName_"+i+"' name='attributeName_"+i+"'></div><div class='add__value flex'><label for='attributeValue_"+i+"' class='add__label'>Значение</label><input type='text' class='add__input add__input_attributes input-reset' id='attributeValue_"+i+"' name='attributeValue_"+i+"'></div><a href='#' onclick='deleteDiv(attributes_"+i+")' class='add__trash'><img src='https://smf.com.ge/storage/img/trash.svg' alt='Удалить' class='add__trash_img'></a></div>";


    document.getElementById("attributes").appendChild(newDiv);

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


