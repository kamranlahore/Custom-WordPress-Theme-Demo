$(document).ready(function() {
	
	$('.h_faq_check').on('click',function(){
		$('.h_faq_hide').hide();
		$('#'+$(this).attr("h_faq_id")).show();
	}); 
	
	
	$('.h_uc_link').on('click',function(){
		$("#h_usecase>div.active").removeClass("active");
		$('#'+$(this).attr("h_id")).addClass("active");
	}); 
	
	$('.h_cs_link').on('click',function(){
		$("#h_casestudies>div.active").removeClass("active");
		$('#'+$(this).attr("h_id")).addClass("active");
	});
	
//     //start here
//    	  var height_cal = 0 ;
// 	  var get_height = 0 ;
// 	  var remove_height = 0;
// 	$(".search-menu img").click(function() {
// 	   $(".search-box").toggle();
// 	   $(".search-box input[type='text']").focus();
// 	 });
	
	
// 	//Auto Main Banner Image Height
// 	function main_banner_height(selector){
// 		var background = $(selector).css('background-image');
// 		//var
// 		// If the background image is anything other than "none"
// 			// Find and replace "url()" to get the pure image URL
// 			/* background = background.replace('url("', '').replace('")', ''); */
// 				background1 = background.replace('url(', '').replace(')', '');
// 				if (background1.indexOf('"') != -1) {
// 				background1 = background.replace('url("', '').replace('")', '');

// 				}
// 			// Create new Image instance and set path to our background
// 			var bg = new Image();
// 			bg.src = background1;
// 			// We now have serveral vars availible to pass through to the plugin
// 			// self = the element
// 			// background = the url
// 			// bg.width = image width
// 			// bg.height = image height


// 			var orginal_img_width  = bg.width;
// 			var orginal_img_height = bg.height;
// 			var req_height_percentage = (orginal_img_height / orginal_img_width ) * 100;

// 			var wind_widht = $( window ).width();
// 			var calculate_height =( (wind_widht / 100) * req_height_percentage +1 ) ;
// 			//console.log('background:' + background);
			
// 			//console.log("orginal_img_width:"+bg.width+",orginal_img_height:"+bg.height,"req_height_percentage:"+req_height_percentage,"wind_widht:"+wind_widht,"calculate_height:"+calculate_height);

// 			$(selector).height(calculate_height);
// // 		$(selector).css('height',calculate_height+' !important');
	
// 	return calculate_height;
// 	}
	
// 	//Banner Height On Load

// 	$( window ).on( "load", function() {
// 			console.log( "window loaded" );
		
// 			if($('.assive-home-page').length){
// 			    main_banner_height('.assive-home-page');
// 			}
// 			if($('.hybrid-model').length){
// 			    main_banner_height('.hybrid-model');
// 			}
		
	
// 	});
			
// 	//Banner Height On Ressise window
//         $( window ).resize(function() {
// 		   //Banner Height On Load
			
// 			if($('.assive-home-page').length){
// 			   main_banner_height('.assive-home-page');
// 			}
// 			if($('.hybrid-model').length){
// 			   main_banner_height('.hybrid-model');
// 			}
// 		});

/**********Scroll to div Function *****************************

  $(".scrollTo").on('click', function(e) {
     e.preventDefault();
     var target = $(this).attr('href');
     $('html, body').animate({
       scrollTop: ($(target).offset().top)
     }, 2000);
  });
	height_cal =  main_banner_height('.assive-home-page');
	get_height = height_cal - 70;
	remove_height = (get_height) - 0.25;
	*/
/*
   $(window).on("scroll", function() {
	
		if (!$("body").hasClass("page-template-get-started")){
			if (!$("body").hasClass("page-template-landing")){
				if($(window).scrollTop() > 0.5) {
					$("header").addClass("nav_g");
				}
				else{
					$("header").removeClass("nav_g");
				}
				if($(window).scrollTop() > 1) {						
					$("header").addClass("nav-bg");
					$("header").addClass("desk_responsive_head");
					$("header.desk_responsive_head").attr("style","background:linear-gradient(to right, #4775e5,#8e53e9) !important;");
				    $(".assivo-banner-text.desktop_view").css("display","none");
				    if ($(window).width() > 865){
				  //      $(".use-case").attr("style","margin-top:15% !important;");
				    }
				    else{
				  //  	$("section.mobile_view:nth-child(3)").attr("style","margin-top:15% !important;");
				    }
					
				} 
				else {
				 $("header.desk_responsive_head").attr("style","background:unet!important;");
				       $("header").removeClass("desk_responsive_head");
				       $("header").addClass("back_responsive");
					   $("header").removeClass("nav_g");
				       $(".nav-position").removeClass("nav-bg");
					    
				       $("header").removeClass("nav-bg");
				       main_banner_height('header');
				       if ($(window).width() > 865){
				     	  	$(".assivo-banner-text.desktop_view").css("display","block"); 
						    $(".assivo-banner-text.desktop_view").slideDown("slow");
				     	  //	$(".use-case").attr("style","margin-top:5% !important;");
				       }
					else{
				       	   //	$("section.mobile_view:nth-child(3)").attr("style","margin-top:5% !important;");
				       	}
				}
			}
	       }
	});  */
});
//-----------------------------search forms-------------------------

