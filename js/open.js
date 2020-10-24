//вешаем обработчик события на загрузку окна браузера
window.addEventListener('load',function () {
    //Создаём новый объект XMLHttpRequest
    let ajax = new XMLHttpRequest();
    //Конфигурируем его: GET-запрос на URL 'open_status.php'
    ajax.open('GET', 'open_status.php', true);
    ajax.send(); //отправляем запрос
});