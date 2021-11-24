$(function(){
    var $registerForm = $("#registration");
    if($registerForm.length){
        $registerForm.validate({
            rules:{
                Username:{
                    required: true
                },
                Number_Plate:{
                    required: true 
                },
                password:{
                    required: true 
                },
                confirm_pass:{
                    required: true 
                }

            }, 
            messages:{
                Username:{
                    required: "Username is required"
                },
                Number_Plate:{
                    required: "Number plate is required" 
                },
                confirm_pass:{
                    required: "Password is required" 
                },
                password:{
                    required: "Password is required" 
                },
                errrorPlacement: function(error, element){
                    if(element.is(":radio")){
                        error.appendTo(element.parents(".gender"))
                    }else{
                        error.insertAfter(element);
                    }
                }
            }
        })
    }
})