//вешаем обработчик события на закрытие окна браузера
window.addEventListener('unload', function () {
    //Создаём новый объект XMLHttpRequest
    let ajax = new XMLHttpRequest();
    //Конфигурируем его: GET-запрос на URL 'exit_status.php'
    ajax.open('GET', 'modules/exit_status.php', true);
    ajax.send(); //отправляем запрос
});

//вешаем обработчик события на загрузку окна браузера
window.addEventListener('load', function () {
    //Создаём новый объект XMLHttpRequest
    let ajax = new XMLHttpRequest();
    //Конфигурируем его: GET-запрос на URL 'open_status.php'
    ajax.open('GET', 'modules/open_status.php', true);
    ajax.send(); //отправляем запрос
});