
let  min=document.querySelector('.min'),
 plus=document.querySelector('.plus'),
 num=document.querySelector('.num');


 let n=0;

 plus.addEventListener("click",()=>{

    n++;

   //  if(n<10)
   //  {
   //    n="0"+n;
   //  }
   //  else
   //  {
   //    n;
   //  }
    n=(n<10) ? "00"+n : n;
   //  n=(n<10) ? '0'+n:n;

    num.value=n;
    console.log(n);
 });


//------------ min
 
 min.addEventListener("click",()=>{

    if(n>1){
        n--;
    n=(n<10) ? '0'+n:n;

    num.value=n;
    console.log(n);
    }
 });