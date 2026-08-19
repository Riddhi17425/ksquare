"use strict";


var creativesplanet_one_page = function() {
	if( jQuery('body').hasClass('cspt-one-page-site') ){
		
		// Menu click event
		jQuery('a[href*=#]').on('click', function(){

			var this_a_tag = jQuery(this);
			var parent;
			var href_link = jQuery(this).attr('href');

			// stickey header height
			var extra_height = 0;
			if( jQuery('.cspt-header-sticky-yes').length > 0 ){
				extra_height = extra_height + jQuery('#masthead').data('sticky-height');
			}
			if( jQuery('#wpadminbar').length > 0 ){
				extra_height = extra_height + jQuery('#wpadminbar').height();
			}

			if( href_link.charAt(0) == '#' ){
				// Scroll effect
				event.preventDefault();

				var $section = jQuery( href_link );
				if(  jQuery($section).length>0 ){
					jQuery('html, body').animate({
						scrollTop: $section.offset().top - extra_height
					}, 500);
					// add active class
					parent = jQuery(this_a_tag).closest('.menu');
					jQuery('li', parent).removeClass('current-menu-item current_page_item');
					jQuery(this_a_tag).parent().addClass('current-menu-item current_page_item');
				}
				
			} else {
				
				if (/^(f|ht)tps?:\/\//i.test(href_link)) {

					var curr_url = window.location.href.replace(/#.*/,'');
					var href_link_without_anchor = href_link.replace(/#.*/,'');
					
					if( href_link_without_anchor == curr_url ){
						// You are on current page with anchor link
						event.preventDefault(); // Scroll effect
						href_link = href_link.substring(href_link.indexOf("#"));
						// scrolling
						var $section = jQuery( href_link );
						if(  jQuery($section).length>0 ){
							jQuery('html, body').animate({
								scrollTop: $section.offset().top - extra_height
							}, 500);
							// add active class
							parent = jQuery(this_a_tag).closest('.menu');
							jQuery('li', parent).removeClass('current-menu-item current_page_item');
							jQuery(this_a_tag).parent().addClass('current-menu-item current_page_item');
						}
					}
				}
			}
		});
	}
}

var creativesplanet_sticky_header = function() {
	if( jQuery('.cspt-header-sticky-yes').length > 0 ){
		var offset_px = 0;
		if( jQuery('#wpadminbar').length>0 ){
			offset_px = jQuery('#wpadminbar').height();
		}
		if( jQuery(document).width()>cspt_js_variables.responsive ){
			jQuery( '.cspt-header-sticky-yes' ).stick_in_parent({ 'parent':'body', 'spacer':false, 'offset_top':offset_px, 'sticky_class':'cspt-sticky-on'}).addClass('cspt-sticky-applied').on("sticky_kit:stick", function(e) { 
				if( jQuery('.cspt-sep-sticky-logo-container').length>0 ){
					var logo_width = jQuery('.cspt-sep-sticky-logo-container').width();
					jQuery('.navigation-top').animate({ paddingLeft: logo_width }, function(){
						jQuery('.cspt-sep-sticky-logo-container').animate({ opacity: "1" })
					});
				}
			}).on("sticky_kit:unstick", function(e) {
				if( jQuery('.cspt-sep-sticky-logo-container').length>0 ){
					jQuery('.cspt-sep-sticky-logo-container').animate({opacity: "0"},function(){
						jQuery('.navigation-top').animate({paddingLeft: 0 })
					});
				}
			});
		} else {
			if( jQuery( '.cspt-header-sticky-yes' ).hasClass('cspt-sticky-applied') ){
				jQuery( '.cspt-header-sticky-yes' ).trigger("sticky_kit:detach").removeClass('cspt-sticky-applied');
			}
		}
	}
}

var cspt_sorting = function() {
	jQuery('.cspt-sortable-yes').each(function(){
		var boxes	= jQuery('.cspt-element-posts-wrapper', this );
		var links	= jQuery('.cspt-sortable-list a', this );			
		boxes.isotope({
			animationEngine : 'best-available'
		});
		links.on('click', function(e){
			var selector = jQuery(this).data('sortby');
			if( selector != '*' ){
				var selector = '.' + selector;
			}
			boxes.isotope({
				filter			: selector,
				itemSelector	: '.cspt-ele',
				layoutMode		: 'fitRows'
			});
			links.removeClass('cspt-selected');
			jQuery(this).addClass('cspt-selected');
			e.preventDefault();
		});
	});
}

var cspt_toggleSidebar = function() {
	jQuery(".cspt-navbar > div").toggleClass("active");
	if( jQuery('.cspt-navbar > div > .closepanel').length==0 ){
		jQuery('.cspt-navbar > div').append("<span class='closepanel'><i class='cspt-base-icon-cancel'></i></span>");
		jQuery('.cspt-navbar > div > .closepanel').on('click', function(){	    		
			jQuery('.nav-menu-toggle').trigger('click');	    		
		});
	}
}

/* ============================================== */
/* BG Image yes class in each Section and Column
/* ============================================== */
var cspt_bgimage_class = function() {
	jQuery('.elementor-section').each(function() {
		if( jQuery(this).css('background-image')!='' && jQuery(this).css('background-image')!='none' ){
			jQuery(this).addClass('cspt-bgimage-yes' ).removeClass('cspt-bgimage-no' );
		} else {
			jQuery(this).addClass('cspt-bgimage-no' ).removeClass('cspt-bgimage-yes' );
		}
	});
	jQuery('.elementor-column').each(function() {
		if( jQuery(this).children('.elementor-column-wrap').children('.cspt-stretched-div').length ){
			if( jQuery(this).children('.elementor-column-wrap').children('.cspt-stretched-div').css('background-image')!='' && jQuery(this).children('.elementor-column-wrap').children('.cspt-stretched-div').css('background-image')!='none' ){
				jQuery(this).addClass('cspt-bgimage-yes' ).removeClass('cspt-bgimage-no' );
			} else {
				jQuery(this).addClass('cspt-bgimage-no' ).removeClass('cspt-bgimage-yes' );
			}
		} else {
			if( jQuery(this).children('.elementor-column-wrap').css('background-image')!='' && jQuery(this).children('.elementor-column-wrap').css('background-image')!='none' ){
				jQuery(this).addClass('cspt-bgimage-yes' ).removeClass('cspt-bgimage-no' );
			} else {
				jQuery(this).addClass('cspt-bgimage-no' ).removeClass('cspt-bgimage-yes' );
			}
		}
	});
};

/* ============================================== */
/* BG Color yes class in each Section and Column
/* ============================================== */
var cspt_bgcolor_class = function() {
	jQuery('.elementor-section').each(function() {
		if( jQuery(this).css('background-color')!='' && jQuery(this).css('background-color')!='transparent' ){
			jQuery(this).addClass('cspt-bgcolor-yes');
		}
	});
	jQuery('.elementor-column').each(function() {
		if( jQuery(this).children('.cspt-stretched-div').length ){
			if( jQuery(this).children('.cspt-stretched-div').css('background-color')!='' && jQuery(this).children('.cspt-stretched-div').css('background-color')!='transparent' ){
				jQuery(this).addClass('cspt-bgcolor-yes' ).removeClass('cspt-bgcolor-no' );
			} else {
				jQuery(this).addClass('cspt-bgcolor-no' ).removeClass('cspt-bgcolor-yes' );
			}
		} else {
			if( jQuery(this).children('.elementor-column-wrap').css('background-color')!='' && jQuery(this).children('.elementor-column-wrap').css('background-color')!='transparent' ){
				jQuery(this).addClass('cspt-bgcolor-yes' ).removeClass('cspt-bgcolor-no' );
			} else {
				jQuery(this).addClass('cspt-bgcolor-no' ).removeClass('cspt-bgcolor-yes' );
			}
		}
	});
};

/* ====================================== */
/* Reset and rearrange Stretched Column
/* ====================================== */
var cspt_rearrange_stretched_col = function( model_id ) {
	if( jQuery('body').hasClass('elementor-editor-active') ){
		jQuery( '*[data-id="'+model_id+'"]' ).each(function(){
			jQuery('.cspt-stretched-div', this).remove();
			jQuery('.elementor-column-wrap', this).removeAttr('style');
			setTimeout(function(){ cspt_stretched_col(); }, 50);
		});	
	}
}

/* ====================================== */
/* Stretched Column
/* ====================================== */
var cspt_stretched_col = function() {

	jQuery('.elementor-section-wrap > .elementor-section').each(function(){
		if( jQuery(this).hasClass('cspt-col-stretched-left') || jQuery(this).hasClass('cspt-col-stretched-right') || jQuery(this).hasClass('cspt-col-stretched-both') ){
			jQuery(this).addClass('cspt-col-stretched-yes').removeClass('cspt-col-stretched-no');
		} else {
			jQuery(this).addClass('cspt-col-stretched-no').removeClass('cspt-col-stretched-yes');
		}
	});

	// remove all stretched related changes in each column
	jQuery('.elementor-section-wrap > .elementor-section').each(function(){
		var ThisSection = jQuery(this);
		var ThisColumn	= '';
		jQuery( '.elementor-row > .elementor-column:not(.elementor-inner-column)', ThisSection ).each(function(){
			ThisColumn	= jQuery(this);
			jQuery( '.cspt-stretched-div', ThisColumn ).remove();
			ThisColumn.removeClass('cspt-col-stretched-yes cspt-col-stretched-left cspt-col-stretched-right cspt-col-stretched-content-yes');
		});
	});

	jQuery('.elementor-section-wrap > .elementor-section.cspt-col-stretched-yes').each(function(){

		var ThisSection		= jQuery(this);
		var ThisColumn		= '';
		var ColWrapper		= '';
		var StretchedEle	= '';

		if( ThisSection.hasClass('cspt-col-stretched-left') || ThisSection.hasClass('cspt-col-stretched-both') ){
			ThisColumn = jQuery( '.elementor-row > .elementor-column:not(.elementor-inner-column):first-child', ThisSection );
			
			if( jQuery('.cspt-stretched-div', ThisColumn).length==0 ){
				ColWrapper = ThisColumn.children('.elementor-column-wrap');
				ColWrapper.prepend( '<div class="cspt-stretched-div"></div>' );

				// Stretched Element
				StretchedEle = ColWrapper.children('.cspt-stretched-div');

				StretchedEle.addClass( 'cspt-stretched-left' );
				ThisColumn.addClass('cspt-col-stretched-yes cspt-col-stretched-left');

				if( ThisSection.hasClass('cspt-left-col-stretched-content-yes') ){
					ThisColumn.addClass('cspt-col-stretched-content-yes');
				} else {
					ThisColumn.removeClass('cspt-col-stretched-content-yes');
				}

				// background move to stretched div
				ColWrapper.css('background-image', '');
				var bgImage =  ColWrapper.css('background-image');
				if( bgImage!='none' && bgImage!='' ){
					StretchedEle.css('background-image', bgImage );
					ColWrapper.css('background-image', 'none');
				}

				// border radious
				ColWrapper.css('border-top-left-radius', '');
				ColWrapper.css('border-top-right-radius', '');
				ColWrapper.css('border-bottom-left-radius', '');
				ColWrapper.css('border-bottom-right-radius', '');
				var radius_t_left  =  ColWrapper.css('border-top-left-radius');
				var radius_t_right =  ColWrapper.css('border-top-right-radius');
				var radius_b_left  =  ColWrapper.css('border-bottom-left-radius');
				var radius_b_right =  ColWrapper.css('border-bottom-right-radius');
				if( radius_t_left!='0' && radius_t_left!='' ){
					StretchedEle.css('border-top-left-radius', radius_t_left );
					ColWrapper.css('border-top-left-radius', '0');
				}
				if( radius_t_right!='0' && radius_t_right!='' ){
					StretchedEle.css('border-top-right-radius', radius_t_right );
					ColWrapper.css('border-top-right-radius', '0');
				}
				if( radius_b_left!='0' && radius_b_left!='' ){
					StretchedEle.css('border-bottom-left-radius', radius_b_left );
					ColWrapper.css('border-bottom-left-radius', '0');
				}
				if( radius_b_right!='0' && radius_b_right!='' ){
					StretchedEle.css('border-bottom-right-radius', radius_b_right );
					ColWrapper.css('border-bottom-right-radius', '0');
				}



				// Background Color
				var bgColor = ColWrapper.css('background-color');
				if( bgColor!='' ){
					StretchedEle.css('background-color', bgColor );
					ColWrapper.css('background-color', 'transparent');
				}

				// Background Position
				var bgPosition = ColWrapper.css('background-position');
				if( bgPosition!='' ){
					StretchedEle.css('background-position', bgPosition );
				}

				// Background Repeat
				var bgRepeat = ColWrapper.css('background-repeat');
				if( bgRepeat!='' ){
					StretchedEle.css('background-repeat', bgRepeat );
				}

				// Background Size
				var bgSize = ColWrapper.css('background-size');
				if( bgSize!='' ){
					StretchedEle.css('background-size', bgSize );
				}

				cspt_stretched_col_calc();

			}

		}

		if( ThisSection.hasClass('cspt-col-stretched-right') || ThisSection.hasClass('cspt-col-stretched-both') ){
			ThisColumn = jQuery( '.elementor-row > .elementor-column:not(.elementor-inner-column):last-child', ThisSection );

			if( jQuery('.cspt-stretched-div', ThisColumn).length==0 ){
				ColWrapper = ThisColumn.children('.elementor-column-wrap');
				ColWrapper.prepend( '<div class="cspt-stretched-div"></div>' );

				// Stretched Element
				StretchedEle = ColWrapper.children('.cspt-stretched-div');

				StretchedEle.addClass( 'cspt-stretched-right' );
				ThisColumn.addClass('cspt-col-stretched-yes cspt-col-stretched-right');

				if( ThisSection.hasClass('cspt-right-col-stretched-content-yes') ){
					ThisColumn.addClass('cspt-col-stretched-content-yes');
				} else {
					ThisColumn.removeClass('cspt-col-stretched-content-yes');
				}

				// background move to stretched div
				ColWrapper.css('background-image', '');
				var bgImage = ColWrapper.css('background-image');
				if( bgImage!='none' && bgImage!='' ){
					StretchedEle.css('background-image', bgImage );
					ColWrapper.css('background-image', 'none');
				}

				// border radious
				ColWrapper.css('border-top-left-radius', '');
				ColWrapper.css('border-top-right-radius', '');
				ColWrapper.css('border-bottom-left-radius', '');
				ColWrapper.css('border-bottom-right-radius', '');
				var radius_t_left  =  ColWrapper.css('border-top-left-radius');
				var radius_t_right =  ColWrapper.css('border-top-right-radius');
				var radius_b_left  =  ColWrapper.css('border-bottom-left-radius');
				var radius_b_right =  ColWrapper.css('border-bottom-right-radius');
				if( radius_t_left!='0' && radius_t_left!='' ){
					StretchedEle.css('border-top-left-radius', radius_t_left );
					ColWrapper.css('border-top-left-radius', '0');
				}
				if( radius_t_right!='0' && radius_t_right!='' ){
					StretchedEle.css('border-top-right-radius', radius_t_right );
					ColWrapper.css('border-top-right-radius', '0');
				}
				if( radius_b_left!='0' && radius_b_left!='' ){
					StretchedEle.css('border-bottom-left-radius', radius_b_left );
					ColWrapper.css('border-bottom-left-radius', '0');
				}
				if( radius_b_right!='0' && radius_b_right!='' ){
					StretchedEle.css('border-bottom-right-radius', radius_b_right );
					ColWrapper.css('border-bottom-right-radius', '0');
				}

				// Background Color
				var bgColor = ColWrapper.css('background-color');
				if( bgColor!='' ){
					StretchedEle.css('background-color', bgColor );
					ColWrapper.css('background-color', 'transparent');
				}

				// Background Position
				var bgPosition = ColWrapper.css('background-position');
				if( bgPosition!='' ){
					StretchedEle.css('background-position', bgPosition );
				}

				// Background Repeat
				var bgRepeat = ColWrapper.css('background-repeat');
				if( bgRepeat!='' ){
					StretchedEle.css('background-repeat', bgRepeat );
				}

				// Background Size
				var bgSize = ColWrapper.css('background-size');
				if( bgSize!='' ){
					StretchedEle.css('background-size', bgSize );
				}

				cspt_stretched_col_calc();

			}
		}

	});

};

var cspt_stretched_col_calc = function() {

	// padding left or right
	if( jQuery('.elementor-section-wrap > .elementor-section > .elementor-container > .elementor-row > .elementor-column.cspt-col-stretched-yes').length>0 ){

		// Returns width of browser viewport
		var window_width = jQuery( window ).width();

		// Returns width of HTML document
		var document_width = jQuery( document ).width();

		jQuery('.elementor-section-wrap > .elementor-section > .elementor-container > .elementor-row > .elementor-column.cspt-col-stretched-yes').each(function(){

			var this_ele    = jQuery(this);
			var curr_width  = jQuery(this).closest('.elementor-row').width();
			var extra_width = ((window_width - curr_width)/2);

			var position = 'left';
			if( jQuery(this).hasClass('cspt-col-stretched-right') ){
				position = 'right';
			}

			jQuery('.cspt-stretched-div', jQuery(this)).css( 'margin-'+position,'-'+extra_width+'px' );

			// stretched column content too
			if( jQuery(this).hasClass('cspt-col-stretched-content-yes') ){
				var stretched_width = jQuery('.cspt-stretched-div', jQuery(this) ).width();
				jQuery(this).children('.elementor-column-wrap').css( 'margin-'+position,'-'+extra_width+'px' );
				jQuery(this).children('.elementor-column-wrap').css( 'width', stretched_width+'px' );
			} else {
				jQuery(this).children('.elementor-column-wrap').css( 'margin-'+position,'' );
				jQuery(this).children('.elementor-column-wrap').css( 'width', '' );
			}
		});
	}

}


var cspt_preloader = function() {
	jQuery(".cspt-preloader").fadeOut('600');
}


/* ----------- */

/* ON: Resize */
jQuery(window).resize(function($){
	creativesplanet_sticky_header();
	cspt_stretched_col_calc();
});
	
/* ON: Document Ready */
jQuery(document).ready(function($){
	cspt_sorting();
	creativesplanet_one_page();
	cspt_bgimage_class();
	cspt_bgcolor_class();
	cspt_stretched_col();
	cspt_stretched_col_calc();
	
	jQuery('.cspt-navbar li').on('hover', function() {
		if(jQuery(this).children("ul").length == 1) {
			var parent = jQuery(this);
			var child_menu = jQuery(this).children("ul");
			if( jQuery(parent).offset().left + jQuery(parent).width() + jQuery(child_menu).width() > jQuery(window).width() ){
				jQuery(child_menu).addClass('cspt-nav-left');
			} else {
				jQuery(child_menu).removeClass('cspt-nav-left');
			}
		}
	});

	creativesplanet_sticky_header();

	var i_type = 'image';
	jQuery('a.cspt-lightbox, a.cspt-lightbox-video, .cspt-lightbox-video a, .cspt-lightbox a').each(function(){
		if( jQuery(this).hasClass('cspt-lightbox-video') || jQuery(this).closest('.wpb_single_image').hasClass('cspt-lightbox-video') || jQuery(this).closest('.vc_icon_element').hasClass('cspt-lightbox-video') ){
			i_type = 'iframe';
		} else {
			i_type = 'image';
		}
		jQuery(this).magnificPopup({type:i_type});
	});
	
	jQuery('.cspt-navbar > div > ul li:has(ul)').append("<span class='sub-menu-toggle'><i class='cspt-base-icon-down-open-big'></i></span>");
	jQuery('.cspt-popup').on('click', function(event) {
		event.preventDefault();
		var href  = jQuery(this).attr('href');
		var title = jQuery(this).attr('title');
		window.open( href , title, "width=600,height=500");
	});
	jQuery('.cspt-testimonial-active').each(function(){
		var ele_parent = jQuery(this).closest('.cspt-element-posts-wrapper');
		jQuery('.creativesplanet-ele.creativesplanet-ele-testimonial', ele_parent ).on('mouseover', function() {
			jQuery('.creativesplanet-ele.creativesplanet-ele-testimonial', ele_parent ).removeClass('cspt-testimonial-active');
			jQuery(this).addClass('cspt-testimonial-active');
		});
	});
	
	jQuery(function() {
		jQuery('.cspt-header-search-btn').on("click", function(event) {
			event.preventDefault();
			jQuery(".cspt-header-search-form-wrapper").addClass("open");
			jQuery('.cspt-header-search-form-wrapper input[type="search"]').focus();
		});
		jQuery(".cspt-search-close").on("click keyup", function(event) {
			jQuery(".cspt-header-search-form-wrapper").removeClass("open");
		});
	});

	jQuery(".nav-menu-toggle").on("click tap", function() {
		cspt_toggleSidebar();
	});

	jQuery('.sub-menu-toggle').on( 'click', function() {
		if(jQuery(this).siblings('.sub-menu, .children').hasClass('show')){
			jQuery(this).siblings('.sub-menu, .children').removeClass('show');
			jQuery( 'i', jQuery(this) ).removeClass('cspt-base-icon-up-open-big').addClass('cspt-base-icon-down-open-big');
		} else {
			jQuery(this).siblings('.sub-menu, .children').addClass('show');
			jQuery( 'i', jQuery(this) ).removeClass('cspt-base-icon-down-open-big').addClass('cspt-base-icon-up-open-big');
		}
		return false;
	});

	// scroll-to-top
	  var btn = jQuery('.scroll-to-top');

	  jQuery(window).scroll(function() {
	    if (jQuery(window).scrollTop() > 300) {
	      btn.addClass('show');
	    } else {
	      btn.removeClass('show');
	    }
	  });

	  btn.on('click', function(e) {
	    e.preventDefault();
	    jQuery('html, body').animate({scrollTop:0}, '300');
	  });
	
});	

/* ON: Window Load */
jQuery(window).load(function(){
	cspt_preloader();
	cspt_sorting();
	jQuery("div.cspt-gallery").each(function(){
		jQuery( this ).lightSlider({ item: 1, auto: true, loop: true, controls: false, speed: 1500, pause: 5500 }); 
	});
});


$(document).ready(function () {
    $('#features').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: false,
        autoplay: true,
        smartSpeed: 3000,
        autoplayTimeout: 7000,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
});