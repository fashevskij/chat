function validate(id_form,email) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var address = document.forms[id_form].elements[email].value;
    if(reg.test(address) == false) {
       alert('Введите e-mail корекктно');
       return false;
    }
 }