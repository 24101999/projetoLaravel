/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
var img = document.querySelector(".img-dinamic");
var arrows = document.querySelector(".arrows");
var imgRight = document.querySelector(".img-right");
var imgLeft = document.querySelector(".img-left");
var num = imgs.length;
var index = 0;
imgRight.addEventListener("click", function (el) {
  if (index >= num - 1) {
    index = 0;
  } else {
    index++;
  }

  img.innerHTML = "<img src=\"arquivos/".concat(imgs[index].title, "\" alt=\"\">\n        <h1>sites dinamicos</h1>");
});
imgLeft.addEventListener("click", function () {
  if (index <= 0) {
    index = num;
  }

  index--;
  img.innerHTML = "<img src=\"arquivos/".concat(imgs[index].title, "\" alt=\"\">\n        <h1>sites dinamicos</h1>");
});
img.innerHTML = "<img src=\"arquivos/".concat(imgs[0].title, "\" alt=\"\">\n<h1>sites dinamicos</h1>");
/******/ })()
;