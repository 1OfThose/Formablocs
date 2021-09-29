let slidePosition2 = 0;
let slidePosition3 = 0;

const slidesOne = document.getElementsByClassName('home-carousel-slides');
const slidesMobile = document.getElementsByClassName('home3-carousel-slides');

const totalSlides = slidesOne.length;
const totalSlides3 = slidesMobile.length;

const prevOne = document.getElementById('prev-home');
const nextOne = document.getElementById('next-home');

const prevThree = document.getElementById('prev-home3');
const nextThree = document.getElementById('next-home3');

nextOne.addEventListener('click', () => {
	toNextSlide();
})

prevOne.addEventListener('click', () => {
	toPrevSlide();
})

nextThree.addEventListener('click', () => {
	toNextSlide3();
})

prevThree.addEventListener('click', () => {
	toPrevSlide3();
})

function updateSlidePosition() {
	for(let slide of slidesOne){
		slide.classList.remove('current-home-carousel');
		slide.classList.add('.hidden-home2-slide')
	}
	slidesOne[slidePosition2].classList.add('current-home-carousel');
	slidesOne[slidePosition2].classList.remove('.hidden-home-slide');
}

function updateSlidePosition3() {
	for(let slide of slidesMobile){
		slide.classList.remove('current-home2-carousel');
		slide.classList.add('.hidden-home2-slide')
	}
	slidesMobile[slidePosition3].classList.add('current-home2-carousel');
	slidesMobile[slidePosition3].classList.remove('.hidden-home2-slide');
}

function toNextSlide() {
	if(slidePosition2 === totalSlides - 1){
		slidePosition2 = 0;
	} else {
		slidePosition2++;
	}
	updateSlidePosition();
}

function toPrevSlide() {
	if(slidePosition2 === 0){
		slidePosition2 = totalSlides - 1;
	} else {
		slidePosition2--;
	}
	updateSlidePosition();
}

function toNextSlide3() {
	if(slidePosition3 === totalSlides3 - 1){
		slidePosition3 = 0;
	} else {
		slidePosition3++;
	}
	updateSlidePosition3();
}

function toPrevSlide3() {
	if(slidePosition3 === 0){
		slidePosition3 = totalSlides3 - 1;
	} else {
		slidePosition3--;
	}
	updateSlidePosition3();
}
