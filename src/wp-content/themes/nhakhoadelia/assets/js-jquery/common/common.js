(function($){
	({
		init: function(){
			var self = this;

			$(function(){
				self.setUaClass();
				self.setSmoothScroll();
				self.feature();
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

		/**
		 *	スムーススクロール
		 *
		 *	@date 2015.02.20
		 */
		setSmoothScroll: function(){
			var anchors = $('a[href^="#"]');
			var win = $(window);

			win.on('load', function(){
				anchors.each(function(){
					var hash = this.hash;
					var hashOffset;

					$(this).on('click', function(e){
						e.preventDefault();
						hashOffset = (hash === '')? {top:0,left:0} : $(hash).offset();
						$('html, body').animate({ scrollTop: hashOffset.top}, 400, 'swing');
					});
				});
			});
		},

		/*
		 * Feature
		 */
		feature: function() {
			// Mobile menu
			$('.dropdown').on('show.bs.dropdown', function(){
			    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
			});

			// ADD SLIDEUP ANIMATION TO DROPDOWN
			$('.dropdown').on('hide.bs.dropdown', function(){
			    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(400, function(){
			        $('.dropdown').removeClass('open');
			        $('.dropdown').find('.dropdown-toggle').attr('aria-expanded','false');
			    });
			});
			if($.isMobile) {
				$(document).on("click", function(e) {
					var $trigger = $(".dropdown-toggle");
			        if($trigger !== event.target && !$trigger.has(event.target).length){
			            $trigger.next(".dropdown-menu").slideUp();
			        }
				});
			} else {
				$('.c-localMenu .dropdown-submenu').hover(function() {
		            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
		        }, function() {
		            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
		        });
		        $('.c-localMenu .dropdown-submenu > a').click(function(){
		            location.href = this.href;
		        });
            }
            $('.dropdown-submenu .dropdown-toggle').on("click", function(e){
				$(this).next('.dropdown-menu').first().stop(true, true).slideToggle();
				$(this).parents('.dropdown-submenu').siblings().find('.dropdown-menu').stop(true, true).slideUp();
				e.stopPropagation();
				e.preventDefault();
			});
		},
		sliderCustomer: function() {

		}
	}.init());

}(jQuery));