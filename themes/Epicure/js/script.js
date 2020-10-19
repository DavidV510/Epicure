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
    $('#dishes').on('click',function(){
        var selected_option_value=$("#dishes button:clicked").val();
        var id = $(this).data('id');
        console.log(selected_option_value)

        // $.ajax({
        //     type:'post',
        //     url:admin_ajax.ajaxurl,
        //     data:{
        //         'action': 'getDishes',
        //         'name': selected_option_value,
        //         'id' : id
        //     },
        //     success:function(response){
        //        var rep=response.replace('0','')
        //       $('.theDishes').html(rep.replace('0',''));
        //     },
        //     error:function(response){
        //         console.log(response)
        //     }
        // })

    });

   
})
