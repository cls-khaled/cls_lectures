"use strict";

let accordion_link=document.querySelectorAll('.link'),
accordion_content=document.querySelectorAll('.content-accordion');

// for(const link of accordion_link)
// {
//     link.addEventListener('click',()=>{
//         alert(link.getAttribute('data-accordion'));
           
//         const idContent=document.getElementById(link.getAttribute('data-accordion'));

//         idContent.className+='active';
//         link.className+="active";
//     })
// }


for(const link of accordion_link)
{
    
    link.addEventListener('click',()=>{
       alert(link.getAttribute('data-accordion'));
  alert(accordion_link.length);
        for(const activeLink of accordion_link){
            activeLink.className=activeLink.className.replace('active','');
        }
           

        for(const content of accordion_content){
            content.className=content.className.replace('active','');
        }


        const idContent=document.getElementById(link.getAttribute('data-accordion'));

        idContent.className+=' active';
        link.className+=" active";
    })
}