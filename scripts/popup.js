const burger = document.querySelector('.burger__img')
const head__menu = document.querySelector('.header__menu');
const callBack_btn = document.querySelector('.form__btn');

if(burger){
    burger.addEventListener('click', function(e) 
    {
    burger.classList.toggle("_active");
    head__menu.classList.toggle('_active');
    document.body.classList.toggle('_lock');

});
}

const item = document.querySelectorAll('.item__menu');

if(item.length >0){
    item.forEach(item =>{
        item.addEventListener("click", function (e) {
            const item = e.target;
            if(burger.classList.contains('_active')){
                burger.classList.remove("_active");
                head__menu.classList.remove('_active');
                document.body.classList.remove('_lock');
            }
            window.scrollTo({
                behavior: "smooth"
            })
        });
    });
}

if (callBack_btn) {
    callBack_btn.addEventListener('click', CallBack);
}
function CallBack() {
    const info = document.querySelector('.info__text-callback');
    info.textContent = info.textContent == 'Данные отправлены' ? 'Данные отправлены' : 'Данные отправлены';
}





let form;
let action;
function findElements() {
  form = document.querySelector('form');
  ({ action } = form);
}
function showMessage(data) {
  alert(data.message);
}
function onSuccess(response) {
  return response.json().then(showMessage);
}
function onError(data) {
  console.error(data);
}
function collectData(currentForm) {
  const data = new FormData(currentForm);
  return data;
}
function setOptions(currentForm) {
  return {
    method: 'post',
    body: collectData(currentForm),
  };
}
function sendForm(currentForm) {
  return fetch(action, setOptions(currentForm));
}
function onSubmit(event) {
  event.preventDefault();
  const { currentTarget } = event;
  sendForm(currentTarget)
    .then(response => onSuccess(response, currentTarget))
    .catch(onError);
}
function subscribe() {
  form.addEventListener('submit', onSubmit);
}
function init() {
  findElements();
  subscribe();
}
init();