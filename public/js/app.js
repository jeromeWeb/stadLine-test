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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(7);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

//
// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
//
// require('./bootstrap');
//
// window.Vue = require('vue');
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// Vue.component('example', require('./components/Example.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// require('./hello');
__webpack_require__(2);
__webpack_require__(3);
__webpack_require__(4);
__webpack_require__(5);
__webpack_require__(6);

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// npm run watch

$(function () {

  $(document).on('change', '#just-me', function () {
    loadHistoric('justMe', $(this).is(':checked'));
  });

  $(document).on('change', '.js-sort-games', function () {
    loadHistoric('sorter', $(this).val());
  });
});

function loadHistoric(changed_type, changed_value) {
  $.ajax({
    url: baseUrl + '/historic/load',
    type: 'POST',
    data: {
      page: changed_type == 'page' ? changed_value : $('#games-pool').find('data').data('page'),
      justMe: changed_type == 'justMe' ? changed_value : $('#just-me').is(':checked'),
      sorter: changed_type == 'sorter' ? changed_value : $('.js-sort-games').val()
    },
    success: function success(response) {
      $('#games-pool').html(response);
    }
  });
}

/***/ }),
/* 3 */
/***/ (function(module, exports) {

var $win = $(window),
    home = $('.js-home'),
    chosePlyrs = $('.wrap-chose-players'),
    navBurger = $('.burger-nav'),
    sideBar = $('.sidebar'),
    startBtn = $('#startGame'),
    backHome = $('#backHome'),
    w = $win.width(),
    h = $win.height();
diag = w * w + h * h;
diag = Math.sqrt(diag), wBtn = startBtn.width(), hBtn = startBtn.height();

// Click on start button make the player chose screen appears with transition on elements

startBtn.on('click', function () {
    $this = $(this);

    $this.animate({
        height: diag,
        width: diag,
        opacity: 0,
        borderRadius: 1000
    }, 300);

    $this.find('span').add('.title').add('.logo').add('.subtitle').removeClass('moved');

    // $('.js-home').animate({
    //     opacity: 0
    // }, 300)

    home.addClass('hidden-page');
    chosePlyrs.show();

    setTimeout(function () {
        home.hide();
        chosePlyrs.find('h2, ul, > div').removeClass('moved');
        backHome.show().removeClass('opaq');
    }, 300);
});

// Click on back button go back to home
backHome.on('click', function () {
    startBtn.animate({
        height: hBtn,
        width: wBtn,
        opacity: 1,
        borderRadius: 50
    }, 300);

    startBtn.find('span').add('.title').add('.logo').add('.subtitle').addClass('moved');

    backHome.addClass('opaq');
    home.removeClass('hidden-page');
    chosePlyrs.hide();
    home.show();

    setTimeout(function () {
        chosePlyrs.find('h2, ul, > div').addClass('moved');
        backHome.show();
    }, 300);
});

// Settings button
$('.settings-js, .close-settings').on('click', function () {
    $('.settings-panel').slideToggle(200, function () {
        $(this).toggleClass('open');
    });
});

// click outside settings and sidebar close open elements
$(window).on("click", function (event) {
    // Settings close
    if ($('.settings-panel').hasClass('open') && $('.settings-panel').has(event.target).length == 0 && !$('.settings-panel').is(event.target)) {
        $('.settings-panel').slideUp(200, function () {
            $(this).removeClass('open');
        });
    }

    // sidebar
    // if (!$('#navBurger').prop('checked') && $('#navSide').has(event.target).length == 0 && !$('#navSide').is(event.target) ){
    //         $('#navBurger').prop('checked', true);
    // }
});

/***/ }),
/* 4 */
/***/ (function(module, exports) {

// Gestion du tour, boutons suivant

// $(document).on('click',".nextStepTour",function(){
//   $('body').scrollTop(0)
// } )

$(document).on('click', ".showGame", function () {
    $('.inputBet-js').slideDown(300);
    $('.dealer-js').slideUp(300);
});

$(document).on('click', ".showResult", function () {
    $('.inputBet-js').slideUp(300, function () {
        $('body').scrollTop(0);
        $('.inputBetResult-js').slideDown(300);
    });
});

$(document).on('click', ".showScore", function () {
    $('.inputBetResult-js').slideUp(300, function () {
        $('body').scrollTop(0);
        $('.score-js').slideDown(300);
    });
});

/***/ }),
/* 5 */
/***/ (function(module, exports) {

$(document).on('click', '.js-start-game', function () {
  var players = [];
  $('#player-inputs').find('li').children('input').each(function () {
    if ($(this).val() && $(this).val() != "") {
      players.push($(this).val());
    }
  });

  if (players.length < 3) {
    $('.error-players').html("Veuillez entrer au moins trois noms");
  } else {
    $.ajax({
      url: window.location.origin + '/game/create',
      type: 'POST',
      data: {
        players: JSON.stringify(players)
      },
      success: function success(response) {
        $('#main-section').html(response);
      }
    });
  }
});

/***/ }),
/* 6 */
/***/ (function(module, exports) {

var avatarBet = $('[data-stape="bet"] .players'),
    avatarResult = $('[data-stape="result"] .players'),
    avatarScore = $('[data-stape="score"] .players'),
    avatarScoreParty = $('[data-stape="scoreParty"] .players'),
    avatarDealer = $('.dealer-js');
tabs = [avatarBet, avatarResult, avatarScore, avatarScoreParty];

for (tab in tabs) {
	for (var i = 1; i <= tabs[tab].length; i++) {
		tabs[tab].eq('' + (i - 1)).find('.avatar').addClass('avatar' + i);
	}
}

$('.dealer-js').find('.avatar').addClass('avatarXl').removeClass('avatar');

/***/ }),
/* 7 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);