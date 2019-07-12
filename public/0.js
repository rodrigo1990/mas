(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./resources/js/scripts/scroll-animation.js":
/*!**************************************************!*\
  !*** ./resources/js/scripts/scroll-animation.js ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return scrollAnimate; });
function scrollAnimate(id) {
  $('html,body').animate({
    scrollTop: $('#' + id + '').offset().top - 100
  }, 'slow');
}

/***/ })

}]);