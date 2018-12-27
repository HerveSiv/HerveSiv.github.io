jQuery(function($){
	
	if(cur_page_data.pageid == 1){
		$('.header').css('width','90%');	
	}
	
	
	/**** Iso-box Filter ****/
		
		$('.filter-wrapper .html').attr("data-filter",".html");
		$('.filter-wrapper .all').attr("data-filter","*");
		$('.filter-wrapper .photoshop').attr("data-filter",".photoshop");
		$('.filter-wrapper .wordpress').attr("data-filter",".wordpress");
		$('.filter-wrapper .mobile').attr("data-filter",".mobile");
		
		if ( $('.iso-box-wrapper').length > 0 ) { 

		  var $container  = $('.iso-box-wrapper'), 
			$imgs     = $('.iso-box img');

		  $container.imagesLoaded(function () {

			$container.isotope({
			layoutMode: 'fitRows',
			itemSelector: '.iso-box'
			});

			$imgs.load(function(){
			  $container.isotope('reLayout');
			})

		  });

		  //filter items on button click

		  $('.filter-wrapper a').click(function(){

			  var $this = $(this), filterValue = $this.attr('data-filter');

				$container.isotope({ 
					filter: filterValue,
					animationOptions: { 
						duration: 750, 
						easing: 'linear', 
						queue: false, 
					}                
				});             

		  // don't proceed if already selected 

			  if ( $this.hasClass('selected') ) { 
				return false; 
			  }

			var filter_wrapper = $this.closest('.filter-wrapper');
			filter_wrapper.find('.selected').removeClass('selected');
			$this.addClass('selected');

			return false;
		  }); 

		}
		
		/***********/
		
});
