var errorElement=document.getElementById('error');
var form=document.getElementById('form');
var textName=document.getElementById('textName');
var textPass=document.getElementById('textPass');

form.addEventListener('submit',function(event){
    // alert("Form Alert");
    let error=[];
    if(textName.value =='' || textName.value==null)
    {
        error.push('برجاء أدخال أسم المستخدم');
    }

    if(textPass.value =='' || textPass.value==null)
    {
        error.push('برجاء أدخال  كلمة المرور');
    }

    if(textPass.value.length <6)
    {
        error.push("كلمة المرور يجب أن تكون أكثر  من 6  أحرف  " )
    }

    if(textPass.value.length > 10)
    {
        error.push("كلمة المرور يجب أن تكون أقل  من 10  أحرف  " )
    }

    if(textPass =="password")
    {
        error.push("كلمة المرور يجب أن لا تكون password  " )
    }
       
    if(error.length > 0)
    {
        event.preventDefault();
        errorElement.innerHTML=error.join('<br>');
       
    }
   
})