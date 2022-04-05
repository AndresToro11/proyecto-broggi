/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\xampp\\htdocs\\proyecto-broggi\\resources\\js\\app.js: Unexpected token, expected \",\" (45:0)\n\n\u001b[0m \u001b[90m 43 |\u001b[39m \u001b[90m//------------------------------------------- Expedientes --------------------------------\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 44 |\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 45 |\u001b[39m \u001b[33mVue\u001b[39m\u001b[33m.\u001b[39mcomponent(\u001b[32m'expedientes'\u001b[39m\u001b[33m,\u001b[39m require(\u001b[32m'./components/expedientes.vue'\u001b[39m)\u001b[33m.\u001b[39m\u001b[36mdefault\u001b[39m)\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m    |\u001b[39m \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 46 |\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 47 |\u001b[39m \u001b[90m//--------------------------------------------- Grafico ----------------------------------\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 48 |\u001b[39m\u001b[0m\n    at instantiate (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:72:32)\n    at constructor (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:358:12)\n    at Parser.raise (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:3334:19)\n    at Parser.unexpected (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:3372:16)\n    at Parser.expect (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:4001:28)\n    at Parser.parseCallExpressionArguments (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:12747:14)\n    at Parser.parseCoverCallAndAsyncArrowHead (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:12662:29)\n    at Parser.parseSubscript (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:12587:19)\n    at Parser.parseSubscripts (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:12556:19)\n    at Parser.parseExprSubscripts (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:12545:17)\n    at Parser.parseUpdate (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:12518:21)\n    at Parser.parseMaybeUnary (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:12489:23)\n    at Parser.parseMaybeUnaryOrPrivate (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:12283:61)\n    at Parser.parseExprOps (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:12290:23)\n    at Parser.parseMaybeConditional (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:12260:23)\n    at Parser.parseMaybeAssign (C:\\xampp\\htdocs\\proyecto-broggi\\node_modules\\@babel\\parser\\lib\\index.js:12213:21)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/sass/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;