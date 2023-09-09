let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

// Button toggle
menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   header.classList.toggle('active') ;
   document.body.classList.toggle('active');
}

window.onscroll () =>{
    if(window.innerWidth <991){
        
    }
}