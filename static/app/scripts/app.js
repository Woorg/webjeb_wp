import svg4everybody from 'svg4everybody';
// import $ from 'jquery';
// import Pjax from 'pjax';
import waypoints from 'waypoints/lib/jquery.waypoints';
import 'waypoints/lib/shortcuts/sticky.min';

import Lightense from 'lightense-images';

(function ($) {
	svg4everybody();

	$(function() {

		const $header = $('.header');
		const $logo = $('.header__logo');
		const $hHeader = $('.header').outerHeight();
		const $page = $('.page');
		const $pageIn = $('.page_inner');
		const $sec = $('.section');
		const $main = $('.main');
		const $hNavIcon = $('.nav__icon');
		const $sideBlockW = $('.sidebar__block');
		let $wW = $(window).width();
		// Lightense images

		const lightense = Lightense('.article__img img', {
			time: 300,
			padding: 40,
			offset: 40,
			keyboard: true,
			cubicBezier: 'cubic-bezier(.2, 0, .1, 1)',
			zIndex: 2147483647
		});

		// Pjax

		// const pjax = new Pjax({
		// 	elements: 'a',
		// 	selectors: ['title', '.main', '.header', '.footer']
		// });


		// Body padding


		$pageIn.css({
			'padding-top': $hHeader
		});


		$(window).resize(function() {
			let $hHeader = $('.header').outerHeight();

			$pageIn.css({
				'padding-top': $hHeader
			});
		});
		$(window).on('scroll', function () {
			if(	$(window).scrollTop() > 170 ) {
				$('.article__w-w').addClass('article__w-w_full');
			} else {
				$('.article__w-w').removeClass('article__w-w_full');
			}
		});


		if ($wW < 768 ) {
			$('.sidebar__block').removeClass('sidebar__block_fixed');
		}

		// Sticky header

		$page.waypoint(function(d) {

			if (d === 'down') {
				$header.addClass('is-inverted is-fixed');
				$logo.addClass('logo_dark');


			} else {
				$header.removeClass('is-inverted');
				$logo.removeClass('logo_dark');

			}
			if (d === 'up') {
				$header.addClass('is-static');
			} else {
				$header.removeClass('is-static');
			}

		}, {
			offset:  '-' + $hHeader + 'px'
		});


		if ( $('.main').find('.sidebar').length !== 0 ) {

			console.log('has sidebar');
			let sticky = new Waypoint.Sticky({
				element: $('.sidebar__w'),
				stuckClass: 'sidebar__block_fixed'
			});

		}

		if ( $('.main').find('.article__table-contents').length === 0 ) {

		} else {

			let stickyTablC = new Waypoint.Sticky({
				element: $('.article__table-contents'),
				stuckClass: 'article__table-contents_fixed'
			});

		}

		// Header nav

		$hNavIcon.on('click', function () {
			$('.nav__icon_open').toggleClass('nav__icon_show');
			$('.nav__icon_close').toggleClass('nav__icon_show');
		});

		// Animate sections

		$sec.waypoint(function(d) {
			if(d === 'down') {
				// this.element.classList.add('fade-in');
				// this.element.classList.remove('fade-out');

			} else {
				// this.element.classList.remove('fade-in');
				// this.element.classList.add('fade-out');

			}

		}, {
			offset: '50%'
		});




		// get all stylus classes

		// function getAllClasses(context, output) {
		//     var finalArray = [],
		//         mainArray = [],
		//         allElements = $(context).find($('*')); //get all elements of our page
		//     //If element has class push this class to mainArray
		//     for (var i = 0; i < allElements.length; i++) {
		//         var someElement = allElements[i],
		//             elementClass = someElement.className;
		//         if (elementClass.length > 0) { //if element have not empty class
		//             //If element have multiple classes - separate them
		//             var elementClassArray = elementClass.split(' '),
		//                 classesAmount = elementClassArray.length;
		//             if (classesAmount === 1) {
		//                 mainArray.push('.' + elementClassArray[0]);
		//             } else {
		//                 var cascad = '.' + elementClassArray[0];
		//                 for (var j = 1; j < elementClassArray.length; j++) {
		//                     cascad += ' &.' + elementClassArray[j];
		//                 }
		//                 mainArray.push(cascad);
		//             }
		//         }
		//     }

		//     //creating finalArray, that don't have repeating elements
		//     var noRepeatingArray = unique(mainArray);
		//     noRepeatingArray.forEach(function(item) {
		//         var has = false;
		//         var preWords = item.split('&');
		//         for (var i = 0; i < finalArray.length; ++i) {
		//             var newWords = finalArray[i].split('&');
		//             if (newWords[0] == preWords[0]) {
		//                 has = true;
		//                 for (var j = 0; j < preWords.length; ++j) {
		//                     if (newWords.indexOf(preWords[j]) < 0) {
		//                         newWords.push(preWords[j]);
		//                     }
		//                 }
		//                 finalArray[i] = newWords.join('&');
		//             }
		//         }
		//         if (!has) {
		//             finalArray.push(item);
		//         }
		//     });
		//     for (var i = 0; i < finalArray.length; i++) {
		//         $('<div>' + finalArray[i] + '</div>').appendTo(output);
		//     }


		//     //function that delete repeating elements from arrays, for more information visit http://mathhelpplanet.com/static.php?p=javascript-algoritmy-obrabotki-massivov
		//     function unique(A) {
		//         var n = A.length,
		//             k = 0,
		//             B = [];
		//         for (var i = 0; i < n; i++) {
		//             var j = 0;
		//             while (j < k && B[j] !== A[i]) j++;
		//             if (j == k) B[k++] = A[i];
		//         }
		//         return B;
		//     }
		// }

		// getAllClasses('html','.footer');


		function pageWidget(pages) {
			var widgetWrap = $('<div class="widget_wrap"><ul class="widget_list"></ul></div>');
			widgetWrap.prependTo("body");
			for (var i = 0; i < pages.length; i++) {
				$('<li class="widget_item"><a class="widget_link" href="' + pages[i] + '.html' + '">' + pages[i] + '</a></li>').appendTo('.widget_list');
			}
			var widgetStilization = $('<style>body {position:relative} .widget_wrap{position:absolute;top:0;left:0;z-index:9999;padding:10px 20px;background:#222;border-bottom-right-radius:10px;-webkit-transition:all .3s ease;transition:all .3s ease;-webkit-transform:translate(-100%,0);-ms-transform:translate(-100%,0);transform:translate(-100%,0)}.widget_wrap:after{content:" ";position:absolute;top:0;left:100%;width:24px;height:24px;background:#222 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAgMAAABinRfyAAAABGdBTUEAALGPC/xhBQAAAAxQTFRF////////AAAA////BQBkwgAAAAN0Uk5TxMMAjAd+zwAAACNJREFUCNdjqP///y/DfyBg+LVq1Xoo8W8/CkFYAmwA0Kg/AFcANT5fe7l4AAAAAElFTkSuQmCC) no-repeat 50% 50%;cursor:pointer}.widget_wrap:hover{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0)}.widget_item{padding:0 0 10px}.widget_link{color:#fff;text-decoration:none;font-size:15px;}.widget_link:hover{text-decoration:underline} </style>');
			widgetStilization.prependTo(".widget_wrap");
		}

		// pageWidget(['index', 'blog', 'portfolio', 'contacts']);


	});






})(jQuery);
