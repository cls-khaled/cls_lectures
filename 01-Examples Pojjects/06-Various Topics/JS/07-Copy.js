const TitleInput=document.getElementById('ttile');
const btnCopy=document.getElementById('btnCopy');
let msgSuccess=document.getElementById('success');

btnCopy.addEventListener('click',function(){

    TitleInput.select(); //--- Select text in input Filed 

    navigator.clipboard.writeText(TitleInput.value);
   
    // alert("تم نسخ النص  " + TitleInput.value);

    // success.classList.add('active');
    // success.classList.toggle('active');

      // success.classList.add('active');
         msgSuccess.classList.add('active');

      setInterval(function(){
        // success.classList.remove('active');

        msgSuccess.classList.remove('active');
      },5000);
})