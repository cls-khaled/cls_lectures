//--- IF Page Reload Destroy Function 

// function toggleDarkMode(){
//     let body=document.body;
//     body.classList.toggle('dark-mode');
// }



//---02- Stop Page Reload And Call Local Storage 

window.onload=function(){
    let isDarkMode=localStorage.getItem('Mark');
    if(isDarkMode=='true')
    {
        document.body.classList.add('dark-mode');
    }
}

//01- Create Function By Local Storage -----------
function toggleDarkMode(){
    let body=document.body;
    body.classList.toggle('dark-mode');

    if(body.classList.contains('dark-mode'))
    {
        localStorage.setItem('Mark','true');
    }
    else
    {
        localStorage.removeItem('Mark');
    }
}