$(document).ready(function(){
  $('.wpcf7-form-control-wrap .email').hide();
    $('.placeholder-abst').click(function(){
//       alert('hello');
        $(this).parent().parent().find('.wpcf7-email').focus();
        var myclass='';
        if($(window).width() <= 865){
          myclass='.mobile_view';
        }
        else{
           myclass='.desktop_view';
        }
        $(this).parent().parent().find(myclass).hide();
        
    });
    $('.wpcf7-email').focusout(function(){
        
        if( $(this).val() == ''){
         //alert($(this).val());
         var myclass='';
        if($(window).width() <= 865){
          myclass='.mobile_view';
        }
        else{
           myclass='.desktop_view';
        }
          $(this).parent().parent().find(myclass).show(); 
      }
    });
});
$(document).ready(function(){
    $('.flip-box-front h5').on('click',function(){
//        alert('hello');
       $(this).closest('.flip-box-front').trigger('click');
    });
	
	//case-study-collapse
	$('.case-study-link').on('click',function(){
    	var c = $(this).attr('data-target');
			if ( !$( c ).hasClass( "show" ) ) {
				$('body').find(c).siblings('.card-header').find('a').trigger('click')
				$('body').find(c).siblings('.card-header').find('a').addClass('i-minus');
				$('body').find(c).siblings('.card-header').find('a').removeClass('i-plus');
			}
		setTimeout(function(){
			let h_t = $(document).scrollTop();
			$(document).scrollTop(h_t - 80);
		}, 2000);
    });
	
});


//----------------footer js code------------------//

