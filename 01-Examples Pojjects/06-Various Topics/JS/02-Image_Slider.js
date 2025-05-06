
var sliderindex=1;

Sliders(sliderindex); //--- Calling Function ------

function navSlider(n){
    Sliders(sliderindex+=n);
}



//-------------------------------------------------------------
function Sliders(index){

    let itemSlide=document.getElementsByClassName('slider-item');

   console.log(itemSlide.length);


    if(index >itemSlide.length){
        sliderindex=1;
    }

    if(index <1){
        sliderindex=itemSlide.length;
    }



    for(var i=0; i<itemSlide.length; i++)
    {

        console.log(itemSlide[i]);
        
        itemSlide[i].style.display='none';
    }

    
    itemSlide[sliderindex-1].style.display="block";
}