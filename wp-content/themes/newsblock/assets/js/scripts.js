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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});
// Create csco object.
var csco = {
	addAction: function addAction(x, y, z) {
		return;
	}
};

if ('undefined' !== typeof wp && 'undefined' !== typeof wp.hooks) {
	csco.addAction = wp.hooks.addAction;
}

/**
 * Window size
 */
var $ = jQuery;
var $window = $(window);
var $doc = $(document);
var $body = $('body');

var wndW = 0;
var wndH = 0;
var docH = 0;

function csGetWndSize() {
	exports.wndW = wndW = $window.width();
	exports.wndH = wndH = $window.height();
	exports.docH = docH = $doc.height();
}

$window.on('resize load orientationchange', csGetWndSize);

csGetWndSize();

/**
 * Throttle scroll
 * thanks: https://jsfiddle.net/mariusc23/s6mLJ/31/
 */
var csHideOnScrollList = [];

var csDidScroll = void 0;
var csLastST = 0;

$window.on('scroll load resize orientationchange', function () {
	if (csHideOnScrollList.length) {
		csDidScroll = true;
	}
});

function csHasScrolled() {
	var ST = $window.scrollTop();

	var type = null;

	if (ST > csLastST) {
		type = 'down';
	} else if (ST < csLastST) {
		type = 'up';
	} else {
		type = 'none';
	}

	if (ST === 0) {
		type = 'start';
	} else if (ST >= docH - wndH) {
		type = 'end';
	}

	csHideOnScrollList.forEach(function (item) {
		if (typeof item === 'function') {
			item(type, ST, csLastST, $window);
		}
	});

	csLastST = ST;
}

setInterval(function () {
	if (csDidScroll) {
		csDidScroll = false;
		window.requestAnimationFrame(csHasScrolled);
	}
}, 250);

function csThrottleScroll(callback) {
	csHideOnScrollList.push(callback);
}

/**
 * In Viewport checker
 */
$.fn.isInViewport = function () {
	var elementTop = $(this).offset().top;
	var elementBottom = elementTop + $(this).outerHeight();

	var viewportTop = $(window).scrollTop();
	var viewportBottom = viewportTop + $(window).height();

	return elementBottom > viewportTop && elementTop < viewportBottom;
};

/**
 * Cookies
 */
function csGetCookie(name) {
	var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
	return matches ? decodeURIComponent(matches[1]) : undefined;
}

function csSetCookie(name, value) {
	var props = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};


	props = {
		path: '/'
	};

	if (props.expires instanceof Date) {
		props.expires = props.expires.toUTCString();
	}

	var updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

	for (var optionKey in props) {
		updatedCookie += "; " + optionKey;
		var optionValue = props[optionKey];
		if (optionValue !== true) {
			updatedCookie += "=" + optionValue;
		}
	}

	document.cookie = updatedCookie;
}

exports.$ = $;
exports.$window = $window;
exports.$doc = $doc;
exports.$body = $body;
exports.csco = csco;
exports.wndW = wndW;
exports.wndH = wndH;
exports.docH = docH;
exports.csThrottleScroll = csThrottleScroll;
exports.csGetCookie = csGetCookie;
exports.csSetCookie = csSetCookie;

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(2);
__webpack_require__(3);
__webpack_require__(4);
__webpack_require__(5);
__webpack_require__(6);
__webpack_require__(7);
__webpack_require__(8);
__webpack_require__(9);
__webpack_require__(10);
__webpack_require__(11);
__webpack_require__(12);
__webpack_require__(13);
__webpack_require__(14);
__webpack_require__(15);
module.exports = __webpack_require__(16);


/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

(function () {
	(0, _utility.$)(document).on('click', '.cs-entry__comments-show button', function (e) {
		(0, _utility.$)('.cs-entry__comments-collapse').show();
		(0, _utility.$)('.cs-entry__comments-show').remove();
	});
})(); /** ----------------------------------------------------------------------------
       * Comments Dropdown */

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

(function () {
	var ticking = false;

	var update = function update() {

		// Sidebar.
		// -----------------------------------.
		(0, _utility.$)('.cs-site-primary').each(function () {

			var content = (0, _utility.$)(this).find('.entry-content');
			var sidebar = (0, _utility.$)(this).find('.cs-entry__metabar-inner');

			// Vars offset.
			var offsetTop = 20;
			var offsetBottom = -20;

			// Search elements.
			var elements = [];

			elements.push('> .alignfull');
			elements.push('> .alignwide');

			var layouts = (0, _utility.$)(content).find(elements.join(','));

			if (0 === sidebar.length) {
				return;
			}
			if (0 === layouts.length) {
				return;
			}

			var disabled = false;

			// Get sidebar values.
			var sidebarTop = (0, _utility.$)(sidebar).offset().top;
			var sidebarHeight = (0, _utility.$)(sidebar).outerHeight(true);

			for (var i = 0; i < (0, _utility.$)(layouts).length; ++i) {
				if ('none' === (0, _utility.$)(layouts[i]).css('transform')) {
					continue;
				}

				// Get layout values.
				var layoutTop = (0, _utility.$)(layouts[i]).offset().top;
				var layoutHeight = (0, _utility.$)(layouts[i]).outerHeight(true);

				// Calc points.
				var pointTop = layoutTop - offsetTop;
				var pointBottom = layoutTop + layoutHeight + offsetBottom;

				// Detect sidebar location.
				if (sidebarTop + sidebarHeight >= pointTop && sidebarTop <= pointBottom) {
					disabled = true;
				}
			}

			if (disabled) {
				(0, _utility.$)(sidebar).css('opacity', '0');
			} else {
				(0, _utility.$)(sidebar).css('opacity', '1');
			}
		});

		// Ticking.
		ticking = false;
	};

	var requestTick = function requestTick() {
		if (!ticking) {
			window.requestAnimationFrame(update);
			ticking = true;
		}
	};

	var onProcess = function onProcess() {
		requestTick();
	};

	(0, _utility.$)(window).on('scroll', onProcess);
	(0, _utility.$)(window).on('resize', onProcess);
	(0, _utility.$)(window).on('image-load', onProcess);
	(0, _utility.$)(window).on('post-load', onProcess);
})(); /** ----------------------------------------------------------------------------
       * Detect Aligment */

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

(function () {

	var $entryType = (0, _utility.$)('.cnvs-block-posts-layout-tile-type-2 .cs-entry__outer, .cnvs-block-posts-layout-tile-type-3 .cs-entry__outer'),
	    isHovered = false;

	function process(el) {
		var currentWidth = _utility.$window.width(),
		    maxWidth = 1020,
		    $el = null;

		if (el) {
			$el = (0, _utility.$)(el);
		} else {
			$el = $entryType;
		}

		if (currentWidth < maxWidth) {
			$entryType.attr('data-scheme', 'inverse');
		} else {
			$entryType.removeAttr('data-scheme');

			if (isHovered) {
				$el.attr('data-scheme', 'inverse');
			} else {
				$entryType.removeAttr('data-scheme');
			}
		}
	}

	$entryType.hover(function () {
		isHovered = true;
		process(this);
	}, function () {
		isHovered = false;
		process(this);
	});

	_utility.$window.resize(function () {
		process();
	});

	process();
})(); /** ----------------------------------------------------------------------------
       * Comments Dropdown */

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

