//вешаем обработчик события на загрузку окна браузера
window.addEventListener('load',function () {
    //Создаём новый объект XMLHttpRequest
    var xhr = new XMLHttpRequest();
    //Конфигурируем его: GET-запрос на URL 'open_status.php'
    xhr.open('GET', 'open_status.php', true);
    xhr.send(); //отправляем запрос
});