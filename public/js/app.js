/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

$(document).ready(function () {
  __webpack_require__(/*! ./components/contact */ "./resources/js/components/contact.js");

  __webpack_require__(/*! ./components/dragscroll */ "./resources/js/components/dragscroll.js");
});

/***/ }),

/***/ "./resources/js/components/contact.js":
/*!********************************************!*\
  !*** ./resources/js/components/contact.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$("#alert").hide();
$("form").on("submit", function (e) {
  $("#alert").hide();
  $("#alert p").text("");
  e.preventDefault();
  e.stopPropagation();
  var name = $("input[type=text]").val();
  var email = $("input[type=email]").val();
  var text = $("textarea").val();
  var checkbox = $("input[type=checkbox]").is(":checked");
  var policy = false;
  var recaptcha = $("#recaptcha").val();

  if (checkbox) {
    policy = true;
  }

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  var ajax = $.ajax({
    type: 'POST',
    url: "/contactForm",
    data: {
      name: name,
      email: email,
      text: text,
      policy: policy,
      recaptcha: recaptcha
    },
    dataType: 'json',
    success: function success(data) {
      //console.log(data)
      $("#alert p").text(data.result);
      $("form")[0].reset();
      $("#alert").fadeIn(400);
      $("#alert").delay(10000).fadeOut(400);
    },
    error: function error(data) {
      console.log(data);
      $("#alert p").text(data.error);
      $("#alert").fadeIn(400);
    }
  });
});

/***/ }),

/***/ "./resources/js/components/dragscroll.js":
/*!***********************************************!*\
  !*** ./resources/js/components/dragscroll.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var ele = document.getElementById('showcase');
ele.style.cursor = 'grab';
var pos = {
  top: 0,
  left: 0,
  x: 0,
  y: 0
};

var mouseDownHandler = function mouseDownHandler(e) {
  ele.style.cursor = 'grabbing';
  ele.style.userSelect = 'none';
  pos = {
    left: ele.scrollLeft,
    top: ele.scrollTop,
    // Get the current mouse position
    x: e.clientX,
    y: e.clientY
  };
  document.addEventListener('mousemove', mouseMoveHandler);
  document.addEventListener('mouseup', mouseUpHandler);
};

var mouseMoveHandler = function mouseMoveHandler(e) {
  // How far the mouse has been moved
  var dx = e.clientX - pos.x;
  var dy = e.clientY - pos.y; // Scroll the element

  ele.scrollTop = pos.top - dy;
  ele.scrollLeft = pos.left - dx;
};

var mouseUpHandler = function mouseUpHandler() {
  ele.style.cursor = 'grab';
  ele.style.removeProperty('user-select');
  document.removeEventListener('mousemove', mouseMoveHandler);
  document.removeEventListener('mouseup', mouseUpHandler);
}; // Attach the handler


ele.addEventListener('mousedown', mouseDownHandler);

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/felixwetell/Documents/GitHub/felixmade.me/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Users/felixwetell/Documents/GitHub/felixmade.me/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });