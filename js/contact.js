//получаем кнопку контакты
let btnOpenContact = document.querySelector("#open-contact"),
//получаем модальное окно контактов
	contactModal =  document.querySelector("#contacts-modal");
//событие при клике на кнопку контакты открываем модальное окно
btnOpenContact.addEventListener('click', function () {
    contactModal.style.display = "block";
    contactModal.style.height = "calc(100% - 100px)";
    contactModal.style.width = "270px";
    contactModal.style.borderRadius = "0";
	close(2, contactModal);//закрытие модального окна через функцию
});
