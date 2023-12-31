const checkLinkAll = document.querySelectorAll('.check__link');
const checkExitLink = document.querySelector('.check__exit_link');
const checkWrapperPopup = document.querySelector('.check__wrapper_popup');
const checkWrapperDarkening = document.querySelector('.check__wrapper_darkening')
const editData = document.querySelector('#editData');

checkLinkAll.forEach(function (checkLink){
    checkLink.addEventListener('click', function (){
        document.querySelector('#checkProductNameTitle').innerText = this.getAttribute('data-name');
        document.querySelector('#productName').innerHTML = this.getAttribute('data-name');
        document.querySelector('#productArticle').innerHTML = this.getAttribute('data-article');
        document.querySelector('#productStatus').innerHTML = this.getAttribute('data-status') === 'available' ? 'Доступен' : 'Не доступен';
        document.querySelector('#deleteProduct').action = document.querySelector('#deleteProduct').action + '/' + this.getAttribute('data-id');
        if (this.getAttribute('data-data')) {
            let arrData = JSON.parse(this.getAttribute('data-data'));
            arrData.forEach((array, key) => {
                let newSpan = document.createElement("span");
                newSpan.innerHTML = "<span class='check__value' id='productAttributes_" + key + "'>" + Object.keys(array)[0] + " : " + Object.values(array)[0] + "</span><br>";
                document.getElementById("span").appendChild(newSpan);
            })
        }
        checkWrapperPopup.classList.add('wrapper__popup_visible')
        checkWrapperDarkening.classList.add('darkening')
        editData.setAttribute('data-id', this.getAttribute('data-id'))
        editData.setAttribute('data-name', this.getAttribute('data-name'))
        editData.setAttribute('data-article', this.getAttribute('data-article'))
        editData.setAttribute('data-status', this.getAttribute('data-status'));
        editData.setAttribute('data-data', this.getAttribute('data-data'))
    });
});

checkExitLink.addEventListener('click', function (){
    checkWrapperPopup.classList.remove('wrapper__popup_visible')
    checkWrapperDarkening.classList.remove('darkening')
    document.querySelector('#deleteProduct').action = document.querySelector('#deleteProduct').action.substring( 0 , document.querySelector('#deleteProduct').action.lastIndexOf('/'));
    document.getElementById("span").innerHTML = '';
});

document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
        checkWrapperPopup.classList.remove('wrapper__popup_visible')
        checkWrapperDarkening.classList.remove('darkening')
        document.querySelector('#deleteProduct').action = document.querySelector('#deleteProduct').action.substring( 0 , document.querySelector('#deleteProduct').action.lastIndexOf('/'));
        document.getElementById("span").innerHTML = '';
    }
});
