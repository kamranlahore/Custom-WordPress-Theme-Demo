/******** Slider JS  ************/


$(document).ready(function() {	
	
	$('.owl-h-blog-slider').owlCarousel({
		 
		nav: true,
		rows: true,
		rowsCount: 2,
		navText: ["<img src='"+base_url+"/images/prev-icon.png'>","<img src='"+base_url+"/images/next-icon.png'>"],
		navContainer: '#h_blog_slider_arrows',
		dots: false,
		loop:true,
		margin:10,
		autoplay: false,
		smartSpeed: 1000,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			991:{
				items:1
			}
		}
	})
	
	$('.owl-h-blog-nav').owlCarousel({
		 
		nav: true,
		rows: true,
		rowsCount: 2,
		navText: ["<img src='"+base_url+"/images/prev-icon.png'>","<img src='"+base_url+"/images/next-icon.png'>"],
		navContainer: '#h_blog_header_nav',
		dots: false,
		loop:true,
		margin:10,
		autoplay: false,
		smartSpeed: 1000,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			991:{
				items:5
			}
		}
	})
	
	$('.owl-h-testimonial').owlCarousel({
		 
		nav: true,
		rows: true,
		rowsCount: 2,
		navText: ["<img src='"+base_url+"/images/prev_slide.png'>","<img src='"+base_url+"/images/next_slide.png'>"],
		navContainer: '#h_testimonial_nav',
		dots: false,
		loop:true,
		margin:10,
		autoplay: false,
		smartSpeed: 1000,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			991:{
				items:3
			}
		}
	})

	$('.owl-usecase').owlCarousel({
		 
		nav: true,
		rows: true,
		rowsCount: 2,
		navText: ["<img src='"+base_url+"/images/prev_slide.png'>","<img src='"+base_url+"/images/next_slide.png'>"],
		navContainer: '#usecase_nav',
		dots: false,
		loop:false,
		rewind:true,
		margin:10,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			991:{
				items:4
			}
		}
	})
	
	$('.owl-services').owlCarousel({
		 
		nav: true,
		navText: ["<img src='"+base_url+"/images/prev_slide.png'>","<img src='"+base_url+"/images/next_slide.png'>"],
		navContainer: '#services_nav',
		dots: false,
		loop:false,
		rewind:true,
		margin:10,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			991:{
				items:3
			}
		}
	})
	
	
	var j;
    for (j = 1; j < 25;) {
		
		$('.owl-'+j).owlCarousel({
			 
			nav: true,
			navText: ["<img src='"+base_url+"/images/prev_slide.png'>","<img src='"+base_url+"/images/next_slide.png'>"],
			navContainer: '#'+j+'_nav',
			dots: false,
			loop:false,
			rewind:true,
			margin:10,
			responsiveClass:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				991:{
					items:3
				}
			}
		})
		
		j++;
		
		$('.owl-'+j).owlCarousel({
			 
			nav: true,
			navText: ["<img src='"+base_url+"/images/prev_slide.png'>","<img src='"+base_url+"/images/next_slide.png'>"],
			navContainer: '#'+j+'_nav',
			dots: false,
			loop:false,
			rewind:true,
			margin:10,
			responsiveClass:true,
			responsive:{
				0:{
					items:1
				},
				576:{
					items:2
				},
				768:{
					items:3
				},
				993:{
					items:4
				}
			}
		})
			j++;

	}
});