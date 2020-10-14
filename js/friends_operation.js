//создаем функцию добавления в друзья
function addFrends(element) {
	//создаем перемнную и присваеваем ей id списка контактов чтобы связать
	var frendlist = document.querySelector("#frendlist");
	//создаем переменную и присваеваем ей нашу ссылку frendlist
	var link = element.dataset.link;
	//создать обьект(переменную) для отправки http запроса
	var aj = new XMLHttpRequest();
		//открываем aj передаю метод запроса (GET) и ссылку link
		aj.open("GET", link, false);
		//отсылаем запрос
		aj.send();
	// Меняем контент в блоке frendlist
	frendlist.innerHTML = aj.response;
}

//создаем функцию удаления из друзей
function dellFrends(element) {
	//создаем перемнную и присваеваем ей id списка контактов чтобы связать
	var frendlist = document.querySelector("#frendlist");
	//создаем переменную и присваеваем ей нашу ссылку frendlist
	var link = element.dataset.link;
	//создать обьект(переменную) для отправки http запроса
	var aj = new XMLHttpRequest();
		//открываем aj передаю метод запроса (GET) и ссылку link
		aj.open("GET", link, false);
		//отсылаем запрос
		aj.send();
	// Меняем контент в блоке frendlist
	frendlist.innerHTML = aj.response;
}