var largeHoverBlock = (0, _utility.$)('.cnvs-block-posts-layout-large-type-8 .cs-layout-large__col, .cnvs-block-posts-layout-large-type-9 .cs-layout-large__col'); /** ----------------------------------------------------------------------------
                                                                                                                                                                    * Comments Dropdown */

(function () {
	largeHoverBlock.hover(function () {

		(0, _utility.$)(this).addClass('active').siblings().removeClass('active').closest('.cs-layout-large__wrap').find('.cs-overlay-background').removeClass('active').eq((0, _utility.$)(this).index()).addClass('active');
	}, function () {

		(0, _utility.$)(this).closest('.cs-layout-large__wrap').find('.cs-overlay-background').removeClass('active').eq((0, _utility.$)(this).index()).addClass('active');
	});
})();

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; /**
                                                                                                                                                                                                                                                                               * AJAX Load More.
                                                                                                                                                                                                                                                                               *
                                                                                                                                                                                                                                                                               * Contains functions for AJAX Load More.
                                                                                                                                                                                                                                                                               */

var _utility = __webpack_require__(0);

if ('undefined' === typeof window.load_more_query) {
	window.load_more_query = [];
}

/**
 * Get next posts
 */
function csco_ajax_get_posts(object) {
	var container = (0, _utility.$)(object).closest('.cs-posts-area');

	var settings = (0, _utility.$)(object).data('settings');
	var page = (0, _utility.$)(object).data('page');

	(0, _utility.$)(object).data('loading', true);

	// Set button text to Load More.
	(0, _utility.$)(object).text(settings.translation.loading);

	var data = {
		action: 'csco_ajax_load_more',
		page: page,
		posts_per_page: settings.posts_per_page,
		query_data: settings.query_data,
		attributes: settings.attributes,
		options: settings.options,
		_ajax_nonce: settings.nonce
	};

	// Request Url.
	var csco_pagination_url;

	if ('ajax_restapi' === settings.type) {
		csco_pagination_url = settings.rest_url;
	} else {
		csco_pagination_url = settings.url;
	}

	// Send Request.
	_utility.$.post(csco_pagination_url, data, function (res) {
		if (res.success) {

			// Get the posts.
			var data = (0, _utility.$)(res.data.content);

			// Check if there're any posts.
			if (data.length) {

				data.imagesLoaded(function () {

					// Append new posts to list, standard and grid archives.
					(0, _utility.$)(container).find('.cs-posts-area__main').append(data);

					// WP Post Load trigger.
					(0, _utility.$)(document.body).trigger('post-load');

					// Reinit Facebook widgets.
					if ((0, _utility.$)('#fb-root').length && 'object' === (typeof FB === 'undefined' ? 'undefined' : _typeof(FB))) {
						FB.XFBML.parse();
					}

					// Set button text to Load More.
					(0, _utility.$)(object).text(settings.translation.load_more);

					// Increment a page.
					page = page + 1;

					(0, _utility.$)(object).data('page', page);

					// Set the loading state.
					(0, _utility.$)(object).data('loading', false);
				});
			}

			// Remove Button on Posts End.
			if (res.data.posts_end || !data.length) {

				// Remove Load More button.
				(0, _utility.$)(object).remove();
			}
		} else {
			// console.log(res);
		}
	}).fail(function (xhr, textStatus, e) {
		// console.log(xhr.responseText);
	});
}

/**
 * Initialization Load More
 */
function csco_load_more_init(infinite) {
	(0, _utility.$)('.cs-posts-area').each(function () {

		if ((0, _utility.$)(this).data('init')) {
			return false;
		}

		var csco_ajax_settings;

		if (typeof csco_ajax_pagination !== 'undefined') {
			csco_ajax_settings = csco_ajax_pagination;
		}

		var archive_data = (0, _utility.$)(this).data('posts-area');

		if (archive_data) {
			csco_ajax_settings = JSON.parse(window.atob(archive_data));
		}

		if (csco_ajax_settings) {

			if (!infinite && csco_ajax_settings.infinite_load) {
				return false;
			}

			// Add load more button.
			(0, _utility.$)(this).append('<div class="cs-posts-area__pagination"><button class="cs-load-more">' + csco_ajax_settings.translation.load_more + '</button></div>');

			// Set load more settings.
			(0, _utility.$)(this).find('.cs-load-more').data('settings', csco_ajax_settings);
			(0, _utility.$)(this).find('.cs-load-more').data('page', 2);
			(0, _utility.$)(this).find('.cs-load-more').data('loading', false);
			(0, _utility.$)(this).find('.cs-load-more').data('scrollHandling', {
				allow: _utility.$.parseJSON(csco_ajax_settings.infinite_load),
				delay: 400
			});
		}

		(0, _utility.$)(this).data('init', true);
	});
}

csco_load_more_init(true);

_utility.csco.addAction('canvas.components.serverSideRender.onChange', 'posts-init-loadmore', function (props) {
	if ('canvas/posts' === props.block) {
		csco_load_more_init(false);
	}
});

// On Scroll Event.
(0, _utility.$)(window).scroll(function () {

	(0, _utility.$)('.cs-posts-area .cs-load-more').each(function () {

		var loading = (0, _utility.$)(this).data('loading');
		var scrollHandling = (0, _utility.$)(this).data('scrollHandling');

		if ('undefined' === typeof scrollHandling) {
			return;
		}

		if ((0, _utility.$)(this).length && !loading && scrollHandling.allow) {

			scrollHandling.allow = false;

			(0, _utility.$)(this).data('scrollHandling', scrollHandling);

			var object = this;

			setTimeout(function () {
				var scrollHandling = (0, _utility.$)(object).data('scrollHandling');

				if ('undefined' === typeof scrollHandling) {
					return;
				}

				scrollHandling.allow = true;

				(0, _utility.$)(object).data('scrollHandling', scrollHandling);
			}, scrollHandling.delay);

			var offset = (0, _utility.$)(this).offset().top - (0, _utility.$)(window).scrollTop();
			if (4000 > offset) {
				csco_ajax_get_posts(this);
			}
		}
	});
});

// On Click Event.
(0, _utility.$)('body').on('click', '.cs-load-more', function () {
	var loading = (0, _utility.$)(this).data('loading');

	if (!loading) {
		csco_ajax_get_posts(this);
	}
});

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; /**
                                                                                                                                                                                                                                                                               * AJAX Auto Load Next Post.
                                                                                                                                                                                                                                                                               *
                                                                                                                                                                                                                                                                               * Contains functions for AJAX Auto Load Next Post.
                                                                                                                                                                                                                                                                               */

