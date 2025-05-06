var div =document.getElementById('main');
var display=0;

function showHideUsers(){
    if(display==1)
    {
        div.style.display="block";
        
        display=0;
    }
    else
    {
        div.style.display="none";
        display=1;
    }
}