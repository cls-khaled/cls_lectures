let InputTitle  = document.getElementById("title-note"),
    add         = document.getElementById('add'),
    InputText   = document.getElementById('content-note'),
    output      = document.getElementById('output');

//--- OutPut Variables -----------
let item,btnDelete,h2,p;

add.addEventListener('click',function(e){

    e.preventDefault();
    
    if(InputTitle.value ==''|| InputTitle.value == ' ') //-- '  'user input Space 
    {
        alert('الرجاء التأكد من إدخال عنوان الملاحظة ');
    }
    else if(InputText.value=='' || InputText.value == ' ')
    {
        alert('الرجاء التأكد من إدخال تفاصيل الملاحظة ');
    }
    else
    {
        item =document.createElement('div');
        btnDelete=document.createElement('button');
        h2 = document.createElement('h2');
        p=document.createElement('p');

        h2.innerHTML=InputTitle.value;
        p.innerHTML=InputText.value;
        btnDelete.innerHTML='حذف';


        item.classList.add('item');
        btnDelete.classList.add('remove');
        h2.classList.add('title-note');
        p.classList.add('content-note');

        item.appendChild(btnDelete);
        item.appendChild(h2);
        item.appendChild(p);

        output.appendChild(item);

        InputText.value='';
        InputTitle.value='';

    }

    //---------- Delet Notes ------------

    btnDelete.addEventListener('click',function(){
        output.removeChild(this.parentElement);
    })
})