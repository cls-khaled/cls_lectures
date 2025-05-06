let cursor=document.querySelector('.cursor');

addEventListener('mousemove',function(e){

    cursor.style.cssText =
    `
    top:${e.y-20}px;
    left:${e.x-20}px;
    
    `
    
    
})