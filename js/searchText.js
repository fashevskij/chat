//блок поиска текста по имени пользователя без перезагрузки страницы
var search = document.querySelector(".search");
search.onsubmit = function(event){
	//отмена действия по умолчанию
	event.preventDefault();

var text = search.querySelector("input");

var data = "search-text=" + text.value + "&send=1" ;

var aj = new XMLHttpRequest();
	aj.open("POST", "search_text.php", false);
	aj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	aj.send(data);
	var user = document.querySelector(".list");
	user.innerHTML = aj.response;
};
