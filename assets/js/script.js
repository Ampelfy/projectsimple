var ua = window.navigator.userAgent;
var msie = ua.indexOf("MSIE ");
var isMobile = { Android: function () { return navigator.userAgent.match(/Android/i); }, BlackBerry: function () { return navigator.userAgent.match(/BlackBerry/i); }, iOS: function () { return navigator.userAgent.match(/iPhone|iPad|iPod/i); }, Opera: function () { return navigator.userAgent.match(/Opera Mini/i); }, Windows: function () { return navigator.userAgent.match(/IEMobile/i); }, any: function () { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()); } };
function isIE() {
	ua = navigator.userAgent;
	var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
	return is_ie;
}
if (isIE()) {
	document.querySelector('html').classList.add('ie');
}
if (isMobile.any()) {
	document.querySelector('html').classList.add('_touch');
}

// Получить цифры из строки
//parseInt(itemContactpagePhone.replace(/[^\d]/g, ''))

function testWebP(callback) {
	var webP = new Image();
	webP.onload = webP.onerror = function () {
		callback(webP.height == 2);
	};
	webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}
testWebP(function (support) {
	if (support === true) {
		document.querySelector('html').classList.add('_webp');
	} else {
		document.querySelector('html').classList.add('_no-webp');
	}
});

function ibg() {
	if (isIE()) {
		let ibg = document.querySelectorAll("._ibg");
		for (var i = 0; i < ibg.length; i++) {
			if (ibg[i].querySelector('img') && ibg[i].querySelector('img').getAttribute('src') != null) {
				ibg[i].style.backgroundImage = 'url(' + ibg[i].querySelector('img').getAttribute('src') + ')';
			}
		}
	}
}
ibg();

window.addEventListener("load", function () {
	if (document.querySelector('.wrapper')) {
		setTimeout(function () {
			document.querySelector('.wrapper').classList.add('_loaded');
		}, 0);
	}
});

let unlock = true;

//=================
//ActionsOnHash
// if (location.hash) {
// 	const hsh = location.hash.replace('#', '');
// 	if (document.querySelector('.popup_' + hsh)) {
// 		popup_open(hsh);
// 	} else if (document.querySelector('div.' + hsh)) {
// 		_goto(document.querySelector('.' + hsh), 500, '');
// 	}
// }

