alert ("Привет! Готов влюбиться в Ирландию?");

(function() {
    var x = "Hello";
    console.log(x);
  })();  // Hello

var btn = document.createElement('button');
var t = document.createTextNode('click me');
btn.appendChild(t);
document.body.appendChild(btn);

button.style.color = 'blue';


console.log('Скрипт загружен');

const headerNav = document.querySelector('.header-nav');
const menu = document.querySelector('.menu');
headerNav.addEventListener('click', () => {
    menu.classList.toggle('active');
});
