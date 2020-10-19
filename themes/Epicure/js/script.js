var $=jQuery
$(document).ready(function(){
    $('.headContainer .mobile .showMenu .icons .searchIcon').on('click',function(){
        $('.headContainer .mobile .searchMobile').toggle('slow')
    })

    // Opening the Hidden Menu
    $('.headContainer .mobile .showMenu .toggle').on('click',function(){
        $('.headContainer .mobile .hiddenMenu').toggle('')
    })
    $('.headContainer .mobile .showMenu .toggle::after').on('click',function(){
        $('.headContainer .mobile .hiddenMenu').toggle('')
    })
    $('.headContainer .mobile .showMenu .toggle::before').on('click',function(){
        $('.headContainer .mobile .hiddenMenu').toggle('')
    })

    // Closing the Hidden Menu
    $('.headContainer .mobile .hiddenMenu .close').on('click',function(){
        $('.headContainer .mobile .hiddenMenu').toggle('slow')
    })


    // Activate Owl-Carousel 
    if(parseInt($(window).width()) < 780){
        $('.owl-carousel').owlCarousel({
            center: false,
            dots:false,
            dragEndSpeed:600,
            items:2,
            loop:false,
            margin:-415,
            responsive:{
                300:{
                    margin:100,
                    center:true,
                },

                700:{
                    margin:-415
                }
            }
            
        })
    }
    else{
        $('.owl-carousel').css('display','grid');
    }

    // Show Different Dishes
    $('#dishes').on('change',function(){
        var selected_option_value=$("#dishes option:selected").val();
        console.log(selected_option_value)

        $.ajax({
            type:'post',
            url:admin_ajax.ajaxurl,
            data:{
                'action': 'getDishes',
                'name': selected_option_value
            },
            success:function(response){
               console.log(response)
            },
            error:function(response){
                console.log(response)
            }
        })

    });

   
})
