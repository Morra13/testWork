document.querySelectorAll('.dropdown').forEach(function (dropDownWrapper) {
    const dropDownButton = dropDownWrapper.querySelector('.dropdown__button');
    const dropDownList = dropDownWrapper.querySelector('.dropdown__list');
    const dropDownListItem = dropDownWrapper.querySelectorAll('.dropdown__list_item');
    const dropDownInputHidden = dropDownWrapper.querySelector('.dropdown__input_hidden');

    dropDownButton.addEventListener('click', function() {
        dropDownButton.classList.toggle('dropdown__button_radius');
        dropDownList.classList.toggle('dropdown__list_visible');
        dropDownListItem.forEach(function (listItem){
            if (listItem.dataset.value === dropDownInputHidden.value) {
                listItem.classList.add('dropdown__list_color');
            } else {
                listItem.classList.remove('dropdown__list_color');
            }
        });
    });

    dropDownListItem.forEach(function (listItem){
        listItem.addEventListener('click', function (event){
            event.stopPropagation();
            dropDownButton.innerText = this.innerText;
            dropDownInputHidden.value = this.dataset.value;
            dropDownList.classList.remove('dropdown__list_visible');
            dropDownButton.classList.remove('dropdown__button_radius');
        });
    });

    document.addEventListener('click', function (event){
        if (event.target !== dropDownButton) {
            dropDownList.classList.remove('dropdown__list_visible');
            dropDownButton.classList.remove('dropdown__button_radius');
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Tab' || event.key === 'Escape') {
            dropDownList.classList.remove('dropdown__list_visible');
            dropDownButton.classList.remove('dropdown__button_radius');
        }
    });
});