var _utility = __webpack_require__(0);

/**
 * Check if Load Nextpost is defined by the wp_localize_script
 */
if (typeof csco_ajax_nextpost !== 'undefined') {

	var objNextparent = (0, _utility.$)('.cs-site-primary > .cs-site-content'),
	    objNextsect = '.cs-nextpost-section',
	    objNextpost = null,
	    currentNTitle = document.title,
	    currentNLink = window.location.href,
	    loadingNextpost = false,
	    scrollNextpost = {
		allow: true,
		reallow: function reallow() {
			scrollNextpost.allow = true;
		},
		delay: 400 //(milliseconds) adjust to the highest acceptable value
	};

	// Init.
	if (csco_ajax_nextpost.next_post) {
		(0, _utility.$)(objNextparent).after('<div class="cs-nextpost-inner"></div>');

		objNextpost = (0, _utility.$)('.cs-nextpost-inner');
	}
}

/**
 * Get next post
 */
function csco_ajax_get_nextpost() {
	loadingNextpost = true;

	// Set class loading.
	var data = {
		action: 'csco_ajax_load_nextpost',
		post_type: csco_ajax_nextpost.post_type,
		not_in: csco_ajax_nextpost.not_in,
		current_user: csco_ajax_nextpost.current_user,
		nonce: csco_ajax_nextpost.nonce,
		next_post: csco_ajax_nextpost.next_post
	};

	// Request Url.
	var csco_ajax_nextpost_url;
	if ('ajax_restapi' === csco_ajax_nextpost.type) {
		csco_ajax_nextpost_url = csco_ajax_nextpost.rest_url;
	} else {
		csco_ajax_nextpost_url = csco_ajax_nextpost.url;
	}

	// Send Request.
	_utility.$.post(csco_ajax_nextpost_url, data, function (res) {

		csco_ajax_nextpost.next_post = false;

		if (res.success) {

			// Get the posts.
			var data = (0, _utility.$)(res.data.content);

			// Check if there're any posts.
			if (data.length) {
				// Set the loading state.
				loadingNextpost = false;

				// Set not_in.
				csco_ajax_nextpost.not_in = res.data.not_in;

				// Set next data.
				csco_ajax_nextpost.next_post = res.data.next_post;

				// Remove loader.
				(0, _utility.$)(objNextpost).siblings('.cs-nextpost-loading').remove();

				// Append new post.
				(0, _utility.$)(objNextpost).append(data);

				// Reinit facebook.
				if ((0, _utility.$)('#fb-root').length && 'object' === (typeof FB === 'undefined' ? 'undefined' : _typeof(FB))) {
					FB.XFBML.parse();
				}

				(0, _utility.$)(document.body).trigger('post-load');
			}
		} else {
			// console.log(res);
		}
	}).fail(function (xhr, textStatus, e) {
		// console.log(xhr.responseText);
	});
}

/**
 * Check if Load Nextpost is defined by the wp_localize_script
 */
if (typeof csco_ajax_nextpost !== 'undefined') {

	// On Scroll Event.
	(0, _utility.$)(window).scroll(function () {
		var scrollTop = (0, _utility.$)(window).scrollTop();

		// Init nextpost.
		if (csco_ajax_nextpost.next_post) {

			if (objNextpost.length && !loadingNextpost && scrollNextpost.allow) {
				scrollNextpost.allow = false;
				setTimeout(scrollNextpost.reallow, scrollNextpost.delay);
				// Calc current offset.
				var offset = objNextpost.offset().top + objNextpost.innerHeight() - scrollTop;
				// Load nextpost.
				if (4000 > offset) {
					(0, _utility.$)(objNextpost).after('<div class="cs-nextpost-loading"></div>');

					csco_ajax_get_nextpost();
				}
			}
		}

		// Reset browser data link.
		var objFirst = (0, _utility.$)(objNextsect).first();

		if (objFirst.length) {
			var firstTop = (0, _utility.$)(objFirst).offset().top;
			// If there has been a change.
			if (scrollTop < firstTop && window.location.href !== currentNLink) {
				document.title = currentNTitle;
				window.history.pushState(null, currentNTitle, currentNLink);
			}
		}

		// Set browser data link.
		(0, _utility.$)(objNextsect).each(function (index, elem) {

			var elemTop = (0, _utility.$)(elem).offset().top;
			var elemHeight = (0, _utility.$)(elem).innerHeight();

			if (scrollTop > elemTop && scrollTop < elemTop + elemHeight) {
				// If there has been a change.
				if (window.location.href !== (0, _utility.$)(elem).data('url')) {
					// New title.
					document.title = (0, _utility.$)(elem).data('title');
					// New link.
					window.history.pushState(null, (0, _utility.$)(elem).data('title'), (0, _utility.$)(elem).data('url'));
					// Google Analytics.
					if (typeof gtag === 'function' && _typeof(window.gaData) === 'object') {

						var trackingId = Object.keys(window.gaData)[0];
						if (trackingId) {
							gtag('config', trackingId, {
								'page_title': (0, _utility.$)(elem).data('title'),
								'page_location': (0, _utility.$)(elem).data('url')
							});

							gtag('event', 'page_view', { 'send_to': trackingId });
						}
					}
				}
			}
		});
	});
}

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

