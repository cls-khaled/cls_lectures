let inputoffer = document.getElementById('offer'),
 inputpercent = document.getElementById('percent'),
 add= document.getElementById('add-butt'),
 output = document.getElementById('output');

 add.addEventListener('click',function(s){
   s.preventDefault();


   if(inputoffer.value.trim() === '')
{
    alert('error in title');
    return;
}
  else if(inputpercent.value.trim() === '')
{
    alert('error in text');
    return;
}
else{

    let item,buttdelete,h1,p;

    item=document.createElement('div');
   buttdelete=document.createElement('button');
   h1=document.createElement('h1');
   p=document.createElement('p');
   

h1.innerHTML=inputoffer.value;
p.innerHTML=inputpercent.value;
buttdelete.innerHTML = "<i class='fa-solid fa-trash'></i>";  
buttdelete.classList.add('delete-butt');

 
buttdelete.addEventListener('click', function() {
    output.removeChild(item);
});


item.classList.add('item');

item.appendChild(buttdelete);
item.appendChild(h1);
item.appendChild(p);


buttdelete.classList.add('delete-butt');
h1.classList.add('offer');
p.classList.add('percent');



output.appendChild(item);

inputoffer.value='';
inputpercent.value='';

}

 })
