const img = document.querySelector('.burger')



if(img){
    const head__menu = document.querySelector('.header__menu');
    img.addEventListener("click", function(e) {
    head__menu.classList.toggle("_acrtve")
    document.body.classList.toggle("_lock")
});
}