(function () {
	/*
  * Load Mega Menu Posts
  */
	function cscoLoadMenuPosts(menuItem) {
		var dataTerm = menuItem.children('a').data('term'),
		    dataPosts = menuItem.children('a').data('posts'),
		    dataNumberposts = menuItem.children('a').data('numberposts'),
		    menuContainer,
		    postsContainer;

		// Containers.
		if (menuItem.hasClass('cs-mega-menu-term')) {
			menuContainer = menuItem;
			postsContainer = menuContainer.find('.cs-mm__posts');
		}

		if (menuItem.hasClass('cs-mega-menu-posts')) {
			menuContainer = menuItem;
			postsContainer = menuContainer.find('.cs-mm__posts');
		}

		if (menuItem.hasClass('cs-mega-menu-child-term')) {
			menuContainer = menuItem.closest('.sub-menu');
			postsContainer = menuContainer.find('.cs-mm__posts[data-term="' + dataTerm + '"]');
		}

		// Check Menu Container.
		if (!menuContainer || typeof menuContainer === 'undefined') {
			return false;
		}

		// Check Container.
		if (!postsContainer || typeof postsContainer === 'undefined') {
			return false;
		}

		// Set Active.
		menuContainer.find('.menu-item, .cs-mm__posts').removeClass('cs-active-item');

		menuItem.addClass('cs-active-item');

		if (postsContainer) {
			postsContainer.addClass('cs-active-item');
		}

		// Check Loading.
		if (menuItem.hasClass('cs-mm-loading') || menuItem.hasClass('loaded')) {
			return false;
		}

		// Create Data.
		var data = {
			'term': dataTerm,
			'posts': dataPosts,
			'per_page': dataNumberposts
		};

		if ('undefined' === typeof csco_mega_menu) {
			return;
		}

		// Get Results.
		_utility.$.ajax({
			url: csco_mega_menu.rest_url,
			type: 'GET',
			data: data,
			global: false,
			async: true,
			beforeSend: function beforeSend() {
				menuItem.addClass('cs-mm-loading');
				postsContainer.addClass('cs-mm-loading');
			},
			success: function success(res) {
				if (res.status && 'success' === res.status) {

					// Set the loaded state.
					menuItem.addClass('loaded');
					postsContainer.addClass('loaded');

					// Check if there're any posts.
					if (res.content && res.content.length) {

						(0, _utility.$)(res.content).imagesLoaded(function () {

							// Append Data.
							postsContainer.html(res.content);
						});
					}
				}
			},
			complete: function complete() {
				// Set the loading state.
				menuItem.removeClass('cs-mm-loading');
				postsContainer.removeClass('cs-mm-loading');
			}
		});
	}

	/*
  * Get First Tab
  */
	function cscoGetFirstTab(container) {

		var firstTab = false;

		container.find('.cs-mega-menu-child').each(function (index, el) {
			if ((0, _utility.$)(el).hasClass('cs-mega-menu-child')) {
				firstTab = (0, _utility.$)(el);
				return false;
			}
		});

		return firstTab;
	}

	/*
  * Menu on document ready
  */
	(0, _utility.$)(document).ready(function () {

		/*
   * Get Menu Posts on Hover
   */
		(0, _utility.$)('.cs-header__nav .menu-item.cs-mega-menu-posts').on('mouseenter', function () {
			cscoLoadMenuPosts((0, _utility.$)(this));
		});
		(0, _utility.$)('.cs-header__nav .menu-item.cs-mega-menu-term').on('mouseenter', function () {
			cscoLoadMenuPosts((0, _utility.$)(this));
		});
		(0, _utility.$)('.cs-header__nav .menu-item.cs-mega-menu-child').on('mouseenter', function () {
			cscoLoadMenuPosts((0, _utility.$)(this));
		});

		/*
   * Load First Tab on Mega Menu Hover
   */
		(0, _utility.$)('.cs-header__nav .menu-item.cs-mega-menu-terms').on('mouseenter', function () {
			var tab = cscoGetFirstTab((0, _utility.$)(this));

			if (tab) {
				cscoLoadMenuPosts(tab);
			}
		});
	});

	/*
  * Load First Tab on Navbar Ready.
  */
	(0, _utility.$)(document, '.cs-header__nav').ready(function () {
		var tab = false;

		// Autoload First Tab.
		(0, _utility.$)('.cs-header__nav .menu-item.cs-mega-menu-terms').each(function (index, el) {
			tab = cscoGetFirstTab((0, _utility.$)(this));

			if (tab) {
				cscoLoadMenuPosts(tab);
			}
		});

		// Autoload Posts.
		(0, _utility.$)('.cs-header__nav .menu-item.cs-mega-menu-posts').each(function (index, el) {
			cscoLoadMenuPosts((0, _utility.$)(this));
		});

		// Autoload Term.
		(0, _utility.$)('.cs-header__nav .menu-item.cs-mega-menu-term').each(function (index, el) {
			cscoLoadMenuPosts((0, _utility.$)(this));
		});
	});
})(); /** ----------------------------------------------------------------------------
       * Mega Menu */

/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

var cscoNavigation = {}; /** ----------------------------------------------------------------------------
                          * Navigation */

