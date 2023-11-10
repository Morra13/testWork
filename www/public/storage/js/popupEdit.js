const checkEditLink = document.querySelector('.check__edit_link');
const editWrapperPopup = document.querySelector('.edit__wrapper_popup');
const editExitLink = document.querySelector('.edit__exit_link');
const editWrapperDarkening = document.querySelector('.edit__wrapper_darkening');
let editInputArrKeys = document.querySelector('#editInputArrKeys');
const admin = document.querySelector('#admin').dataset['admin'];

checkEditLink.addEventListener('click', function (){
    document.querySelector('#editProductNameTitle').innerText = 'Редактировать ' + editData.dataset['name'];
    document.querySelector('#productEditId').value = editData.dataset['id'];
    document.querySelector('#productEditName').value = editData.dataset['name'];
    document.querySelector('#productEditArticle').value = editData.dataset['article'];
    if (!admin) {
        document.querySelector('#productEditArticle').readOnly = true;
    }
    document.querySelector('#productEditStatusVisible').innerHTML = editData.dataset['status'] === 'available' ? 'Доступен' : 'Не доступен';
    document.querySelector('#productEditStatusValue').value = editData.dataset['status'];
    if (editData.dataset['data']) {
        let arrData = JSON.parse(editData.dataset['data']);
        arrData.forEach((array, key) => {
            let newDiv = document.createElement("div");
            newDiv.innerHTML = "<div class='add__attributes flex' id='attributes_"+key+"'><div class='add__name flex'><label for='attributeName_"+key+"' class='add__label'>Название</label><input type='text' class='add__input add__input_attributes input-reset' id='attributeName_"+key+"' name='attributeName_"+key+"' value='" + Object.keys(array)[0] + "'></div><div class='add__value flex'><label for='attributeValue_"+key+"' class='add__label'>Значение</label><input type='text' class='add__input add__input_attributes input-reset' id='attributeValue_"+key+"' name='attributeValue_"+key+"' value='" + Object.values(array)[0] + "'></div><a href='#' onclick='deleteDivEdit(attributes_"+key+")' class='add__trash'><img src='https://smf.com.ge/storage/img/trash.svg' alt='Удалить' class='add__trash_img'></a></div>";
            document.getElementById("editAttributes").appendChild(newDiv);
            editInputArrKeys.value = editInputArrKeys.value + key + ',';
        })
    }
    editWrapperPopup.classList.add('wrapper__popup_visible')
    editWrapperDarkening.classList.add('darkening')
});

editExitLink.addEventListener('click', function (){
    editWrapperPopup.classList.remove('wrapper__popup_visible')
    editWrapperDarkening.classList.remove('darkening')
    editInputArrKeys.value = '';
    document.querySelector('#editProductNameTitle').innerText = '';
    document.getElementById("editAttributes").innerHTML  = '';
});

let maxKey = 0;

editData.addEventListener('click', function (){
    if (editInputArrKeys.value) {
        maxKey = Math.max(...editInputArrKeys.value.slice(0, -1).split(','));
    }
})

function addDivForEdit() {
    maxKey++;
    let newDiv = document.createElement("div");
    newDiv.innerHTML = "<div class='add__attributes flex' id='attributes_"+maxKey+"'><div class='add__name flex'><label for='attributeName_"+maxKey+"' class='add__label'>Название</label><input type='text' class='add__input add__input_attributes input-reset' id='attributeName_"+maxKey+"' name='attributeName_"+maxKey+"'></div><div class='add__value flex'><label for='attributeValue_"+maxKey+"' class='add__label'>Значение</label><input type='text' class='add__input add__input_attributes input-reset' id='attributeValue_"+maxKey+"' name='attributeValue_"+maxKey+"'></div><a href='#' onclick='deleteDivEdit(attributes_"+maxKey+")' class='add__trash'><img src='https://smf.com.ge/storage/img/trash.svg' alt='Удалить' class='add__trash_img'></a></div>";
    document.getElementById("editAttributes").appendChild(newDiv);
    editInputArrKeys.value = editInputArrKeys.value + maxKey + ',';
    return false;
}

function deleteDivEdit(div) {
    const sliceLength = 11;
    let key = div.id.slice(sliceLength);
    editInputArrKeys.value = editInputArrKeys.value.replace(key+',','');
    div.remove()
    return false;
}
