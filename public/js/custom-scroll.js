 $(document).ready(function(){



          
    window.onload = function(){

          $('.scroll_to_top').hide();

        // $.getJSON("http://jsonplaceholder.typicode.com/albums/1/photos",function(result){
                

        //         $.each(result,function(index,element){
        //             console.log(element.id);
        //             alert("gather fake id from fake api is : "+element.id);

                  
        //         });
        // });
    }


        $('#scroll').click(function(){

            $("html, body").animate({ scrollTop: 0 }, 900);
            return false;
        });

    	  	$(window).bind('scroll', function() {
	           

			 if ($(window).scrollTop() > 70) {
			 
				 $('.nav_container').animate(600).addClass('fix-nav');
                 $('.scroll_to_top').show("slow").addClass('animated fadeInUp');
				
			 }
             else {
                 $('.nav_container').removeClass('fix-nav');

                 $('.scroll_to_top').addClass('animated fadeInDown');

                 $('.scroll_to_top').hide();

                


             }

             if ($(window).scrollTop() > 600){
                $('.column-2:eq(1)').addClass('animated fadeInDown normal');
                $('.column-2:eq(2)').addClass('animated fadeInUp normal');
             }
             


			});


    	  	$('.nav_right > ul > li:eq(0)').mouseover(function(){

    	 	
    	  	$('.sub_nav').hide();
    	  	$('#sub1').show();

    	  		$('#sub1').mouseout(function(){
    	  			$('.sub_nav').hide();
    	  		});
    	 

    	  		
    	  	});


    	  	$('.nav_right > ul > li:eq(1)').mouseover(function(){
    	  	
    	  		$('.sub_nav').hide();
    	  		$('#sub2').show();

    	  		$('#sub2').mouseout(function(){
    	  			$('.sub_nav').hide();
    	  		});
    	  	});

    	  	$('.nav_right > ul > li:eq(2)').mouseover(function(){
    	  	
    	  		$('.sub_nav').hide();
    	  		$('#sub3').show();

    	  		$('#sub3').mouseout(function(){
    	  			$('.sub_nav').hide();
    	  		});
    	  	});

    	  	$('.nav_right > ul > li:eq(3)').mouseover(function(){
    	  	
    	  		$('.sub_nav').hide();
    	  	
    	  	});


});
