const btn=document.getElementById("btn");
const pass=document.getElementById("password");
const icon=document.querySelector('.icon');

btn.addEventListener("click",function(){

    if(pass.type=="password"){
        pass.type="text";
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    }
    else
    {
        pass.type="password";

        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
})