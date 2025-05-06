"use strict";
let linkToggle=document.getElementById("linkToggle");
let signIn=document.getElementById("signIn");
let LogIn=document.getElementById("logIn");

let togglePass=document.getElementById("togglePass");
let password=document.getElementById("password");
let icon=document.querySelector(".icon");

{/* <i class="fa-solid fa-eye-slash"></i> */}


linkToggle.addEventListener('click',function(e){
    e.preventDefault();
    // signIn.classList.add('hide');
    // signIn.classList.add('unActive');
    // LogIn.classList.add('show');
    // LogIn.classList.add('active');

    signIn.classList.toggle('unActive');
    LogIn.classList.toggle('active');

    // linkToggle.innerText="Sign Up "

    if( linkToggle.innerText == "Sign In")
    {
        linkToggle.innerText="Sign Up "
    }
    else
    {
        linkToggle.innerText="Sign In"
    }

   
});


  //------------------- Hide / SHow Password 
togglePass.addEventListener("click",function(e){

    e.preventDefault();

   

     if(password.getAttribute("type")=="password")
     {
         password.setAttribute("type","text");
         icon.classList.replace("fa-eye","fa-eye-slash");

        //  icon.classList.add("fa-eye-slash");
        //  icon.classList.remove("fa-eye");
     }
     else
     {
        password.setAttribute("type","password");

        icon.classList.replace("fa-eye-slash","fa-eye");

        // icon.classList.add("fa-eye");
        //  icon.classList.remove("fa-eye-slash");
     }

     
})