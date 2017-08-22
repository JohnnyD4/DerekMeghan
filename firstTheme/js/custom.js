jQuery(document).ready(function($){
    
    /** Main Slider Script **/
    $('.main-slider').owlCarousel({
        stagePadding: 50,
        loop:true,
        margin:5,
        pagination: true,
        responsive:{
            0:{
                items:1,
                stagePadding:0,
            },
            600:{
                items:1,
                stagePadding:0,
            },
            1280:{
                items:1,
               stagePadding: 86.4,                                            
            },
            1366:{
                items:1,
                stagePadding: 97,            
            },
            1920:{
                items:1,            
                stagePadding: 376,
            }        
        }
    });
    
    /** Feature Slider Script **/
    $('.feature-slider').owlCarousel({
        loop:true,
        margin:5,
        pagination: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1280:{
                items:3,                                           
            },
            1366:{
                items:3,          
            },
            1920:{
                items:3,
            }        
        }
    });
    
    // Scroll Top  
    $('#ed-top').css('right',-65);
    $(window).scroll(function(){
        if($(this).scrollTop() > 300){
            $('#ed-top').css('right',20);
        }else{
            $('#ed-top').css('right',-65);
        }
    });
    
    $("#ed-top").click(function(){
      $('html,body').animate({scrollTop:0},600);
    });

    //Search Box Toogle
 	$('.header-search .fa-search').click(function(){
 		$('.header-search .search-form').slideToggle();
 	});
    
    //Sickey Sidebar
    $('#secondary, #primary').theiaStickySidebar();
    
    jQuery('.menu-toggle').click(function(e){
        
        jQuery('.menu-menu-1-container').toggleClass('open');
        e.preventDefault();
        
    });
});