let progress =document.querySelector('.progress-bar');
let ArrowTheTop=document.querySelector('.arrowTop')

window.addEventListener('scroll',function(){


 
    //-- document.body.scrollTop 
    //-- let width(سجل حركة الاسكرول || نفس الفانكشن فى فيرجن المتصفحات القديمة) /
    //-- (طول الصفحة  - المنطقة المرئية من الصفحة )
    let width=(document.documentElement.scrollTop)
    / (document.body.scrollHeight - document.documentElement.clientHeight)*100;

    console.log("Scroll Space : "+document.documentElement.scrollTop);
    console.log("All Page  : "+document.body.scrollHeight);
    console.log("Fold Area  : "+document.documentElement.clientHeight);
    
    
    
   //  progress.style.width=width+'%';
    progress.style.width=`${width}%`
    console.log(width);
    // console.log(document.body.scrollTop);
    if(document.documentElement.scrollTop>500)
    {
       ArrowTheTop.classList.add('active');
    }
   else
   {
    ArrowTheTop.classList.remove('active');
   }
})

console.log(document.documentElement.scrollTop);
console.log(document.documentElement.clientHeight);

console.log(document.body.scrollHeight);
