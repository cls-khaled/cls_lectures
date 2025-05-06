
let textarea=document.querySelector('#textarea');

textarea.addEventListener('keyup',function(e){

    // console.log(e.target.scrollHeight);

    textarea.style.height='auto';

    let scrollH =e.target.scrollHeight;

    textarea.style.height=`${scrollH}px`;
})
