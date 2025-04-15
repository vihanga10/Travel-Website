let menu = document.querySelector('#menu-btn'); 
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times'); // Rotate icon
    navbar.classList.toggle('active'); // Show/hide navbar
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

};


var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween: 20,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
        640: {
          slidesPerView: 1,
          
        },
        768: {
          slidesPerView: 2,
          
        },
        1024: {
          slidesPerView: 3,
          
        },
      },
  });

  let loadMoreBtn = document.querySelector('.packages .load-more .btn');
  let currentItem = 6; // Show first 6 boxes initially
  
  loadMoreBtn.onclick = () => {
      let boxes = [...document.querySelectorAll('.packages .box-container .box')];
      // Log to check if boxes exist
      console.log(boxes);
  
      for (let i = currentItem; i < currentItem + 3 && i < boxes.length; i++) {
          boxes[i].style.display = 'inline-block';
      }
  
      currentItem += 3;
  
      // Hide the button if no more boxes are left
      if (currentItem >= boxes.length) {
          loadMoreBtn.style.display = 'none';
      }
  };
  
  