/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
var img = document.querySelector(".img-dinamic");
var arrows = document.querySelector(".arrows"); // const imgRight = document.querySelector(".img-right")
// const imgLeft = document.querySelector(".img-left")

var num = imgs.length;
var index = 0;
img.innerHTML = "\n<img src=\"arquivos/".concat(imgs[0].title, "\" alt=\"\">\n<h1>sites dinamicos</h1>");

if (index > num) {
  index++;
  img.innerHTML = "\n    <img src=\"arquivos/".concat(imgs[index].title, "\" alt=\"\">\n    <h1>sites dinamicos</h1>\n");
}
/******/ })()
;