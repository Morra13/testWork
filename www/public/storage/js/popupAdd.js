const addLink = document.querySelector('.content__btn');
const addWrapperPopup = document.querySelector('.add__wrapper_popup');
const addExitLink = document.querySelector('.add__exit_link');
const addWrapperDarkening = document.querySelector('.add__wrapper_darkening')
const dataErrors = document.querySelector('#dataErrors')

addLink.addEventListener('click', function (){
    addWrapperPopup.classList.add('wrapper__popup_visible')
    addWrapperDarkening.classList.add('darkening')
});

addExitLink.addEventListener('click', function (){
    addWrapperPopup.classList.remove('wrapper__popup_visible')
    addWrapperDarkening.classList.remove('darkening')
    document.querySelector('#addArticle').value = '';
    document.querySelector('#addName').value = '';
    document.querySelector('#nameCreateError').innerHTML = '';
    document.querySelector('#articleCreateError').innerHTML = '';
});

if (dataErrors.dataset['createerrors'].length > 2) {
    addLink.click();
    let errorCreate = JSON.parse(dataErrors.dataset['createerrors']);
    let nameCreateError = document.querySelector('#nameCreateError');
    if (errorCreate['name']) {
        nameCreateError.innerHTML = errorCreate['name'][0];
    }
    let articleCreateError = document.querySelector('#articleCreateError');
    if (errorCreate['article']) {
        articleCreateError.innerHTML = errorCreate['article'][0];
    }
}
