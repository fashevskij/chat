//блок поиска текста по имени пользователя без перезагрузки страницы
let search = document.querySelector(".search"),
	//получаем поле для воода текста
	textSearch = search.querySelector("input"),
	//получаем блок с пользователями
	userSearch = document.querySelector(".list");
//вешаем событие на поиск текста
search.onsubmit = function (event) {
	//отмена действия по умолчанию
	event.preventDefault();
	//текст + поиск
	let data = "search-text=" + textSearch.value + "&send=1";
	//созадем обьект XMLHttpRequest();
	let ajax = new XMLHttpRequest();
	//создаем запрос
	ajax.open("POST", "modules/search_text.php", false);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send(data); //отправляем запрос
	//обновляем блок с контактами
	userSearch.innerHTML = ajax.response;
};
