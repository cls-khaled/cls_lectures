function more(){
    var dots=document.querySelector('.dots'),
    more=document.querySelector('.more'),
    button=document.getElementById('buttonmoreAndLess');

    if(dots.style.display =='none'){
        dots.style.display='inline';
        more.style.display='inline';
        button.innerHTML='Read More';
    }
    else
    {
        dots.style.display='none';
        more.style.display='none';
        button.innerHTML='Read Less';
    }
}