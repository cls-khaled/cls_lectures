
const swiper= new Swiper('.swiper',{

    loop:true,
    effect:'fade',
    pagination:{

        el:'.swiper-pagination',
        clickable:true

    },
    navigation:{
        nextEl:'.swiper-button-next',
        prevEl:'.swiper-button-prev',
    }
});