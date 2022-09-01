/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/login.js ***!
  \*******************************/
var button = document.querySelector('.button');
var input = document.querySelectorAll('.input');
button.addEventListener("click", function (bt) {
  input.forEach(function (inp) {
    if (inp.value == '') {
      bt.preventDefault();
      inp.classList.add('active');
      inp.placeholder = 'digite algo';
      setTimeout(function () {
        inp.classList.remove("active");
      }, 700);
    } else {
      inp.classList.remove("active");
    }
  });
});
/******/ })()
;