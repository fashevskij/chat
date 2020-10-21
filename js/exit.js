//вешаем обработчик события на закрытие окна браузера
window.addEventListener('unload',function () {
    //Создаём новый объект XMLHttpRequest
    var xhr = new XMLHttpRequest();
    //Конфигурируем его: GET-запрос на URL 'exit_status.php'
    xhr.open('GET', 'exit_status.php', true);
    xhr.send(); //отправляем запрос
});
