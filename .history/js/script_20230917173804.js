let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

// Button toggle
menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   header.classList.toggle('active');
   document.body.classList.toggle('active');
}

window.onscroll = () =>{
    if(window.innerWidth < 991){
        menu.classList.remove('fa-times');
        header.classList.remove('active') ;
        document.body.classList.remove('active');
    }
}
//animation text home
const text = document.querySelector("".sec-text');
const textLoad = () =>{
    setTimeout(() =>{
        text.textContent = "Developper Front End";
    },0);
    setTimeout(() =>{
        text.textContent = "Developper Back End";
    },4000);
}
textLoad();