//=================
//Menu
let burger = document.querySelector(".burger");
if (burger != null) {
	let delay = 500;
	let menuBody = document.querySelector(".menumobile__list");
	let burgerNav = document.querySelector(".burger_nav");
	burger.addEventListener("click", function (e) {
		if (unlock) {
			body_lock(delay);
			burger.classList.toggle("_active");
			menuBody.classList.toggle("_active");
			burgerNav.classList.toggle("_active");
		}
	});
};
function menu_close() {
	let burger = document.querySelector(".burger");
	let menuBody = document.querySelector(".menumobile__list");
	let burgerNav = document.querySelector(".burger_nav");
	burger.classList.remove("_active");
	menuBody.classList.remove("_active");
	burgerNav.classList.remove("_active");
}
//=================
//BodyLock
function body_lock(delay) {
	let body = document.querySelector("body");
	if (body.classList.contains('_lock')) {
		body_lock_remove(delay);
	} else {
		body_lock_add(delay);
	}
}
function body_lock_remove(delay) {
	let body = document.querySelector("body");
	if (unlock) {
		let lock_padding = document.querySelectorAll("._lp");
		setTimeout(() => {
			for (let index = 0; index < lock_padding.length; index++) {
				const el = lock_padding[index];
				el.style.paddingRight = '0px';
			}
			body.style.paddingRight = '0px';
			body.classList.remove("_lock");
		}, delay);

		unlock = false;
		setTimeout(function () {
			unlock = true;
		}, delay);
	}
}
function body_lock_add(delay) {
	let body = document.querySelector("body");
	if (unlock) {
		let lock_padding = document.querySelectorAll("._lp");
		for (let index = 0; index < lock_padding.length; index++) {
			const el = lock_padding[index];
			el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
		}
		body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
		body.classList.add("_lock");

		unlock = false;
		setTimeout(function () {
			unlock = true;
		}, delay);
	}
}
//=================
// LettersAnimation
let title = document.querySelectorAll('._letter-animation');
if (title) {
	for (let index = 0; index < title.length; index++) {
		let el = title[index];
		let txt = el.innerHTML;
		let txt_words = txt.replace('  ', ' ').split(' ');
		let new_title = '';
		for (let index = 0; index < txt_words.length; index++) {
			let txt_word = txt_words[index];
			let len = txt_word.length;
			new_title = new_title + '<p>';
			for (let index = 0; index < len; index++) {
				let it = txt_word.substr(index, 1);
				if (it == ' ') {
					it = '&nbsp;';
				}
				new_title = new_title + '<span>' + it + '</span>';
			}
			el.innerHTML = new_title;
			new_title = new_title + '&nbsp;</p>';
		}
	}
}
//=================
//Tabs
let tabs = document.querySelectorAll("._tabs");
for (let index = 0; index < tabs.length; index++) {
	let tab = tabs[index];
	let tabs_items = tab.querySelectorAll("._tabs-item");
	let tabs_blocks = tab.querySelectorAll("._tabs-block");
	for (let index = 0; index < tabs_items.length; index++) {
		let tabs_item = tabs_items[index];
		tabs_item.addEventListener("click", function (e) {
			for (let index = 0; index < tabs_items.length; index++) {
				let tabs_item = tabs_items[index];
				tabs_item.classList.remove('_active');
				tabs_blocks[index].classList.remove('_active');
			}
			tabs_item.classList.add('_active');
			tabs_blocks[index].classList.add('_active');
			e.preventDefault();
		});
	}
}

//=================
//Popups
let popup_link = document.querySelectorAll('._popup-link');
let popups = document.querySelectorAll('.popup');
// for (let index = 0; index < popup_link.length; index++) {
// 	const el = popup_link[index];
// 	el.addEventListener('click', function (e) {
// 		if (unlock) {
// 			let item = el.getAttribute('href').replace('#', '');
// 			let video = el.getAttribute('data-video');
// 			popup_open(item, video);
// 		}
// 		e.preventDefault();
// 	})
// }
for (let index = 0; index < popups.length; index++) {
	const popup = popups[index];
	popup.addEventListener("click", function (e) {
		if (!e.target.closest('.popup__body')) {
			popup_close(e.target.closest('.popup'));
		}
	});
}
// function popup_open(item, video = '') {
// 	let activePopup = document.querySelectorAll('.popup._active');
// 	if (activePopup.length > 0) {
// 		popup_close('', false);
// 	}
// 	let curent_popup = document.querySelector('.popup_' + item);
// 	if (curent_popup && unlock) {
// 		if (video != '' && video != null) {
// 			let popup_video = document.querySelector('.popup_video');
// 			popup_video.querySelector('.popup__video').innerHTML = '<iframe src="https://www.youtube.com/embed/' + video + '?autoplay=1"  allow="autoplay; encrypted-media" allowfullscreen></iframe>';
// 		}
// 		if (!document.querySelector('.menu__body._active')) {
// 			body_lock_add(500);
// 		}
// 		curent_popup.classList.add('_active');
// 		history.pushState('', '', '#' + item);
// 	}
// }
function popup_close(item, bodyUnlock = true) {
	if (unlock) {
		if (!item) {
			for (let index = 0; index < popups.length; index++) {
				const popup = popups[index];
				let video = popup.querySelector('.popup__video');
				if (video) {
					video.innerHTML = '';
				}
				popup.classList.remove('_active');
			}
		} else {
			let video = item.querySelector('.popup__video');
			if (video) {
				video.innerHTML = '';
			}
			item.classList.remove('_active');
		}
		if (!document.querySelector('.menu__body._active') && bodyUnlock) {
			body_lock_remove(500);
		}
		history.pushState('', '', window.location.href.split('#')[0]);
	}
}
let popup_close_icon = document.querySelectorAll('.popup__close,._popup-close');
if (popup_close_icon) {
	for (let index = 0; index < popup_close_icon.length; index++) {
		const el = popup_close_icon[index];
		el.addEventListener('click', function () {
			popup_close(el.closest('.popup'));
		})
	}
}
document.addEventListener('keydown', function (e) {
	if (e.code === 'Escape') {
		popup_close();
	}
});

