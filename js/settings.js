//получаем модальное окно настроек и кнопку по нажатию на которую будет появляться окно
let settingsBtn = document.querySelector('#settings'),
	settingsModal = document.querySelector('#settings-modal');


//событие для открытия модального окна регистрации при клике на кнопку регистр
settingsBtn.addEventListener('click', function () {
	settingsModal.style.display = "block";
	//Увеличим временно высоту модального окна чтобы все поместилось
	settingsModal.style.height = "290px";
	close(2, settingsModal);
});