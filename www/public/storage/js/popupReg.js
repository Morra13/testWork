const buttonReg = document.querySelector('#buttonReg');
const regWrapperPopup = document.querySelector('#regWrapperPopup');
const buttonRegExit = document.querySelector('#buttonRegExit');
const regDarkening = document.querySelector('#regDarkening')

buttonReg.addEventListener('click', function (){
    regWrapperPopup.classList.add('wrapper__popup_visible')
    regDarkening.classList.add('darkening')
});

buttonRegExit.addEventListener('click', function (){
    regWrapperPopup.classList.remove('wrapper__popup_visible')
    regDarkening.classList.remove('darkening')
});
