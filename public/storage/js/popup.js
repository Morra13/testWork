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

const checkLinkAll = document.querySelectorAll('.check__link');
const checkWrapperPopup = document.querySelector('.check__wrapper_popup');
const checkExitLink = document.querySelector('.check__exit_link');
const checkWrapperDarkening = document.querySelector('.check__wrapper_darkening')

checkLinkAll.forEach(function (checkLink){
    checkLink.addEventListener('click', function (){
        checkWrapperPopup.classList.add('wrapper__popup_visible')
        checkWrapperDarkening.classList.add('darkening')
    });
});

checkExitLink.addEventListener('click', function (){
    checkWrapperPopup.classList.remove('wrapper__popup_visible')
    checkWrapperDarkening.classList.remove('darkening')
});

const checkEditLink = document.querySelector('.check__edit_link')
const editWrapperPopup = document.querySelector('.edit__wrapper_popup');
const editExitLink = document.querySelector('.edit__exit_link');
const editWrapperDarkening = document.querySelector('.edit__wrapper_darkening')

checkEditLink.addEventListener('click', function (){
    editWrapperPopup.classList.add('wrapper__popup_visible')
    editWrapperDarkening.classList.add('darkening')
});

editExitLink.addEventListener('click', function (){
    editWrapperPopup.classList.remove('wrapper__popup_visible')
    editWrapperDarkening.classList.remove('darkening')
});
