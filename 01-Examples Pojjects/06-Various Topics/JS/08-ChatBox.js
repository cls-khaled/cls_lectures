"use strict";

const start=document.getElementById("start");
const form=document.getElementById("form-chat");
const btnClose=document.getElementById("close");

// start.addEventListener('click',function(){

//     form.style.display="block";
// })
    
start.addEventListener('click',function(){

    if(form.style.display=="block")
    {
        form.style.display="none";
    }
    else
    {
        form.style.display="block";
    }

     if(start.innerHTML=="أغلق المحادثة")
     {
        start.innerHTML="إبدء المحادثة"
     }
     else
     {
        start.innerHTML="أغلق المحادثة"
     }
})
    


btnClose.addEventListener('click',function(e){
      e.preventDefault();
    form.style.display="none";
})
    