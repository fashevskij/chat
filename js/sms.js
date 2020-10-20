//создаем блок смс для того чтобы при отправке не перезагружалась страница

var form = document.querySelector(".form");
    form.onsubmit = function(event){
        //отмена действия по умолчанию
        event.preventDefault();
        

        
    var user_1 = form.querySelector("input[name='id_User']");
    var user_2 = form.querySelector("input[name='id_User_2']");
    var text = form.querySelector("textarea");


    var data = "text=" + text.value +
    "&id_User=" + user_1.value +
    "&id_User_2=" + user_2.value +
    "&send_sms=1" ;

        var aj = new XMLHttpRequest();
        aj.open("POST", "../addsms.php", false);
        aj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        aj.send(data);

    var sms = document.querySelector(".sms");
        sms.innerHTML = aj.response;
    };
