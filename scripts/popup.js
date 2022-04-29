let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.menu');

menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');

})


if(menu.classList.contains('active')){
    menu.classList.remove('active');
    menu.classList.remove('active');
}

//
const burger = document.querySelector('.burger');
const menubody = document.querySelector('.header__body');

if(burger){
    burger.addEventListener("click", function (e){
        document.body.classList.toggle('_lock');
        burger.classList.toggle('active');
        menubody.classList.toggle('active');
    })
}

//
