let btnOpenAccount = document.querySelector("#account");
let accountModal = document.querySelector(".modal");
let accountModalCloseBtn = document.querySelector(".modal .close");

btnOpenAccount.onclick = function(){
	accountModal.style.display = "block";
};
accountModalCloseBtn.onclick = function(){
	accountModal.style.display = "none";
};
accountModalCloseBtn.addEventListener('click', function(){
    accountModal.style.display = "none";
});
