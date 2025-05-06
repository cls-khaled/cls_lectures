
var myBtn=document.getElementById('myBtn'),
modal=document.querySelector('.modal-content'),
close = document.querySelector('.close');

myBtn.addEventListener('click',()=>{
    modal.classList.add('opened');
})

close.addEventListener('click',()=>{
    modal.classList.remove('opened');
})