let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    //shoppingCart.classList.remove('active');
    // loginForm.classList.remove('active');
}

let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header .navbar a');

window.onscroll = () =>{

  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
  searchForm.classList.remove('active');
  //shoppingCart.classList.remove('active');
  // loginForm.classList.remove('active');


  section.forEach(sec =>{

    let top = window.scrollY;
    let height = sec.offsetHeight;
    let offset = sec.offsetTop - 450;
    let id = sec.getAttribute('id');

    if(top >= offset && top < offset + height){
      navLinks.forEach(links =>{
        links.classList.remove('active');
        document.querySelector('header .navbar a[href*='+id+']').classList.add('active');
      });
    };

  });
}
// search forms
let searchForm = document.querySelector('.search-form');
document.querySelector('#search-icon').onclick = () =>{
  searchForm.classList.toggle('active');
  //shoppingCart.classList.remove('active');
  // loginForm.classList.remove('active');
  navbar.classList.remove('active');
}
// let shoppingCart = document.querySelector('.shopping-cart');
// document.querySelector('#cart-btn').onclick = () =>{
//   shoppingCart.classList.toggle('active');
//   searchForm.classList.remove('active');
//   // loginForm.classList.remove('active');
//   navbar.classList.remove('active');
// }
// let loginForm = document.querySelector('.login-form');
// document.querySelector('#login-btn').onclick = () =>{
//   loginForm.classList.toggle('active');
//   searchForm.classList.remove('active');
//   shoppingCart.classList.remove('active');
//   navbar.classList.remove('active');
// }














// slide home
var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true,
  });
  // slide review
  var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    loop: true,
    breakpoints:{
      0:{
        slidesPerView: 1,
      },
      640:{
        slidesPerView: 2,
      },
      768:{
        slidesPerView: 2,
      },
      1024:{
        slidesPerView: 3,
      },
    },
  });

  // loader
  function loader(){
    document.querySelector('.loader-container').classList.add('.fade-out');
  }
  function fadeOut(){
    setInterval(loader, 1500);
  }
  window.onload = fadeOut;
 
  