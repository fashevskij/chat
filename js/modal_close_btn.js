//Функция закрытия модальных окон
function close(n, element) { //передаем номер кнопки , и эелемент(модал окно) для закрытия
	//получаем все кнопки закрытия (крестики) в виде массива[номер кнопки] и событие вешаем закрытия модал окна
	document.querySelectorAll(".modal .close")[n].addEventListener('click', function () {
		element.style.display = "none";
	});
}