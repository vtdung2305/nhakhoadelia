
(function($){
	({
		init: function(){
			var self = this;

			$(function(){
				self.common();
				self.sliderTop();
				self.sliderCustomer();
				self.loadInfoCustomer();
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

			$(window).scroll(function(){
				var sticky = $('.sticky');
				var main = $('.site-main');
						scroll = $(window).scrollTop();

				if (scroll >= 90) {
					sticky.addClass('is-fixed');
					main.addClass('is-fixed')
				}
				else {
					sticky.removeClass('is-fixed');
					main.removeClass('is-fixed')
				} 
			});

			$('.btn-chatbox').click(function() {
				$(this).find('i').toggleClass('fa-times');
				$('.c-chatbox_list').toggleClass('open');
			})
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
		sliderTop: function() {
			var mySwiper = new Swiper('#sliderTop', {
				loop: true,
				// speed: 1000,
				autoplay: {
					delay: 10000,
					pauseOnMouseEnter: true,
					disableOnInteraction: false,
					stopOnLast: true,
				},
				grabCursor: true,
				// centeredSlides: true,
				slidesPerView: 'auto',
				spaceBetween: 0,
				// pagination: {
				// 	el: ".swiper-pagination",
				// 	clickable: true,
				// },
				// Navigation arrows
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
			})

			// mySwiper.on('slideChange', function(){
			// 	if(mySwiper.isEnd){
			// 		mySwiper.autoplay = false;
			// 	}
			// });
		},

		/*
		 * Slider customer
		 */
		sliderCustomer: function() {
			var mySwiper = new Swiper('#sliderCustomer', {
				loop: true,
				// speed: 1000,
				autoplay: {
					delay: 10000,
					pauseOnMouseEnter: true,
					disableOnInteraction: false,
					stopOnLast: true,
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

			mySwiper.on('slideChange', function(){
				if(mySwiper.isEnd){
					mySwiper.autoplay = false;
				}
			});
		},

		/**
		 * Event click customer
		 */
		loadInfoCustomer: function() {
			$('#list-customer li').click(function(e) {
				var thumb = $(this).data('thumb');
				var name = $(this).data('name');
				var status = $(this).data('status');
				var solution = $(this).data('solution');
				$('#list-customer').find('li').removeClass('current')
				$(this).addClass('current')
				$('#thumb-customer').attr('src', thumb);
				$('#thumb-customer').attr('alt', name);
				$('#name-customer').text(name);
				$('#status-customer').text(status);
				$('#solution-customer').text(solution);
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
					var elementVisible = 50;
					if (elementTop < windowHeight - elementVisible) {
						animations[i].classList.add("active");
					}
				}
		}
	}.init());

}(jQuery));