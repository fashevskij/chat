//вешаем обработчик события на закрытие окна браузера
window.addEventListener('unload',function () {
    //Создаём новый объект XMLHttpRequest
    let ajax = new XMLHttpRequest();
    //Конфигурируем его: GET-запрос на URL 'exit_status.php'
    ajax.open('GET', 'exit_status.php', true);
    ajax.send(); //отправляем запрос
});
