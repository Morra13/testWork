const buttonReg = document.querySelector('#buttonReg');
const regWrapperPopup = document.querySelector('#regWrapperPopup');
const buttonRegExit = document.querySelector('#buttonRegExit');
const regDarkening = document.querySelector('#regDarkening')
const dataErrorsReg = document.querySelector('#dataErrorsReg')

buttonReg.addEventListener('click', function (){
    regWrapperPopup.classList.add('wrapper__popup_visible')
    regDarkening.classList.add('darkening')
});

buttonRegExit.addEventListener('click', function (){
    regWrapperPopup.classList.remove('wrapper__popup_visible')
    regDarkening.classList.remove('darkening')
    document.querySelector('#nameRegError').innerHTML = '';
    document.querySelector('#emailRegError').innerHTML = '';
    document.querySelector('#passwordRegError').innerHTML = '';
});

if (dataErrorsReg.dataset['regerrors'].length > 2) {
    buttonReg.click();
    let errorReg = JSON.parse(dataErrorsReg.dataset['regerrors']);

    let nameRegError = document.querySelector('#nameRegError');
    if (errorReg['name']) {
        nameRegError.innerHTML = errorReg['name'][0];
    }

    let emailRegError = document.querySelector('#emailRegError');
    if (errorReg['email']) {
        emailRegError.innerHTML = errorReg['email'][0];
    }
    let passwordRegError = document.querySelector('#passwordRegError');
    if (errorReg['password']) {
        passwordRegError.innerHTML = errorReg['password'][0];
    }
}
