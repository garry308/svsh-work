document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener('click', function (e) {
		e.preventDefault();

		document.querySelector(this.getAttribute('href')).scrollIntoView({
			behavior: 'smooth'
		});
	});
});

let vacancySelector = document.querySelector('.section__switch');
vacancySelector.addEventListener('click', (event) => {
	let cafe = document.getElementById('cafe');
	let office = document.getElementById('office');
	if (cafe && office && event.target.dataset.target) {
		switch (event.target.dataset.target) {
			case 'cafe':
				cafe.style.visibility = 'visible';
				cafe.style.display = 'flex';
				office.style.visibility = 'hidden';
				office.style.display = 'none';
				break;
			case 'office':
				cafe.style.visibility = 'hidden';
				cafe.style.display = 'none';
				office.style.visibility = 'visible';
				office.style.display = 'flex';
				break;
			default:
				break;
		}
	}
});

let acc = document.querySelectorAll(".section__office-vacancy-button");
let i;

for (i = 0; i < acc.length; i++) {
	acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
	});
}

const swiper = new Swiper('.swiper-vacancies', {
	init: false,
	speed: 400,
	spaceBetween: 66,
	slidesPerView: 1,
	slidesPerGroup: 1,
	allowTouchMove: false,
	pagination: {
		el: '.section__vacancy-pagination-container',
		clickable: true,
		type: 'bullets',
		bulletActiveClass: 'section__vacancy-pagination-bullet_active',
		renderBullet: function (index, className) {
			return '<span class="section__vacancy-pagination-bullet '+className+'">' + (index + 1) + "</span>";
		},
	},
	navigation: {
		nextEl: '.section__vacancy-pagination-bullet_next',
		prevEl: '.section__vacancy-pagination-bullet_prev',
		disabledClass: 'disabled'
	},
	breakpoints: {
		768: {
			spaceBetween: 5,
			slidesPerView: 4,
			slidesPerGroup: 4,
			loop: true,
			loopAddBlankSlides: true,
		},
		1024: {
			spaceBetween: 40,
			slidesPerView: 4,
			slidesPerGroup: 4,
			loop: true,
			loopAddBlankSlides: true,
		},
		1570: {
			spaceBetween: 50,
			slidesPerView: 4,
			slidesPerGroup: 4,
			loop: true,
			loopAddBlankSlides: true,
		},
		1920: {
			spaceBetween: 66,
			slidesPerView: 4,
			slidesPerGroup: 4,
			loop: true,
			loopAddBlankSlides: true,
		}
	}
});

function checkBullets(swiper) {
	if (window.matchMedia("(max-width: 767px)").matches) {
		swiper.pagination.bullets.forEach((bullet, key) => {
			if (swiper.activeIndex === key || swiper.activeIndex + 1 === key)
				bullet.style.display = 'inline-block';
			else
				bullet.style.display = 'none'
		})
	}
}

function checkPagination() {
	if (!window.matchMedia("(max-width: 767px)").matches && swiper.navigation.nextEl && swiper.navigation.prevEl) {
		if (swiper.snapGrid.keys.length + 1 === swiper.snapIndex || swiper.snapGrid.keys.length < 2)
			swiper.navigation.nextEl.style.display = 'none';
		else
			swiper.navigation.nextEl.style.display = 'block';

		if (swiper.snapIndex === 0)
			swiper.navigation.prevEl.style.display = 'none';
		else
			swiper.navigation.prevEl.style.display = 'block';
	}
}
swiper.on('slideChange', function () {
	checkBullets(this);
	checkPagination(this);
});

swiper.on('init', function () {
	checkBullets(this);
});

swiper.init();

const sideMenuButtons = document.querySelectorAll('.header__menu-icon-mobile, .footer__menu-icon-mobile');
const sideMenu = document.querySelector('.header__menu-mobile')
const sideMenuWrapper = document.querySelector('.header__menu-mobile')
sideMenuButtons.forEach((button) => {
	button.addEventListener('click', () => {
		sideMenu.classList.add('active');
	})
})
sideMenuWrapper.addEventListener('click', () => {
	sideMenu.classList.remove('active')
})


const elementsPhone = document.querySelectorAll('.section__form-input_phone');
const maskPhoneOptions = {
	mask: '+{7}(000)000-00-00'
};
elementsPhone.forEach((el) => {
	IMask(el, maskPhoneOptions);
})

const elementsDate = document.querySelectorAll('.section__form-input_date');
const maskDateOptions = {
	mask: Date,
	lazy: true,
	autofix: true,
	min: new Date(1990, 0, 1),
	max: new Date(),
}
elementsDate.forEach((el) => {
	IMask(el, maskDateOptions);
})

Fancybox.bind('[data-fancybox]', {
	dragToClose: false,
	closeButton: true,
	on: {
		reveal: (fancybox, slide) => {
			let title = slide.contentEl.querySelector('.popup-form__title')
			let description = slide.contentEl.querySelector('.popup-form__description');
			let vacancyData = window.dataVacancy[fancybox.options.triggerEl.dataset.vacancy];
			title.innerHTML = (typeof vacancyData !== 'undefined') ?  vacancyData.title : 'Вакансия'
			description.innerHTML = (typeof vacancyData !== 'undefined') ?  vacancyData.description : ''
		},
	},
});

window.dataVacancy = {
	'1': {
		title: 'Повар-кассир',
		description: '<b>На этой позиции ты будешь:</b><p>-общаться с гостями и принимать заказы;</p><p>-готовить вкусные блюда;</p><p>-поддерживать порядок и классную атмосферу в кафе.</p><br><b>Требование к кандидатам:</b><p>-наличие документов для официального трудоустройства;</p><p>-возраст от 18 лет.</p>'
	},
	'2': {
		title: 'Наставник',
		description: '<b>На этой позиции ты будешь:</b><p>-общаться с гостями и принимать заказы;</p><p>-готовить вкусные блюда;</p><p>-поддерживать порядок и классную атмосферу в кафе.</p><br><b>Требование к кандидатам:</b><p>-наличие документов для официального трудоустройства;</p><p>-возраст от 18 лет.</p>'
	},
	'3': {
		title: 'Специалист службы контроля качества',
		description: '<p>Это сотрудник, ответственный за проверку и обеспечение соответствия продукции или услуг стандартам качества и техническим требованиям.</p>'
	},
	'4': {
		title: 'Управляющий кафе',
		description: '<p>Управляющий сетью фастфуд - руководит, организует и контролирует внешние и внутренние процессы деятельности торговых точек.</p>'
	},
}

let isMobile = window.matchMedia("(max-width: 767px)").matches;
if (!isMobile) {
	new AirDatepicker('#footer_date', {
		autoClose: true,
		maxDate: new Date()
	})
	new AirDatepicker('#popup_date', {
		autoClose: true,
		maxDate: new Date()
	})
}

function getCookie() {
	return document.cookie.split('; ').reduce((acc, item) => {
		const [name, value] = item.split('=')
		acc[name] = value
		return acc
	}, {})
}

let cookieAccept = document.querySelector('.cookie-accept');
let cookie = getCookie();
if (cookieAccept) {
	if (cookie['cookie_accepted'] !== 'Y')
		cookieAccept.classList.remove('active');
	let cookieAcceptBtn = cookieAccept.querySelector('.btn')
	if (cookieAcceptBtn) {
		cookieAcceptBtn.addEventListener('click', () => {
			document.cookie = 'cookie_accepted=Y;samesite=strict;max-age=3600000';
			cookieAccept.classList.add('active');
		});
	}
}
console.log(getCookie());