$(document).ready(function(){
		    
	   $(".toggle-i-circle").click(function () {
                    $(".toggle-i-circle").each(function(){
				if($(this).attr('aria-expanded')=='true'){
				   $(this).removeClass("i-minus").addClass("i-plus");	
				}
			});
                    if ($(this).hasClass("collapsed")) {
                        $(this).toggleClass("i-minus i-plus");
                    }
        });
          $(".toggle-circle").click(function () {
            $(".toggle-circle").each(function(){
						if($(this).attr('aria-expanded')=='true'){
						   $(this).removeClass("minus").addClass("plus");	
						}
					});
            if ($(this).hasClass("collapsed")) {
            $(this).toggleClass("minus plus");
            }

        });
                $("body").click(function (e) {
                      if ($(e.target).is('.link p')){
                      $(e.target).parent('.link').trigger('click');
                     }
                    if($(e.target).is('.link')){
						$(".toggle-i-circle").each(function(){
						if($(this).attr('aria-expanded')=='true'){
						   $(this).removeClass("i-minus");
							$(this).addClass("i-plus");
						}
						
					});
                    $(e.target).parent().find('a').addClass("i-plus").removeClass("i-minus");
                    if ($(e.target).parent().find('a').hasClass("collapsed")) {
                        $(e.target).parent().find('a').toggleClass("i-minus i-plus");
                      }
// 					$('body').find('.toggle-i-circle').each(function(){
// 						tr=$(this).attr('data-target');
// 						if($(tr).hasClass('show')){
// 						     $(this).removeClass('i-plus');
// 							 $(this).addClass('i-minus');
// 						   }
// 						else{
// 							 $(this).removeClass('i-plus');
// 							 $(this).addClass('i-minus');
// 						}
// 					});
                    }
					if($(e.target).is('.faq-head')){
						$(".toggle-circle").each(function(){
						if($(this).attr('aria-expanded')=='true'){
						   $(this).removeClass("minus").addClass("plus");	
						}
					});
                    $(e.target).parent().find('a').addClass("plus").removeClass("minus");
                    if ($(e.target).parent().find('a').hasClass("collapsed")) {
                        $(e.target).parent().find('a').toggleClass("minus plus");
                      }
					}
					
                });
// 			    $('.filter-check').prop('checked', true);
            $("#search-case").on("keyup", function () {
                $('.case-box').hide();
                $('.study_box').hide();
                $('.case-box').removeClass('searchresults');
                $('.study_box').removeClass('searchresults');
                var value = $(this).val().toLowerCase();
                if (value == "") {
//                     $('.filter-check').trigger('click');
                    $('.case-box').hide();
					$('.study_box').hide();

					if (pagename == 'usecase') {
						create_pages('case-box', '');
					}
					if (pagename == 'casestudy') {
						create_pages('study_box', '');
					}                     
                    return false;
                }

                $(".case-box").filter(function () {
//                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
//                    $("#case-title").text('All Cases');
                    if ($(this).text().toLowerCase().indexOf(value) > -1) {
                        $(this).addClass('searchresults');
                    }
                });
                $(".study_box").filter(function () {
//                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
//                    $("#case-title").text('All Studies');
                    if ($(this).text().toLowerCase().indexOf(value) > -1) {
                        $(this).addClass('searchresults');
                    }
                });


                create_pages('searchresults', 'searched');






            });

            function create_pages(newclass, newid) {



                var count = 0;
                var pagelist = '<ul class="pagination">';
                $('.' + newclass).each(function () {
                    count++;

                });
                var pageselect = count / totalcontents;
				if (Number.isInteger(pageselect)==false) {
// 					alert(Number.isInteger(pageselect));
                    pageselect+=1;
                  }
// 				alert(pageselect);
             
				if(pageselect >=2 ){
		        for (j = 1; j <= pageselect; j++) {
                    acclass = '';
					
					if(pageselect==j){
					  
					   }
                    if (j == 1) {
                        acclass = 'active';
                        pagelist += '<li class="page-item ' + acclass + '"><a class="page-link" href="#" page="1"  id="' + newid + '">First</a></li>';
                    }
                    pagelist += '<li class="page-item ' + acclass + '" ><a class="page-link" href="#" page="' + j + '" id="' + newid + '">' + j + '</a></li>';
                } 
				}
                j -= 1;
                if (pagelist != '<ul class="pagination">') {

                    pagelist += '<li class="page-item " ><a class="page-link" href="#" page="' + j + '" id="' + newid + '">Last</a></li>';
                }
                pagelist += '</ul>';
                $('.pagenation-list').html('');
                $('.pagenation-list').html(pagelist);
                $('.' + newclass).slice(0, totalcontents).show();





            }




            $(".case-filter").click(function (e) {
                e.preventDefault();
                $(this).siblings('.filter-check').trigger('click');
            });

            ///////////Checkbox Filter code
//            $(".filter-check").prop('checked', true);
            $(".filter-check").click(function () {
                $(".case-box").removeClass('selected-cat');
                $(".study_box").removeClass('selected-cat');
                $("#case-title").text("");
//                                $(".all-filter-check").prop('checked',false);
                var selected = [];
                $('body').find('.filter-check').each(function () {

                    if ($(this).prop("checked") == true) {

                        var text = $(this).siblings('.case-filter').find('span').text();
                        var type = $(this).siblings('.case-filter').data('type');
                        var list = $(this).siblings('.case-filter').data(type);
                        if (list == '') {
                            list = type;
                        }
                        selected.push(list);

                    }

                });

                $(".case-box").hide();
                $(".study_box").hide();
                $(".category").hide();
                if (selected.length === 0) {
//                     $('.all-cat').trigger('click');
//                     $('.all-verticals').trigger('click');
                    $('.case-box').hide();
					$('.study_box').hide();

					if (pagename == 'usecase') {
						create_pages('case-box', '');
					}
					if (pagename == 'casestudy') {
						create_pages('study_box', '');
					}
					
					
                }
				if(selected.length != 0){
				    $.each(selected, function (i, v) {

                    $(".case-box").each(function () {

                        if ($(this).hasClass(v)) {

                            $(this).addClass('selected-cat');
                        }
                    });
                    $(".category").each(function () {
                        if ($(this).hasClass(v)) {
                            $(this).addClass('selected-cat');
                        }
                    });
                    $(".study_box").each(function () {
                        if ($(this).hasClass(v)) {
                            $(this).addClass('selected-cat');
                        }
                    });
                });
                   create_pages('selected-cat', 'selected');
				}
               
                
            });
            $('body').click(function (e) {
// 				alert($(e.target).attr('class'));
                if ($(e.target).is('#selected')) {
                    e.preventDefault();
                    $('.case-box').hide();
                    $('.study_box').hide();
                    $('.page-item').removeClass('active');
                    $(e.target).parent('.page-item').addClass('active');
//                               alert($(this).find('.page-link').html());
                    selpage = $(e.target).attr('page');
					select_pages(selpage);
                    next = selpage * totalcontents;
                    offset = next - totalcontents;
                    $(".selected-cat").slice(offset, next).show();
                }
                if ($(e.target).is('#searched')) {
                    e.preventDefault();
                    $('.case-box').hide();
                    $('.study_box').hide();
                    $('.page-item').removeClass('active');
                    $(e.target).parent('.page-item').addClass('active');
//                               alert($(this).find('.page-link').html());
                    selpage = $(e.target).attr('page');
					select_pages(selpage);
                    next = selpage * totalcontents;
                    offset = next - totalcontents;
                    $(".searchresults").slice(offset, next).show();
                }
                if ($(e.target).is('.page-link')) {
                    e.preventDefault();
					if($(e.target).attr('id')==''){
                            $('.case-box').hide();
							$('.study_box').hide();
							$('.page-item').removeClass('active');
							$(e.target).parent('.page-item').addClass('active');
		//                               alert($(this).find('.page-link').html());
							selpage = $(e.target).attr('page');
						    select_pages(selpage);
							next = selpage * totalcontents;
							offset = next - totalcontents;
							$(".case-box").slice(offset, next).show();
						    $(".study_box").slice(offset, next).show();
					   }
                  
                }


            });
            $('.all-cat').click(function () {
                $('.filter-check').each(function () {
                    if ($(this).attr('name') == 'category') {
                        $(this).prop('checked', true);
                    }
                });
                $('input[name="category"]').first().trigger('click');
                $('input[name="category"]').first().trigger('click');
                return false;
            });
            $('.all-verticals').click(function () {
                $('.filter-check').each(function () {
                    if ($(this).attr('name') == 'verticles') {
                        $(this).prop('checked', true);
                    }
                });
                $('input[name="verticles"]').first().trigger('click');
                $('input[name="verticles"]').first().trigger('click');
                return false;
            });


            //----------------paggination-----------------
            $('.case-box').hide();
            $('.study_box').hide();

            if (pagename == 'usecase') {
                create_pages('case-box', '');
            }
            if (pagename == 'casestudy') {
                create_pages('study_box', '');
            }




            $(".page-item").on('click', function (e) {
                e.preventDefault();
                $('.case-box').hide();
                $('.study_box').hide();
                $('.page-item').removeClass('active');
                $(this).addClass('active');
				
//                               alert($(this).find('.page-link').html());
                selpage = $(this).find('.page-link').attr('page');
			    
				select_pages(selpage);
				next = selpage * totalcontents;
                offset = next - totalcontents;
                $('.case-box').slice(offset, next).show();
                $('.study_box').slice(offset, next).show();
				
				
            });

             function select_pages(selpage){
				 lastval=$('.page-item').last().find('.page-link').attr('page');
				 if(selpage==1){
				   $('.page-item').slice(0,2).find('.page-link').css('background-color','#007bff');
					$('.page-item').slice(0,2).find('.page-link').css('color','#fff');
				    $('.page-item').slice(-2).find('.page-link').css('background-color','#fff');
					$('.page-item').slice(-2).find('.page-link').css('color','#007bff');    
				}
				else if(selpage==lastval){
		         	$('.page-item').slice(-2).find('.page-link').css('background-color','#007bff');
					$('.page-item').slice(-2).find('.page-link').css('color','#fff');  
					$('.page-item').slice(0,2).find('.page-link').css('background-color','#fff');
					$('.page-item').slice(0,2).find('.page-link').css('color','#007bff');
				   }
				else{
					$('.page-item').slice(0,2).find('.page-link').css('background-color','#fff');
					$('.page-item').slice(0,2).find('.page-link').css('color','#007bff');
					$('.page-item').slice(-2).find('.page-link').css('background-color','#fff');
					$('.page-item').slice(-2).find('.page-link').css('color','#007bff'); 
				}
			 }
			
			  	
			
		});



$(document).ready(function(){
var ur= window.location.href;
if(ur.split('#')[1]!=undefined && ur.split('#')[1]!= '' ){
csid=ur.split('#')[1];
var btid=csid.split('-')[2];
$('#case-study-btn-'+btid).trigger('click',function(){
	 $('html, body').animate({
        scrollTop: $("#case-study-"+btid).offset().top
    });
	
});
}
$('.data-entry-tabs .nav-link').on('click',function(){

    $('html, body').animate({
        scrollTop: $('.data-entry-tabs').offset().top-100
    });

    
}); 

	
});


//Show one Category's use cases at a time (Nayyer)
	$('.filter-check').change(function(){
		if($(this).is(':checked')){
			$('input.filter-check').prop('checked', false);
		}
	});


// For Active Category
	$(".uc-cat").click(function(){
    	$(this).addClass("activee");
		$('.uc-cat').not(this).removeClass('activee');
  	});
	

	$('.cat-name').click(function(){
		$('#case-header h3').html($(this).text());
	});