//=================
//Scroll to top
var btn = $('#scrollToTop');
$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
//=================
//Header Scroll
var headerScroll = $('#header');
$(window).scroll(function() {
  if ($(window).scrollTop() > 46) {
    headerScroll.addClass('show');
  } else {
    headerScroll.removeClass('show');
  }
});
// window.onscroll = function() {scrollFunction()};
// function scrollFunction() {
//   if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
//     document.getElementById("header").style.top = "0px";
//   } else {
//     document.getElementById("header").style.top = "46px";
//   }
// }
//=================
//LoadMore
$(function () {
  $(".loadmore__item").slice(0, 3).show();
  $("body").on('click touchstart', '.load-more', function (e) {
    e.preventDefault();
    $(".loadmore__item:hidden").slice(0, 3).slideDown();
    if ($(".loadmore__item:hidden").length == 0) {
      $(".load-more").css('visibility', 'hidden');
    }
    $('html,body').animate({
      scrollTop: $(this).offset().top
    }, 1000);
  });
});

//=================
//Swiper
const swiper = new Swiper('.swiper', {
	// Optional parameters
	loop: true,
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev',
	},
	breakpoints: {
	320: {
		slidesPerView: 1,
		scrollbar: {
			el: ".swiper-scrollbar",
			hide: false,
		},
	},
	1365: {
		scrollbar: {
			el: ".swiper-scrollbar",
			hide: false,
		},
		slidesPerView: 1,
		},
	},
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
	'use strict'
	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.querySelectorAll('.needs-validation')
	// Loop over them and prevent submission
	Array.prototype.slice.call(forms)
	  .forEach(function (form) {
		form.addEventListener('submit', function (event) {
		  if (!form.checkValidity()) {
			event.preventDefault()
			event.stopPropagation()
		  }
		  form.classList.add('was-validated')
		}, false)
	  })
  })()
   
//=================
//Cookies
// let cookiesWrapper = document.createElement('p');
// let privacyLink ='<a href="https://landing.mv.co.ua/privacy-policy">Privacy policy</a>';
// cookiesWrapper.innerHTML = privacyLink;
// setTimeout(function() {document.querySelector('.cky-notice-btn-wrapper').append(cookiesWrapper);}, 50);

//=================
//Mask Phone
$(document).ready(function() {
	$('.phone').inputmask('(999) 999-9999');
});
//=================
//Fancybox Options
// if (window.matchMedia("(max-width: 768px)").matches) {
// 	let fancyboxScript = document.createElement("script");
// 	fancyboxScript.src = "./assets/js/fancybox.umd.js";
// 	fancyboxScript.type = "text/javascript";
// 	fancyboxScript.onload = function() {
// 		Fancybox.bind('[data-fancybox="firstview"]', {
// 			wheel: false,
// 		});
// 		Fancybox.bind('[data-fancybox="tools"]', {
// 			wheel: false,
// 		});
// 	};
// 	document.body.appendChild(fancyboxScript);
// }
//=================

$('.slider-for').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	asNavFor: '.slider-nav',
});
$('.slider-nav').slick({
	slidesToShow: 7,
	slidesToScroll: 1,
	asNavFor: '.slider-for',
	dots: false,
	focusOnSelect: true,
	responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				asNavFor: '.slider-for',
				dots: false,
				focusOnSelect: true,
			}
		},
	]
});

$('a[data-slide]').click(function(e) {
	e.preventDefault();
	var slideno = $(this).data('slide');
	$('.slider-nav').slick('slickGoTo', slideno - 1);
});
