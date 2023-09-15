
(function($){
	({
		init: function(){
			var self = this;

			$(function(){
				self.common();
				self.sliderCustomer();
				self.animation();
			});

			$(window).scroll(function(){
				self.animation();
			});
		},

		/**
		 * Common function
		 */
		common: function() {
			document.querySelector('.first-button').addEventListener('click', function () {
			document.querySelector('.animated-icon1').classList.toggle('open');
			});
		},
		/**
		 *	UA判定
		 *
		 *	@date 2016.07.25
		 */
		setUaClass: function(){
			var self = this;
			var ua = navigator.userAgent;
			var body = $('body');

			if(typeof window.orientation !== "undefined"){
				$.isMobile = true;
				body.addClass('mobile');
			} else {
				// body.addClass('pc');
			}

			if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPad') > 0){
				body.addClass('ios');
			} else if(ua.indexOf('Android') > 0){
				body.addClass('android');
			}
		},

		/*
		 * Slider customer
		 */
		sliderCustomer: function() {
			var mySwiper = new Swiper('.swiper-container', {
				loop: true,
				// speed: 1000,
				autoplay: {
					delay: 3000,
				},
				grabCursor: true,
				// centeredSlides: true,
				slidesPerView: 'auto',
				spaceBetween: 30,
				pagination: {
					el: ".swiper-pagination",
					clickable: true,
				},
				// Navigation arrows
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
			})
		},

		/**
		 * Animation
		 */
		animation: function() {
			var animations = document.querySelectorAll(".c-animation");
				for (var i = 0; i < animations.length; i++) {
					var windowHeight = window.innerHeight;
					var elementTop = animations[i].getBoundingClientRect().top;
					var elementVisible = 150;
					if (elementTop < windowHeight - elementVisible) {
						animations[i].classList.add("active");
					}
				}
		}
	}.init());

}(jQuery));