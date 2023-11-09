const addLink = document.querySelector('.content__btn');
const addWrapperPopup = document.querySelector('.add__wrapper_popup');
const addExitLink = document.querySelector('.add__exit_link');
const addWrapperDarkening = document.querySelector('.add__wrapper_darkening')

addLink.addEventListener('click', function (){
    addWrapperPopup.classList.add('wrapper__popup_visible')
    addWrapperDarkening.classList.add('darkening')
});

addExitLink.addEventListener('click', function (){
    addWrapperPopup.classList.remove('wrapper__popup_visible')
    addWrapperDarkening.classList.remove('darkening')
});