(function () {
	var $this;
	cscoNavigation = {
		/** Initialize */
		init: function init(e) {
			if ((0, _utility.$)('body').hasClass('wp-admin')) {
				return;
			}
			$this = cscoNavigation;
			// Init events.
			$this.events(e);
		},
		/** Events */
		events: function events(e) {
			// DOM Load
			window.addEventListener('load', function (e) {
				$this.smartLevels(e);
				$this.adaptTablet(e);
				$this.stickyScroll(e);
			});
			// Resize
			window.addEventListener('resize', function (e) {
				$this.smartLevels(e);
				$this.adaptTablet(e);
				$this.stickyScroll(e);
			});
		},
		/** Smart multi-Level menu */
		smartLevels: function smartLevels(e) {
			var windowWidth = _utility.$window.width();
			// Reset Calc.
			(0, _utility.$)('.cs-header__nav-inner li').removeClass('cs-sm__level');
			(0, _utility.$)('.cs-header__nav-inner li').removeClass('cs-sm-position-left cs-sm-position-right');
			(0, _utility.$)('.cs-header__nav-inner li .sub-menu').removeClass('cs-mm__position-init');
			// Set Settings.
			(0, _utility.$)('.cs-header__nav-inner > li.menu-item').not('.cs-mm').each(function (index, parent) {
				var position = 'cs-sm-position-right'; //right
				var objPrevWidth = 0;
				(0, _utility.$)(parent).find('.sub-menu').each(function (index, el) {
					// Reset child levels.
					(0, _utility.$)(el).parent().next('li').addClass('cs-sm__level');
					if ((0, _utility.$)(el).parent().hasClass('cs-sm__level')) {
						(0, _utility.$)(el).parent().removeClass('cs-mm-level');
						position = 'cs-sm-position-right'; //right
						objPrevWidth = 0;
					}
					// Find out position items.
					var offset = (0, _utility.$)(el).offset();
					var objOffset = offset.left;
					if ('cs-sm-position-right' === position && (0, _utility.$)(el).outerWidth() + objOffset > windowWidth) {
						position = 'cs-sm-position-left';
					}
					if ('cs-sm-position-left' === position && objOffset - ((0, _utility.$)(el).outerWidth() + objPrevWidth) < 0) {
						position = 'cs-sm-position-right'; //right
					}
					objPrevWidth = (0, _utility.$)(el).outerWidth();
					(0, _utility.$)(el).addClass('cs-sm-position-init').parent().addClass(position);
				});
			});
		},
		/** Adapting nav bar for tablet */
		adaptTablet: function adaptTablet(e) {
			// Click outside.
			(0, _utility.$)(document).on('touchstart', function (e) {
				if (!(0, _utility.$)(e.target).closest('.cs-header__nav-inner').length) {
					(0, _utility.$)('.cs-header__nav-inner .menu-item-has-children').removeClass('submenu-visible');
				} else {
					(0, _utility.$)(e.target).parents('.menu-item').siblings().find('.menu-item').removeClass('submenu-visible');
					(0, _utility.$)(e.target).parents('.menu-item').siblings().closest('.menu-item').removeClass('submenu-visible');
				}
			});
			(0, _utility.$)('.cs-header__nav-inner .menu-item-has-children').each(function (e) {
				// Reset class.
				(0, _utility.$)(this).removeClass('submenu-visible');
				// Remove expanded.
				(0, _utility.$)(this).find('> a > .expanded').remove();
				// Add a caret.
				if ('ontouchstart' in document.documentElement) {
					(0, _utility.$)(this).find('> a').append('<span class="expanded"></span>');
				}
				// Check touch device.
				(0, _utility.$)(this).addClass('ontouchstart' in document.documentElement ? 'touch-device' : '');
				(0, _utility.$)('> a .expanded', this).on('touchstart', function (e) {
					e.preventDefault();
					(0, _utility.$)(this).closest('.menu-item-has-children').toggleClass('submenu-visible');
				});
				if ('#' === (0, _utility.$)('> a', this).attr('href')) {
					(0, _utility.$)('> a', this).on('touchstart', function (e) {
						e.preventDefault();
						if (!(0, _utility.$)(e.target).hasClass('expanded')) {
							(0, _utility.$)(this).closest('.menu-item-has-children').toggleClass('submenu-visible');
						}
					});
				}
			});
		},
		/** Make nav bar sticky */
		stickyScroll: function stickyScroll(e) {
			// Get css variables
			var headerLargeHeight = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--cs-header-initial-height')),
			    headerCompactHeight = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--cs-header-height'));
			//Get header elements
			var headerStick = (0, _utility.$)('.cs-navbar-sticky-enabled .cs-header'),
			    headerBefore = (0, _utility.$)('.cs-header-before'),
			    headerStretch = (0, _utility.$)('.cs-header-stretch'),
			    headerStretchInaccuracy = headerStretch.length > 0 ? 10 : 0,
			    headerStickHeight = (0, _utility.$)('.cs-navbar-sticky-enabled .cs-header-stretch'),
			    wpAdminBar = (0, _utility.$)('#wpadminbar'),
			    headerSearch = (0, _utility.$)('.cs-search'),
			    offCanvas = (0, _utility.$)('.cs-offcanvas');
			//Comb out the heights
			var headerDelta = headerStickHeight.length > 0 ? headerLargeHeight - headerCompactHeight : 0,
			    wpAdminBarHeight = wpAdminBar.length > 0 ? wpAdminBar.outerHeight() : 0,
			    smartStart = headerBefore.length > 0 ? headerBefore.offset().top : headerStick.length > 0 ? headerStick.offset().top + wpAdminBarHeight : wpAdminBarHeight;
			//Set values to hide
			var scrollPoint = 200,
			    scrollPrev = 200,
			    scrollUpAmount = 0,
			    windowWidth = _utility.$window.width();
			(0, _utility.$)(window).scroll(function () {
				var scrolled = (0, _utility.$)(window).scrollTop(),
				    headerStickPosition = headerStick.length > 0 ? headerStick.offset().top : 0;
				if (scrolled > smartStart + headerDelta + scrollPoint + headerStretchInaccuracy && scrolled > scrollPrev) {
					headerStick.addClass('cs-scroll-active');
					headerSearch.slideUp();
					(0, _utility.$)(document).trigger('sticky-nav-hide');
				} else {
					if (scrollUpAmount >= scrollPoint || scrolled === 0) {
						headerStick.removeClass('cs-scroll-active');
						(0, _utility.$)(document).trigger('sticky-nav-visible');
					}
				}
				if (headerStickHeight.length > 0) {
					if (headerStickPosition <= scrolled + wpAdminBarHeight && scrolled > smartStart + headerDelta) {
						headerStick.addClass('cs-scroll-sticky');
						(0, _utility.$)(document).trigger('stretch-nav-to-small');
					} else {
						if (scrolled <= smartStart) {
							headerStick.removeClass('cs-scroll-sticky');
							(0, _utility.$)(document).trigger('stretch-nav-to-big');
						}
					}
				} else {
					if (headerStickPosition <= scrolled + wpAdminBarHeight && scrolled + wpAdminBarHeight > smartStart) {
						headerStick.addClass('cs-scroll-sticky');
						if (headerStretch.length > 0) {
							(0, _utility.$)(document).trigger('stretch-nav-to-small');
						}
					} else {
						headerStick.removeClass('cs-scroll-sticky');
						if (headerStretch.length > 0) {
							(0, _utility.$)(document).trigger('stretch-nav-to-big');
						}
					}
				}
				if (scrolled < scrollPrev) {
					scrollUpAmount += scrollPrev - scrolled;
				} else {
					scrollUpAmount = 0;
				}
				if (wpAdminBar.length > 0 && _utility.wndW <= 600 && scrolled >= wpAdminBarHeight) {
					offCanvas.addClass('cs-offcanvas_scrolled');
				} else {
					offCanvas.removeClass('cs-offcanvas_scrolled');
				}
				scrollPrev = scrolled;
			});
		}
	};
})();
// Initialize.
cscoNavigation.init();

/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

(function () {
	(0, _utility.$)('.cs-header__offcanvas-toggle, .cs-site-overlay, .cs-offcanvas__toggle').on('click', function (e) {
		e.preventDefault();

		// Transition.
		if (!_utility.$body.hasClass('cs-offcanvas-active')) {
			_utility.$body.addClass('cs-offcanvas-transition');
		} else {
			setTimeout(function () {
				_utility.$body.removeClass('cs-offcanvas-transition');
			}, 400);
		}

		// Toogle offcanvas.
		_utility.$body.toggleClass('cs-offcanvas-active');
	});
})(); /** ----------------------------------------------------------------------------
       * Offcanvas */

/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

(function () {
	/**
  * Add max-width & max-height to <iframe> elements, depending on their width & height props.
  */
	function initResponsiveEmbeds() {
		var proportion, parentWidth;

		// Loop iframe elements.
		(0, _utility.$)('.entry-content').find('iframe').each(function (index, iframe) {
			// Don't handle if the parent automatically resizes itself.
			if ((0, _utility.$)(iframe).closest('div').is('[data-video-start], [data-video-end]')) {
				return;
			}
			// Only continue if the iframe has a width & height defined.
			if (iframe.width && iframe.height) {
				// Calculate the proportion/ratio based on the width & height.
				proportion = parseFloat(iframe.width) / parseFloat(iframe.height);
				// Get the parent element's width.
				parentWidth = parseFloat(window.getComputedStyle(iframe.parentElement, null).width.replace('px', ''));
				// Set the max-width & height.
				iframe.style.maxWidth = '100%';
				iframe.style.maxHeight = Math.round(parentWidth / proportion).toString() + 'px';
			}
		});
	}

	// Document ready.
	_utility.$doc.ready(function () {
		initResponsiveEmbeds();
	});

	// Post load.
	_utility.$body.on('post-load', function () {
		initResponsiveEmbeds();
	});

	// Document resize.
	_utility.$window.on('resize', function () {
		initResponsiveEmbeds();
	});

	// Run on initial load.
	initResponsiveEmbeds();
})(); /** ----------------------------------------------------------------------------
       * Responsive Embeds */

/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

