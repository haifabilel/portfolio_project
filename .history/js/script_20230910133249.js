let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

// Button toggle
menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   header.classList.toggle('active');
  document.body.c
}

window.onscroll = () =>{
    if(window.innerWidth < 991){
        menu.classList.remove('fa-times');
        header.classList.remove('active') ;
        document.body.classList.remove('active');
    }
}