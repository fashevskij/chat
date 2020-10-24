//функция проверка корректного введения эмейла при регистрации
function validate(id_form,email) {
   /*создаем регуляр выражение набор всевозможных символов "@-обязательная часть" 
   потом опять символы " . - обязательная часть" и опять набор символов*/ 
   let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   let emailAddress = document.forms[id_form].elements[email].value;
   if(reg.test(emailAddress) == false) {
      alert('incorrect e-mail');
      return false;
   }
}