var cscoDarkMode = {}; /** ----------------------------------------------------------------------------
                        * Color Scheme Toogle */

(function () {
	var $this;

	cscoDarkMode = {

		/** Initialize */
		init: function init(e) {
			$this = cscoDarkMode;

			// Init events.
			$this.events(e);
		},

		/** Events */
		events: function events(e) {
			if ((0, _utility.$)('body').hasClass('wp-admin')) {
				return;
			}

			// Window Load
			window.addEventListener('load', function (e) {
				$this.loadMode(e);
			});

			// Switch
			(0, _utility.$)(document).on('click', '.cs-site-scheme-toggle', function (e) {
				$this.changeMode(e);
			});
		},

		/** Detect Color Scheme */
		detectColorScheme: function detectColorScheme(color) {
			var level = 190;

			// Set alpha channel.
			var alpha = 1;

			var rgba = [255, 255, 255];

			var color_rgba = false;

			// Trim color.
			color = color.trim();

			// If HEX format.
			if ('#' === color[0]) {
				// Remove '#' from start.
				color = color.replace('#', '').trim();

				if (3 === color.length) {
					color = color[0] + color[0] + color[1] + color[1] + color[2] + color[2];
				}

				rgba[0] = parseInt(color.substr(0, 2), 16);
				rgba[1] = parseInt(color.substr(2, 2), 16);
				rgba[2] = parseInt(color.substr(4, 2), 16);
			} else if (color_rgba = color.replace(/\s/g, '').match(/^rgba?\((\d+),(\d+),(\d+),?([^,\s)]+)?/i)) {
				// Convert RGB or RGBA.
				rgba[0] = parseInt(color_rgba[1]);
				rgba[1] = parseInt(color_rgba[2]);
				rgba[2] = parseInt(color_rgba[3]);

				if (color_rgba[4] !== undefined) {
					alpha = parseFloat(color_rgba[4]);
				}
			}

			// Apply alpha channel.
			rgba.forEach(function myFunction(channel, key, stack) {
				stack[key] = String(channel + Math.ceil((255 - channel) * (1 - alpha))).padStart(2, '0');
			});

			// Set default scheme.
			var scheme = 'default';

			// Get brightness.
			var brightness = (rgba[0] * 299 + rgba[1] * 587 + rgba[2] * 114) / 1000;

			// If color gray.
			if (rgba[0] === rgba[1] && rgba[1] === rgba[2]) {
				if (brightness < level) {
					scheme = 'dark';
				}
			} else {
				if (brightness < level) {
					scheme = 'inverse';
				}
			}

			return scheme;
		},

		/** Set Individual Scheme */
		setIndividualScheme: function setIndividualScheme() {
			var list = {
				'body': '--cs-color-site-background',
				'.cs-topbar': '--cs-color-topbar-background',
				'.cs-header': '--cs-color-header-background',
				'.cs-header__nav-inner .sub-menu': '--cs-color-submenu-background',
				'.cs-header__multi-column-container': '--cs-color-submenu-background',
				'.cs-header__widgets': '--cs-color-submenu-background',
				'.cs-offcanvas__header': '--cs-color-header-background',
				'.cs-search': '--cs-color-search-background',
				'.cs-footer': '--cs-color-footer-background'
			};

			for (var key in list) {
				if ((0, _utility.$)(key).length <= 0) {
					continue;
				}

				/* jshint ignore:start */
				(0, _utility.$)(key).each(function (index, element) {
					var color = window.getComputedStyle((0, _utility.$)(element)[0]).getPropertyValue(list[key]);

					var scheme = $this.detectColorScheme(color);

					(0, _utility.$)(element).attr('data-scheme', scheme);
				});
				/* jshint ignore:end */
			}
		},

		/** Load Mode */
		loadMode: function loadMode(e) {

			if ('false' === csLocalize.darkMode) {
				return;
			}

			if ('dark' === (0, _utility.csGetCookie)('_color_schema') && 'dark' !== _utility.$body.attr('site-data-scheme')) {

				$this.changeScheme('dark', false);

				// Detect color scheme on device.
			} else if (window.matchMedia && -1 === document.cookie.indexOf('_color_schema=')) {
				var systemSchema = 'default';

				if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
					systemSchema = 'dark';
				}

				(0, _utility.csSetCookie)('_color_system_schema', systemSchema, { expires: 2592000 });

				$this.changeScheme(systemSchema, false);
			}
		},

		/** Change Mode */
		changeMode: function changeMode(e) {
			if ('dark' === _utility.$body.attr('site-data-scheme')) {
				$this.changeScheme('default', true);
			} else {
				$this.changeScheme('dark', true);
			}
		},

		/** Change Scheme */
		changeScheme: function changeScheme(scheme, cookie) {
			_utility.$body.addClass('cs-scheme-toggled');

			_utility.$body.attr('site-data-scheme', scheme);

			$this.setIndividualScheme();

			if (cookie) {
				(0, _utility.csSetCookie)('_color_schema', scheme, { expires: 2592000 });
				(0, _utility.csSetCookie)('_color_system_schema', null, { expires: 2592000 });
			}

			setTimeout(function () {
				_utility.$body.removeClass('cs-scheme-toggled');
			}, 100);
		}
	};
})();

// Initialize.
cscoDarkMode.init();

/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

(function () {
	var focusSearchTimeout = void 0;

	(0, _utility.$)('.cs-header__search-toggle').click(function (e) {
		if (!(0, _utility.$)('.cs-search').is(":visible")) {
			focusSearchTimeout = setTimeout(function () {
				(0, _utility.$)('.cs-search .cs-search__input').focus();
			}, 300);
		} else {
			clearTimeout(focusSearchTimeout);
		}
		(0, _utility.$)('.cs-search').stop().slideToggle();
		e.preventDefault();
	});

	(0, _utility.$)('.cs-search__close').click(function (e) {
		(0, _utility.$)('.cs-search').slideUp();
		e.preventDefault();
		clearTimeout(focusSearchTimeout);
	});
})(); /** ----------------------------------------------------------------------------
       * Search Dropdown */

/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

