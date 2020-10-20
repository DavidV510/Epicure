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

})

function sendAjax(arg,num){
    var id=$('#dishes').data('id')

    $.ajax({
            type:'post',
            url:admin_ajax.ajaxurl,
            data:{
                'action': 'getDishes',
                'name': arg,
                'id' : id
            },
            success:function(response){
               var rep=response.replace('</li>0','</li>')
              $('.theDishes').html(rep);
              $(`#dishes button`).css('border-bottom','none')
              $(`#dishes button:nth-child(${num})`).css('border-bottom','solid 2.3px rgba(222, 144, 0, 0.466)');
              
            },
            error:function(response){
                console.log(response)
            }
        })
}




function reduce(id){
    var num=document.querySelector(`#num${id}`).innerHTML
    num=Number(num)
    num--
    document.querySelector(`#num${id}`).innerHTML=num
    console.log(Number(num))
    if(Number(num)<=1){
        document.querySelector('.reduce').style.opacity="0"
        document.querySelector('.reduce').setAttribute("disabled")
    }
    if(Number(num)>1){
        document.querySelector('.reduce').style.opacity="100"
        document.querySelector('.reduce').setAttribute("editable")
    }
}

function add(id){
    var num=document.querySelector(`#num${id}`).innerHTML
    num=Number(num)
    num++
    document.querySelector(`#num${id}`).innerHTML=num
    if(Number(num)>1){
        document.querySelector('.reduce').style.opacity="100"
        document.querySelector('.reduce').setAttribute("editable")
    }
}


function addToBag(){
    var title=document.querySelector('.modal .innerModal .modal-dialog .modal-dish-inner .modal-dish-title .title').innerText;
    var img=document.querySelector('.modal .innerModal .modal-dialog .modal-dish-img img').src;
    var side=document.querySelector('.modal .innerModal .modal-dialog .modal-dish-inner .modal-dish-content .modal-dish-side .side-pick .the-side-pick input[type=radio]:checked').value;
    var change=document.querySelector('.modal .innerModal .modal-dialog .modal-dish-inner .modal-dish-content .modal-dish-change .change-pick .the-change-pick input[type="radio"]:checked').value;
    var quantity=Number(document.querySelector('.modal .innerModal .modal-dialog .modal-dish-inner .modal-dish-content .modal-dish-quantity .number').innerText);
    var total=quantity*Number(document.querySelector('.modal .innerModal .modal-dialog .modal-dish-inner .modal-dish-content .modal-dish-price span').innerText);

    var ItemObject={
        title:title,
        img:img,
        side:side,
        change:change,
        quantity:quantity,
        total:total
    }
    console.log(ItemObject)

    $.ajax({
        type:'post',
        url:admin_ajax.ajaxurl,
        data:{
            'action': 'sendItemCart',
            'title':title,
            'img':img,
            'side':side,
            'change':change,
            'quantity':quantity,
            'total':total
        },
        success:function(response){
            console.log(response)
            document.querySelector('.Cart tbody').append(response);
          
        },
        error:function(response){
            console.log(response)
        }
    })

}