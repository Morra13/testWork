const addLink = document.querySelector('.content__btn');
const addWrapperPopup = document.querySelector('.add__wrapper_popup');
const addExitLink = document.querySelector('.add__exit_link');

addLink.addEventListener('click', function (){
    addWrapperPopup.classList.add('wrapper__popup_visible')
});

addExitLink.addEventListener('click', function (){
    addWrapperPopup.classList.remove('wrapper__popup_visible')
});

const checkLinkAll = document.querySelectorAll('.check__link');
const checkWrapperPopup = document.querySelector('.check__wrapper_popup');
const checkExitLink = document.querySelector('.check__exit_link');

checkLinkAll.forEach(function (checkLink){
    checkLink.addEventListener('click', function (){
        checkWrapperPopup.classList.add('wrapper__popup_visible')
    });
});

checkExitLink.addEventListener('click', function (){
    checkWrapperPopup.classList.remove('wrapper__popup_visible')
});

const checkEditLink = document.querySelector('.check__edit_link')
const editWrapperPopup = document.querySelector('.edit__wrapper_popup');
const editExitLink = document.querySelector('.edit__exit_link');

checkEditLink.addEventListener('click', function (){
    editWrapperPopup.classList.add('wrapper__popup_visible')
});

editExitLink.addEventListener('click', function (){
    editWrapperPopup.classList.remove('wrapper__popup_visible')
});
