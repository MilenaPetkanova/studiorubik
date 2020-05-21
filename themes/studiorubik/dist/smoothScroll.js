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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/smoothScroll.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/components/global/smoothScroll/_smoothScroll.scss":
/*!***************************************************************!*\
  !*** ./src/components/global/smoothScroll/_smoothScroll.scss ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./src/components/global/smoothScroll/_smoothScroll.scss?");

/***/ }),

/***/ "./src/components/global/smoothScroll/smoothScroll.js":
/*!************************************************************!*\
  !*** ./src/components/global/smoothScroll/smoothScroll.js ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _smoothScroll_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_smoothScroll.scss */ \"./src/components/global/smoothScroll/_smoothScroll.scss\");\n/* harmony import */ var _smoothScroll_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_smoothScroll_scss__WEBPACK_IMPORTED_MODULE_0__);\nfunction _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }\n\nfunction _nonIterableSpread() { throw new TypeError(\"Invalid attempt to spread non-iterable instance\"); }\n\nfunction _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === \"[object Arguments]\") return Array.from(iter); }\n\nfunction _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\n\n\nfunction smoothScroll() {\n  // helper functions\n  var MathUtils = {\n    // map number x from range [a, b] to [c, d]\n    map: function map(x, a, b, c, d) {\n      return (x - a) * (d - c) / (b - a) + c;\n    },\n    // linear interpolation\n    lerp: function lerp(a, b, n) {\n      return (1 - n) * a + n * b;\n    }\n  }; // body element\n  // const body = document.body;\n\n  var body = document.querySelector(\"html\");\n  var header = $('.site-header');\n  var footer = $('.site-footer'); // calculate the viewport size\n\n  var winsize;\n\n  var calcWinsize = function calcWinsize() {\n    return winsize = {\n      width: window.innerWidth,\n      height: window.innerHeight\n    };\n  };\n\n  calcWinsize(); // and recalculate on resize\n\n  window.addEventListener('resize', calcWinsize); // scroll position and update function\n\n  var docScroll;\n\n  var getPageYScroll = function getPageYScroll() {\n    return docScroll = window.pageYOffset || document.documentElement.scrollTop;\n  };\n\n  window.addEventListener('scroll', getPageYScroll); // Item\n\n  var Item =\n  /*#__PURE__*/\n  function () {\n    function Item(el) {\n      var _this = this;\n\n      _classCallCheck(this, Item);\n\n      // the .item element\n      this.DOM = {\n        el: el\n      }; // the inner image\n\n      this.DOM.image = this.DOM.el.querySelector('.item__img');\n      this.renderedStyles = {\n        // here we define which property will change as we scroll the page and the items is inside the viewport\n        // in this case we will be translating the image on the y-axis\n        // we interpolate between the previous and current value to achieve a smooth effect\n        innerTranslationY: {\n          // interpolated value\n          previous: 0,\n          // current value\n          current: 0,\n          // amount to interpolate\n          ease: 0.1,\n          // the maximum value to translate the image is set in a CSS variable (--overflow)\n          maxValue: parseInt(getComputedStyle(this.DOM.image).getPropertyValue('--overflow'), 10),\n          // current value setter\n          // the value of the translation will be:\n          // when the item's top value (relative to the viewport) equals the window's height (items just came into the viewport) the translation = minimum value (- maximum value)\n          // when the item's top value (relative to the viewport) equals \"-item's height\" (item just exited the viewport) the translation = maximum value\n          setValue: function setValue() {\n            var maxValue = _this.renderedStyles.innerTranslationY.maxValue;\n            var minValue = -1 * maxValue;\n            return Math.max(Math.min(MathUtils.map(_this.props.top - docScroll, winsize.height, -1 * _this.props.height, minValue, maxValue), maxValue), minValue);\n          }\n        }\n      }; // set the initial values\n\n      this.update(); // use the IntersectionObserver API to check when the element is inside the viewport\n      // only then the element translation will be updated\n\n      this.observer = new IntersectionObserver(function (entries) {\n        entries.forEach(function (entry) {\n          return _this.isVisible = entry.intersectionRatio > 0;\n        });\n      });\n      this.observer.observe(this.DOM.el); // init/bind events\n\n      this.initEvents();\n    }\n\n    _createClass(Item, [{\n      key: \"update\",\n      value: function update() {\n        // gets the item's height and top (relative to the document)\n        this.getSize(); // sets the initial value (no interpolation)\n\n        for (var key in this.renderedStyles) {\n          this.renderedStyles[key].current = this.renderedStyles[key].previous = this.renderedStyles[key].setValue();\n        } // translate the image\n\n\n        this.layout();\n      }\n    }, {\n      key: \"getSize\",\n      value: function getSize() {\n        var rect = this.DOM.el.getBoundingClientRect();\n        this.props = {\n          // item's height\n          height: rect.height,\n          // offset top relative to the document\n          top: docScroll + rect.top\n        };\n      }\n    }, {\n      key: \"initEvents\",\n      value: function initEvents() {\n        var _this2 = this;\n\n        window.addEventListener('resize', function () {\n          return _this2.resize();\n        });\n      }\n    }, {\n      key: \"resize\",\n      value: function resize() {\n        // on resize rest sizes and update the translation value\n        this.update();\n      }\n    }, {\n      key: \"render\",\n      value: function render() {\n        // update the current and interpolated values\n        for (var key in this.renderedStyles) {\n          this.renderedStyles[key].current = this.renderedStyles[key].setValue();\n          this.renderedStyles[key].previous = MathUtils.lerp(this.renderedStyles[key].previous, this.renderedStyles[key].current, this.renderedStyles[key].ease);\n        } // and translates the image\n\n\n        this.layout();\n      }\n    }, {\n      key: \"layout\",\n      value: function layout() {\n        // translates the image\n        this.DOM.image.style.transform = \"translate3d(0,\".concat(this.renderedStyles.innerTranslationY.previous, \"px,0)\");\n      }\n    }]);\n\n    return Item;\n  }(); // SmoothScroll\n\n\n  var SmoothScroll =\n  /*#__PURE__*/\n  function () {\n    function SmoothScroll() {\n      var _this3 = this;\n\n      _classCallCheck(this, SmoothScroll);\n\n      // the <main> element\n      this.DOM = {\n        main: document.querySelector('body')\n      }; // the scrollable element\n      // we translate this element when scrolling (y-axis)\n\n      this.DOM.scrollable = this.DOM.main.querySelector('[data-scroll]'); // the items on the page\n\n      this.items = [];\n\n      _toConsumableArray(this.DOM.main.querySelectorAll('.smooth-scroll-content  .item')).forEach(function (item) {\n        return _this3.items.push(new Item(item));\n      }); // here we define which property will change as we scroll the page\n      // in this case we will be translating on the y-axis\n      // we interpolate between the previous and current value to achieve the smooth scrolling effect\n\n\n      this.renderedStyles = {\n        translationY: {\n          // interpolated value\n          previous: 0,\n          // current value\n          current: 0,\n          // amount to interpolate\n          ease: 0.1,\n          // current value setter\n          // in this case the value of the translation will be the same like the document scroll\n          setValue: function setValue() {\n            return docScroll;\n          }\n        }\n      }; // set the body's height\n\n      this.setSize(); // set the initial values\n\n      this.update(); // the <main> element's style needs to be modified\n\n      this.style(); // init/bind events\n\n      this.initEvents(); // start the render loop\n\n      requestAnimationFrame(function () {\n        return _this3.render();\n      });\n    }\n\n    _createClass(SmoothScroll, [{\n      key: \"update\",\n      value: function update() {\n        // sets the initial value (no interpolation) - translate the scroll value\n        for (var key in this.renderedStyles) {\n          this.renderedStyles[key].current = this.renderedStyles[key].previous = this.renderedStyles[key].setValue();\n        } // translate the scrollable element\n\n\n        this.layout();\n      }\n    }, {\n      key: \"layout\",\n      value: function layout() {\n        // translates the scrollable element\n        this.DOM.scrollable.style.transform = \"translate3d(0,\".concat(-1 * this.renderedStyles.translationY.previous, \"px,0)\");\n      }\n    }, {\n      key: \"setSize\",\n      value: function setSize() {\n        // set the heigh of the body in order to keep the scrollbar on the page\n        body.style.height = \"\".concat(this.DOM.scrollable.scrollHeight, \"px\");\n      }\n    }, {\n      key: \"style\",\n      value: function style() {\n        // the <main> needs to \"stick\" to the screen and not scroll\n        // for that we set it to position fixed and overflow hidden\n        this.DOM.main.style.position = 'fixed';\n        this.DOM.main.style.width = this.DOM.main.style.height = '100%';\n        this.DOM.main.style.top = this.DOM.main.style.left = 0;\n        this.DOM.main.style.overflow = 'hidden';\n      }\n    }, {\n      key: \"initEvents\",\n      value: function initEvents() {\n        var _this4 = this;\n\n        // on resize reset the body's height\n        window.addEventListener('resize', function () {\n          return _this4.setSize();\n        });\n      }\n    }, {\n      key: \"render\",\n      value: function render() {\n        var _this5 = this;\n\n        // update the current and interpolated values\n        for (var key in this.renderedStyles) {\n          this.renderedStyles[key].current = this.renderedStyles[key].setValue();\n          this.renderedStyles[key].previous = MathUtils.lerp(this.renderedStyles[key].previous, this.renderedStyles[key].current, this.renderedStyles[key].ease);\n        } // and translate the scrollable element\n\n\n        this.layout(); // for every item\n\n        var _iteratorNormalCompletion = true;\n        var _didIteratorError = false;\n        var _iteratorError = undefined;\n\n        try {\n          for (var _iterator = this.items[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {\n            var item = _step.value;\n\n            // if the item is inside the viewport call it's render function\n            // this will update the item's inner image translation, based on the document scroll value and the item's position on the viewport\n            if (item.isVisible) {\n              item.render();\n            }\n          } // loop..\n\n        } catch (err) {\n          _didIteratorError = true;\n          _iteratorError = err;\n        } finally {\n          try {\n            if (!_iteratorNormalCompletion && _iterator[\"return\"] != null) {\n              _iterator[\"return\"]();\n            }\n          } finally {\n            if (_didIteratorError) {\n              throw _iteratorError;\n            }\n          }\n        }\n\n        requestAnimationFrame(function () {\n          return _this5.render();\n        });\n      }\n    }]);\n\n    return SmoothScroll;\n  }();\n  /***********************************/\n\n  /********** Preload stuff **********/\n  // Preload images\n\n\n  var preloadImages = function preloadImages() {\n    return new Promise(function (resolve, reject) {\n      imagesLoaded(document.querySelectorAll('.item__img'), {\n        background: true\n      }, resolve);\n    });\n  }; // And then..\n  // And then..\n\n\n  preloadImages().then(function () {\n    // Remove the loader\n    // document.body.classList.remove('loading');\n    // Get the scroll position\n    getPageYScroll(); // Initialize the Smooth Scrolling\n\n    if ($('.page-template-default').length) {\n      console.log('smoothScroll initiated');\n      new SmoothScroll();\n    }\n  });\n}\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (smoothScroll());\n\n//# sourceURL=webpack:///./src/components/global/smoothScroll/smoothScroll.js?");

/***/ }),

/***/ "./src/smoothScroll.js":
/*!*****************************!*\
  !*** ./src/smoothScroll.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _components_global_smoothScroll_smoothScroll__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/global/smoothScroll/smoothScroll */ \"./src/components/global/smoothScroll/smoothScroll.js\");\n\n\n//# sourceURL=webpack:///./src/smoothScroll.js?");

/***/ })

/******/ });