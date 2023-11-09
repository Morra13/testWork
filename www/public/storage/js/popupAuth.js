const buttonAuth = document.querySelector('#buttonAuth');
const authWrapperPopup = document.querySelector('#authWrapperPopup');
const buttonAuthExit = document.querySelector('#buttonAuthExit');
const authDarkening = document.querySelector('#authDarkening')

buttonAuth.addEventListener('click', function (){
    authWrapperPopup.classList.add('wrapper__popup_visible')
    authDarkening.classList.add('darkening')
});

buttonAuthExit.addEventListener('click', function (){
    authWrapperPopup.classList.remove('wrapper__popup_visible')
    authDarkening.classList.remove('darkening')
});
