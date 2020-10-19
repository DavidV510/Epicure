var $=jQuery
$(document).ready(function(){
// Show Different Dishes
    $('#dishes').on('change',function(){
        var selected_option_value=$("#dishes option:selected").val();
        console.log(selected_option_value)

        $.ajax({
            type:'post',
            data:{
                'action':'getDishes',
                'dish':selected_option_value,
            },
            url:admin_ajax.ajaxurl,
            success:function(data){
                var result=JSON.parse(data)
                if(result.response=='success'){
                    jQuery("[data-reservation='"+result.id+"']").parent().parent().remove();
                    
                }
            }
        })
    });
})