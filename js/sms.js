//создаем блок смс для того чтобы при отправке не перезагружалась страница
let form = document.querySelector(".form"),//получаем форму отправки текста
    user = form.querySelector("input[name='id_User']"),//получаем сообщения отправителя
    user_2 = form.querySelector("input[name='id_User_2']"),//получаем сообщения получателя
    text = form.querySelector("textarea"),//получаем поле для ввода текста
    sms = document.querySelector(".sms");//получаем блок с сообщениями
    //опускаем скролл в самый низ при клике на пользователя
    sms.scrollTop = sms.scrollHeight;
    //событие на отправку формы 
    form.onsubmit = function(event){
        //отмена действия по умолчанию
        event.preventDefault();
        //передаем в переменную цепочку переписки от отправки до получения
        let data = "text=" + text.value +
        "&id_User=" + user.value +
        "&id_User_2=" + user_2.value +
        "&send_sms=1" ;
        //Создаем обьект XMLHttpRequest
        var aj = new XMLHttpRequest();
        //Инициализируем его метод/куда отправляем запрос/
        aj.open("POST", "../addsms.php", false);
        aj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        //отправляем запрос
        aj.send(data); 
        //очищаем поле ввода текста
        text.value = ""; 
        //обновляем данные в блоке смс
        sms.innerHTML = aj.response;
        //опускаем скрол в низ
        sms.scrollTop = sms.scrollHeight;
        
    };
    //та же функция ajax только обновляем контент сообщений на текущий момент
    function reload(){
         //Создаем обьект XMLHttpRequest
        var aj = new XMLHttpRequest();
        //помещаем только сообщения уже отправленые 
        var data = 
        "&id_User=" + user.value +
        "&id_User_2=" + user_2.value ;
        //Инициализируем его метод/куда отправляем запрос/
        aj.open("POST", "../addsms.php", false);
        aj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        aj.send(data);  //отправляем запрос
        //получаем(обновляем) все сообщения в блок смс
        sms.innerHTML = aj.response;
    }
    //помещаем функцию в таймер на вызов каждые 3 сек
    setInterval(()=>{
        reload();
    },4000);