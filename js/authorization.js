//получаем кнопку и модал окно авторизации по id
let btnOpenAccount = document.querySelector("#account"),
	accountModal = document.querySelector("#authorization"),
	//получаем кнопку и модал окно регистрации по id
	btnOpenRgistr = document.querySelector("#registr"),
	registrationModal = document.querySelector('#registration');
//событие для открытия модального окна авторизации при клике на кнопку авторизация
btnOpenAccount.addEventListener('click', function () {
	accountModal.style.display = "block";
	//вызываем функцию закрытия модал окна , передаем номер кнопки в массиве, и что зыкрыть
	close(0, accountModal);
});

//событие для открытия модального окна регистрации при клике на кнопку регистр
btnOpenRgistr.addEventListener('click', function () {
	accountModal.style.display = "none";
	registrationModal.style.display = "block";
	//Увеличим временно высоту модального окна чтобы все поместилось
	registrationModal.style.height = "365px";
	close(1, registrationModal);
});