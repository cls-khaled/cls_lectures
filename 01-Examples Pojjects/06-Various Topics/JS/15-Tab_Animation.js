"use strict";

let links=document.querySelectorAll('.link');
let line = document.querySelector('.line');

let firstLink= links[0].clientWidth;

line.style.width=`${firstLink}px`;

for(const link of links)
{
    link.addEventListener('click',function(e){
        e.preventDefault();
        let widthLink= link.clientWidth;
        let offsetLink=link.offsetLeft;
        line.style.width=`${widthLink}px`;
        line.style.transform = `translateX(${offsetLink}px)`;
    })
}