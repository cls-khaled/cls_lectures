
let myimg=document.getElementById("imgdress"); /* DOM = Document Object Model  */

function HidePhotoDress()
{
    myimg.classList.remove("ShowPhotoDress");   
     myimg.classList.add("HidePhotoDress");     
}


function ShowPhotoDress()
{
     myimg.classList.add("ShowPhotoDress");     
}

function HideAndShowPhotoDress()
{
     myimg.classList.toggle("HidePhotoDress");     
}