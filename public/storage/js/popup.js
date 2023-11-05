const link = document.querySelector('.content__btn');
const wrapperPopup = document.querySelector('.wrapper__popup');
const exitLink = document.querySelector('.add__exit_link');

link.addEventListener('click', function (){
    wrapperPopup.classList.add('wrapper__popup_visible')
});

exitLink.addEventListener('click', function (){
    wrapperPopup.classList.remove('wrapper__popup_visible')
});
