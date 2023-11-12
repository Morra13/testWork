const buttonAuth = document.querySelector('#buttonAuth');
const authWrapperPopup = document.querySelector('#authWrapperPopup');
const buttonAuthExit = document.querySelector('#buttonAuthExit');
const authDarkening = document.querySelector('#authDarkening')
const dataErrorsAuth = document.querySelector('#dataErrorsAuth')

buttonAuth.addEventListener('click', function (){
    authWrapperPopup.classList.add('wrapper__popup_visible')
    authDarkening.classList.add('darkening')
});

buttonAuthExit.addEventListener('click', function (){
    authWrapperPopup.classList.remove('wrapper__popup_visible')
    authDarkening.classList.remove('darkening')
    document.querySelector('#mainAuthError').innerHTML = '';
    document.querySelector('#emailAuthError').innerHTML = '';
    document.querySelector('#passwordAuthError').innerHTML = '';
});

if (dataErrorsAuth.dataset['autherrors'].length > 2) {
    buttonAuth.click();
    let errorAuth = JSON.parse(dataErrorsAuth.dataset['autherrors']);

    let mainAuthError = document.querySelector('#mainAuthError');
    if (errorAuth['mainAuthError']) {
        mainAuthError.innerHTML = errorAuth['mainAuthError'][0];
    }

    let emailAuthError = document.querySelector('#emailAuthError');
    if (errorAuth['email']) {
        emailAuthError.innerHTML = errorAuth['email'][0];
    }
    let passwordAuthError = document.querySelector('#passwordAuthError');
    if (errorAuth['password']) {
        passwordAuthError.innerHTML = errorAuth['password'][0];
    }
}
