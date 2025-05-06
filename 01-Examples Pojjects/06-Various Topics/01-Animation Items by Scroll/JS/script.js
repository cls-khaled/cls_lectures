// let item = document.querySelector('.item');

// let addbtn = document.querySelectorAll('.plus');
// let newinput1,newinput2,newbuttonplus,newbuttonminus,newitem;
// let body = document.querySelector('body');
// let buttonminus = document.querySelector('.minus');

// addbtn.addEventListener('click', function(e) {
//     e.preventDefault(e);
//     newinput1 = document.createElement('input');
//     newinput1.placeholder = "Offer Name";
//     newinput2 = document.createElement('input');
//     newinput2.placeholder = "%";    
//     let newitem = document.createElement('div');
//     newitem.className = "item";
//     newbuttonplus = document.createElement('button');
//     newbuttonplus.innerHTML = "+";
//     newbuttonplus.className = "plus";
//     newbuttonminus = document.createElement('button');
//     newbuttonminus.innerHTML = "-"; 
//     newbuttonminus.className = "minus";
//     newitem.appendChild(newinput1);
//     newitem.appendChild(newinput2);
//     newitem.appendChild(newbuttonplus);
//     newitem.appendChild(newbuttonminus);
//     body.appendChild(newitem); 
//     newbuttonminus.addEventListener('click', function() {
//         body.removeChild(this.parentElement);
        
// //     newbuttonplus.addEventListener('click', function() {
// //         newinput1 = document.createElement('input');
// //         newinput1.placeholder = "Offer Name";
// //         newinput2 = document.createElement('input');
// //         newinput2.placeholder = "%";    
// //         let newitem = document.createElement('div');
// //         newitem.className = "item";
// //         newbuttonplus = document.createElement('button');
// //         newbuttonplus.innerHTML = "+";
// //         newbuttonplus.className = "plus";
// //         newbuttonminus = document.createElement('button');
// //         newbuttonminus.innerHTML = "-"; 
// //         newbuttonminus.className = "minus";
// //         newitem.appendChild(newinput1);
// //         newitem.appendChild(newinput2);
// //         newitem.appendChild(newbuttonplus);
// //         newitem.appendChild(newbuttonminus);
// //         body.appendChild(newitem);
       
       
// // })
//     //     newbuttonminus.addEventListener('click', function() {
//     //     body.removeChild(this.parentElement);
//     // })
//     })
//     // item.style.display = "block";
//     newitem.style.margin = "10px";
//     body.appendChild(newitem);
    
// })

let item = document.querySelector('.item');
let box = document.querySelector('.box');   




window.onscroll = function() {
    let scrolltop = document.documentElement.scrollTop;
    if (scrolltop >= 100 && scrolltop < 900) {
        item.style.transform = "translateX(1000px)";   
    }
    else{
        item.style.transform = "translateX(-500px)";
    }
    
    if (scrolltop > 900 && scrolltop < 2000) 
    {
        box.style.left = "100px";
    }
    else {
        box.style.left = "-500px";
    }
}