(function () {
	var stickyElementsSmart = [],
	    stickyElements = [];

	stickyElementsSmart.push('.cs-navbar-smart-enabled .cs-entry__metabar-inner');
	stickyElementsSmart.push('.cs-sticky-sidebar-enabled.cs-navbar-smart-enabled.cs-stick-to-top .cs-sidebar__inner');
	stickyElementsSmart.push('.cs-sticky-sidebar-enabled.cs-navbar-smart-enabled.cs-stick-last .cs-sidebar__inner .widget:last-child');

	stickyElementsSmart.push('.cs-sticky-sidebar-enabled.cs-navbar-smart-enabled .cnvs-block-section-sidebar-sticky-top .cnvs-block-section-sidebar-inner');
	stickyElementsSmart.push('.cs-sticky-sidebar-enabled.cs-navbar-smart-enabled .cnvs-block-section-sidebar-sticky-top-last-block .cnvs-block-section-sidebar-inner > :last-child');

	stickyElements.push('.cs-navbar-sticky-enabled .cs-entry__metabar-inner');
	stickyElements.push('.cs-sticky-sidebar-enabled.cs-navbar-sticky-enabled.cs-stick-to-top .cs-sidebar__inner');
	stickyElements.push('.cs-sticky-sidebar-enabled.cs-navbar-sticky-enabled.cs-stick-last .cs-sidebar__inner .widget:last-child');

	stickyElements.push('.cs-sticky-sidebar-enabled.cs-navbar-sticky-enabled .cnvs-block-section-sidebar-sticky-top .cnvs-block-section-sidebar-inner');
	stickyElements.push('.cs-sticky-sidebar-enabled.cs-navbar-sticky-enabled .cnvs-block-section-sidebar-sticky-top-last-block .cnvs-block-section-sidebar-inner > :last-child');

	_utility.$doc.ready(function () {

		var headerStick = (0, _utility.$)('.cs-header'),
		    wpAdminBar = (0, _utility.$)('#wpadminbar'),
		    headerStickHeight = headerStick.outerHeight(),
		    wpAdminBarHeight = wpAdminBar.outerHeight(),
		    headerStretch = (0, _utility.$)('.cs-header-stretch'),
		    headerStretchHeight = headerStretch.outerHeight(),
		    allHeight = (headerStickHeight || 0) + (wpAdminBarHeight || 0) + 20,
		    windowWidth = (0, _utility.$)(window).width();

		// Sticky sidebar for mozilla.
		if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
			stickyElementsSmart.push('.cs-sticky-sidebar-enabled.cs-stick-to-bottom .cs-sidebar__inner');
			stickyElements.push('.cs-sticky-sidebar-enabled.cs-stick-to-bottom .cs-sidebar__inner');

			stickyElementsSmart.push('.cnvs-block-section-sidebar-sticky-bottom .cnvs-block-section-sidebar-inner');
			stickyElements.push('.cnvs-block-section-sidebar-sticky-bottom .cnvs-block-section-sidebar-inner');
		}

		// Join elements.
		stickyElementsSmart = stickyElementsSmart.join(',');
		stickyElements = stickyElements.join(',');

		// Sticky nav visible.
		_utility.$doc.on('sticky-nav-visible', function () {

			headerStickHeight = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--cs-header-height'));

			if (headerStretchHeight) {
				allHeight = (headerStretchHeight || 0) + (wpAdminBarHeight || 0) + 20;
			} else {
				allHeight = (headerStickHeight || 0) + (wpAdminBarHeight || 0) + 20;
			}

			(0, _utility.$)(stickyElementsSmart).css('top', allHeight + 'px');
		});

		// Sticky nav hide.
		_utility.$doc.on('sticky-nav-hide', function () {

			headerStickHeight = 0;

			allHeight = (headerStickHeight || 0) + (wpAdminBarHeight || 0) + 20;
			(0, _utility.$)(stickyElementsSmart).css('top', allHeight + 'px');
		});

		_utility.$doc.on('stretch-nav-to-small', function () {

			headerStretchHeight = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--cs-header-height'));

			if (headerStretchHeight) {
				allHeight = (headerStretchHeight || 0) + (wpAdminBarHeight || 0) + 20;
			} else {
				allHeight = (headerStickHeight || 0) + (wpAdminBarHeight || 0) + 20;
			}

			if (headerStretch.hasClass("cs-scroll-sticky") && !headerStretch.hasClass("cs-scroll-active")) {
				(0, _utility.$)(stickyElementsSmart).css('top', allHeight + 'px');
			}
		});

		_utility.$doc.on('stretch-nav-to-big', function () {

			headerStretchHeight = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--cs-header-initial-height'));
		});

		// Add top style
		if (_utility.$body.hasClass('cs-navbar-smart-enabled') && windowWidth >= 1020) {

			if (headerStretchHeight) {
				allHeight = (headerStretchHeight || 0) + (wpAdminBarHeight || 0) + 20;
			} else {
				allHeight = (headerStickHeight || 0) + (wpAdminBarHeight || 0) + 20;
			}

			(0, _utility.$)(stickyElementsSmart).css('top', allHeight + 'px');
		} else if (_utility.$body.hasClass('cs-navbar-sticky-enabled') && windowWidth >= 1020) {

			if (headerStretchHeight) {
				allHeight = (headerStretchHeight || 0) + (wpAdminBarHeight || 0) + 20;
			} else {
				allHeight = (headerStickHeight || 0) + (wpAdminBarHeight || 0) + 20;
			}

			(0, _utility.$)(stickyElements).css('top', allHeight + 'px');
		}

		// Remove top style rafter resize
		_utility.$window.resize(function () {
			var windowWidthResize = _utility.$window.width();

			if (windowWidthResize < 1020) {
				(0, _utility.$)(stickyElements).removeAttr('style');
				(0, _utility.$)(stickyElementsSmart).removeAttr('style');
			}
		});
	});
})(); /** ----------------------------------------------------------------------------
       * Sticky Sidebar */

