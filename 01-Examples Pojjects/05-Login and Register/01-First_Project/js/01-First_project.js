"use strict";
let linkToggle=document.getElementById("linkToggle");
let signIn=document.getElementById("signIn");
let LogIn=document.getElementById("logIn");

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

})