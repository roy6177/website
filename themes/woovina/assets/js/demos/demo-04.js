jQuery(function ($) {
	// Move Compare Button & Wishlist Button & Countdown
	$('ul.products.woovina-row.grid li.product, div.wew-woo-slider ul.products li.product').each(function(index, item) {
		var wishlist   = $(item).find('div.tinv-wraper.tinv-wishlist');
		var compare    = $(item).find('a.compare.button');
		var addtocart  = $(item).find('li.btn-wrap a.button');
		var wrapper    = $(item).find('li.btn-wrap');
		var quickview  = $(item).find('li.image-wrap a.wvn-quick-view');
		var imgwrap    = $(item).find('li.image-wrap');
		var ttproduct  = $(item).find('li.title');
		var inproduct  = $(item).find('li.inner');
		var desproduct = $(item).find('li.woo-desc');
		var wooentryinner = $(item).find('ul.woo-entry-inner');

		var atctext	= $(addtocart).html();
		var cptext	= $(compare).html();
		var qvtext  = $(quickview).text();

		// Add wrapper for the Add to cart & Compare
		$(addtocart).wrap('<div class="btn-inner btn-addtocart"></div>');
		$(compare).wrap('<div class="btn-inner btn-compare"></div>');
		$(quickview).wrap('<div class="btn-inner btn-quickview"></div>');
		addtocart = $(item).find('div.btn-inner.btn-addtocart');
		compare   = $(item).find('div.btn-inner.btn-compare');
		quickview = $(item).find('div.btn-inner.btn-quickview');

		var pach 	= $('<div class="btn-positions"></div>');

		// Add tooltip for buttons
		$("<div class='tooltip for-addtocart'>" + atctext + "</div>").appendTo($(addtocart));
		$("<div class='tooltip for-compare'>" + cptext + "</div>").appendTo($(compare));
		$("<div class='tooltip for-quickview'>" + qvtext + "</div>").appendTo($(quickview));
		
		// Add class for button Wishlist
		$(wishlist).addClass('btn-inner btn-wishlist');
		$(wishlist).find('div.tinvwl-tooltip').attr('class', 'tooltip for-wishlist');
		
		$(wishlist).appendTo($(pach));
		$(compare).appendTo($(pach));
		$(quickview).appendTo($(pach));
		$(addtocart).clone().appendTo($(imgwrap));
		$(addtocart).appendTo($(wrapper));

		$(pach).clone().appendTo($(imgwrap));
		$(pach).appendTo($(wrapper));
		// Move Countdown 
		var countdown  = $(item).find('div.jquery-countdown');
		var imgwrapper = $(item).find('div.woo-entry-image');
		
		if($(countdown).length) {
			$(countdown).removeClass('is-countdown');
			$(countdown).appendTo($(imgwrapper));
			$(item).find('div.jquery-countdown').each(function(index) {
				$(this).countdown({until: new Date($(this).attr('data-timer')), format: 'DHMS', padZeroes: true}); 		
			});
		}

		///Add wrapper for the Title & Inner & Woo-desc
		var ctproduct = $('<div class="content-product"></div>');
		
		$(ttproduct).appendTo($(ctproduct));
		$(desproduct).appendTo($(ctproduct));
		$(inproduct).appendTo($(ctproduct));
		$(wrapper).appendTo($(ctproduct));
		$(ctproduct).appendTo($(wooentryinner));
		
	});
	// For single product page
	if($('body.single-product').length) {
		var wishlist = $('body.single-product div.entry-summary').find('div.tinv-wraper');
		var compare  = $('body.single-product div.entry-summary').find('a.compare.button');
		var formcart = $('body.single-product div.entry-summary').find('form.cart');
		var cptext	 = $(compare).html();
		
		// Add wrapper for the Compare
		$(compare).wrap('<div class="btn-inner btn-compare"></div>');
		compare = $('body.single-product div.entry-summary').find('div.btn-inner.btn-compare');
		$("<div class='tooltip for-compare'>" + cptext + "</div>").appendTo($(compare));
		
		$('<div class="btn-single-page"></div>').appendTo($(formcart));
		var wrapper = $('body.single-product div.entry-summary').find('.btn-single-page');
		
		// Add class for button Wishlist
		$(wishlist).addClass('btn-inner btn-wishlist');
		$(wishlist).find('div.tinvwl-tooltip').attr('class', 'tooltip for-wishlist');
		
		$(wishlist).appendTo($(wrapper));
		$(compare).appendTo($(wrapper));
	}
	
	// After added to cart
	$(document.body).on('added_to_cart', function(){
		$('.btn-addtocart .added_to_cart').each(function(index, item) {
			var txtAdded = $(item).text();
			$(item).next().text(txtAdded);
		});
	});

	// Add carousel for Thumbnail images
	$('.single-product .product.wvn-thumbs-layout-horizontal .woocommerce-product-gallery .flex-control-thumbs').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 5,
	  slidesToScroll: 5,
	  responsive: [
	    {
	      breakpoint: 1200,
	      settings: {
	        slidesToShow: 4,
	        slidesToScroll: 3,
	        infinite: true,
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});

	//Add hover effect for menu item
	$('nav#site-navigation span.text-wrap').each(function(index, item) {
		var menutxt = $(item).text();
		$(item).attr("data-hover", menutxt);
	});
});