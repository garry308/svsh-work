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
	speed: 400,
	spaceBetween: 66,
	slidesPerView: 1,
	slidesPerGroup: 1,
	allowTouchMove: false,
	loop: true,
	loopAddBlankSlides: true,
	pagination: {
		el: '.section__vacancy-pagination',
		clickable: true,
		type: 'bullets',
		bulletActiveClass: 'section__vacancy-pagination-bullet_active',
		renderBullet: function (index, className) {
			return '<span class="section__vacancy-pagination-bullet '+className+'">' + (index + 1) + "</span>";
		},
	},
	breakpoints: {
		768: {
			spaceBetween: 5,
			slidesPerView: 4,
			slidesPerGroup: 4,
		},
		1024: {
			spaceBetween: 40,
			slidesPerView: 4,
			slidesPerGroup: 4,
		},
		1570: {
			spaceBetween: 50,
			slidesPerView: 4,
			slidesPerGroup: 4,
		},
		1920: {
			spaceBetween: 66,
			slidesPerView: 4,
			slidesPerGroup: 4,
		}
	}
});

const elements = document.querySelectorAll('.section__form-input_phone');
const maskOptions = {
	mask: '+{7}(000)000-00-00'
};
elements.forEach((el) => {
	IMask(el, maskOptions);
})

Fancybox.bind('[data-fancybox]', {
	dragToClose: false,
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
		description: 'Это сотрудник, ответственный за проверку и обеспечение соответствия продукции или услуг стандартам качества и техническим требованиям.'
	},
	'4': {
		title: 'Управляющий кафе',
		description: 'Управляющий сетью фастфуд - руководит, организует и контролирует внешние и внутренние процессы деятельности торговых точек.'
	},
}