/***/ }),
/* 15 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

(function () {
	var initAPI = false;
	var process = false;
	var contex = [];
	var players = [];
	var attrs = [];

	// Create deferred object
	var YTdeferred = _utility.$.Deferred();
	window.onYouTubePlayerAPIReady = function () {
		// Resolve when youtube callback is called
		// passing YT as a parameter.
		YTdeferred.resolve(window.YT);
	};

	// Embedding youtube iframe api.
	function embedYoutubeAPI() {
		var tag = document.createElement('script');
		tag.src = 'https://www.youtube.com/iframe_api';

		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	}

	// Video rescale.
	function rescaleVideoBackground() {
		(0, _utility.$)('.cs-video-init').each(function () {
			var w = (0, _utility.$)(this).parent().width();
			var h = (0, _utility.$)(this).parent().height();

			var hideControl = 400;

			var id = (0, _utility.$)(this).attr('data-uid');

			if (w / h > 16 / 9) {
				players[id].setSize(w, w / 16 * 9 + hideControl);
			} else {
				players[id].setSize(h / 9 * 16, h + hideControl);
			}
		});
	}

	// Init video background.
	function initVideoBackground() {
		if ((0, _utility.$)('body').hasClass('wp-admin')) {
			return;
		}

		if (process) {
			return;
		}

		process = true;

		// Smart init API.
		if (!initAPI) {
			var elements = (0, _utility.$)('.cs-video-wrapper[data-video-id]');

			if (elements.length) {
				embedYoutubeAPI();

				initAPI = true;
			}
		}

		if (!initAPI) {
			process = false;

			return;
		}

		// Whenever youtube callback was called = deferred resolved
		// your custom function will be executed with YT as an argument.
		YTdeferred.done(function (YT) {
			(0, _utility.$)('.cs-video-inner').each(function () {

				// The state.
				var isInit = (0, _utility.$)(this).hasClass('cs-video-init');

				var id = null;

				// Generate unique ID.
				if (!isInit) {
					id = Math.random().toString(36).substr(2, 9);
				} else {
					id = (0, _utility.$)(this).attr('data-uid');
				}

				// Create contex.
				contex[id] = this;

				// The actived.
				var isActive = (0, _utility.$)(contex[id]).hasClass('active');

				// The monitor.
				var isInView = (0, _utility.$)(contex[id]).isInViewport();

				// Initialization.
				if (isInView && !isInit) {

					// Add init class.
					(0, _utility.$)(contex[id]).addClass('cs-video-init');

					// Add unique ID.
					(0, _utility.$)(contex[id]).attr('data-uid', id);

					// Get video attrs.
					var videoID = (0, _utility.$)(contex[id]).parent().data('video-id');
					var videoStart = (0, _utility.$)(contex[id]).parent().data('video-start');
					var videoEnd = (0, _utility.$)(contex[id]).parent().data('video-end');

					// Check video id.
					if (typeof videoID === 'undefined' || !videoID) {
						return;
					}

					// Video attrs.
					attrs[id] = {
						'videoId': videoID,
						'startSeconds': videoStart,
						'endSeconds': videoEnd,
						'suggestedQuality': 'hd720'
					};

					// Creating a player.
					players[id] = new YT.Player(contex[id], {
						playerVars: {
							autoplay: 0,
							autohide: 1,
							modestbranding: 1,
							rel: 0,
							showinfo: 0,
							controls: 0,
							disablekb: 1,
							enablejsapi: 0,
							iv_load_policy: 3,
							playsinline: 1,
							loop: 1
						},
						events: {
							'onReady': function onReady() {
								players[id].loadVideoById(attrs[id]);
								players[id].mute();
							},
							'onStateChange': function onStateChange(e) {
								if (e.data === 1) {
									(0, _utility.$)(contex[id]).parents('.cs-overlay, .cs-video-wrap').addClass('cs-video-bg-init');
									(0, _utility.$)(contex[id]).addClass('active');
								} else if (e.data === 0) {
									players[id].seekTo(attrs[id].startSeconds);
								}
							}
						}
					});
					rescaleVideoBackground();
				}

				// Pause and play.
				var control = (0, _utility.$)(contex[id]).parents('.cs-overlay, .cs-video-wrap').find('.cs-player-state');

				if (isActive && isInit && !(0, _utility.$)(control).hasClass('cs-player-upause')) {

					if (isInView && (0, _utility.$)(control).hasClass('cs-player-play')) {
						// Change icon.
						(0, _utility.$)(control).removeClass('cs-player-play').addClass('cs-player-pause');
						// Pause video.
						players[id].playVideo();
					}

					if (!isInView && (0, _utility.$)(control).hasClass('cs-player-pause')) {
						// Change icon.
						(0, _utility.$)(control).removeClass('cs-player-pause').addClass('cs-player-play');
						// Pause video.
						players[id].pauseVideo();
					}
				}
			});
		});

		process = false;
	}

	// State Control.
	_utility.$doc.on('click', '.cs-player-state', function () {
		var container = (0, _utility.$)(this).parents('.cs-overlay, .cs-video-wrap').find('.cs-video-inner');

		var id = (0, _utility.$)(container).attr('data-uid');

		(0, _utility.$)(this).toggleClass('cs-player-pause cs-player-play');

		if ((0, _utility.$)(this).hasClass('cs-player-pause')) {
			(0, _utility.$)(this).removeClass('cs-player-upause');
			players[id].playVideo();
		} else {
			(0, _utility.$)(this).addClass('cs-player-upause');
			players[id].pauseVideo();
		}
	});

	// Stop Control.
	_utility.$doc.on('click', '.cs-player-stop', function () {
		var container = (0, _utility.$)(this).parents('.cs-overlay, .cs-video-wrap').find('.cs-video-inner');

		var id = (0, _utility.$)(container).attr('data-uid');

		(0, _utility.$)(this).siblings('.cs-player-state').removeClass('cs-player-pause').addClass('cs-player-play');

		(0, _utility.$)(this).siblings('.cs-player-state').addClass('cs-player-upause');

		players[id].pauseVideo();
	});

	// Volume Control.
	_utility.$doc.on('click', '.cs-player-volume', function () {
		var container = (0, _utility.$)(this).parents('.cs-overlay, .cs-video-wrap').find('.cs-video-inner');

		var id = (0, _utility.$)(container).attr('data-uid');

		(0, _utility.$)(this).toggleClass('cs-player-mute cs-player-unmute');

		if ((0, _utility.$)(this).hasClass('cs-player-unmute')) {
			players[id].unMute();
		} else {
			players[id].mute();
		}
	});

	// Document scroll.
	_utility.$window.on('load scroll resize scrollstop', function () {
		initVideoBackground();
	});

	// Document ready.
	_utility.$doc.ready(function () {
		initVideoBackground();
	});

	// Post load.
	_utility.$body.on('post-load', function () {
		initVideoBackground();
	});

	// Document resize.
	_utility.$window.on('resize', function () {
		rescaleVideoBackground();
	});

	// Init.
	initVideoBackground();
})(); /** ----------------------------------------------------------------------------
       * Video Background */

/***/ }),
/* 16 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _utility = __webpack_require__(0);

(function () {
	_utility.$.fn.responsiveNav = function () {
		this.removeClass('menu-item-expanded');
		if (this.prev().hasClass('submenu-visible')) {
			this.prev().removeClass('submenu-visible').slideUp(350);
			this.parent().removeClass('menu-item-expanded');
		} else {
			this.parent().parent().find('.menu-item .sub-menu').removeClass('submenu-visible').slideUp(350);
			this.parent().parent().find('.menu-item-expanded').removeClass('menu-item-expanded');
			this.prev().toggleClass('submenu-visible').hide().slideToggle(350);
			this.parent().toggleClass('menu-item-expanded');
		}
	};

	//
	// Navigation Menu Widget
	//
	(0, _utility.$)(document).ready(function (e) {
		(0, _utility.$)('.widget_nav_menu .menu-item-has-children').each(function (e) {

			// Add a caret.
			(0, _utility.$)(this).append('<span></span>');

			// Fire responsiveNav() when clicking a caret.
			(0, _utility.$)('> span', this).on('click', function (e) {
				e.preventDefault();
				(0, _utility.$)(this).responsiveNav();
			});

			// Fire responsiveNav() when clicking a parent item with # href attribute.
			if ('#' === (0, _utility.$)('> a', this).attr('href')) {
				(0, _utility.$)('> a', this).on('click', function (e) {
					e.preventDefault();
					(0, _utility.$)(this).next().next().responsiveNav();
				});
			}
		});
	});
})(); /** ----------------------------------------------------------------------------
       * Widget Nav Menu */

/***/ })
/******/ ]);