

  var swiper = new Swiper('.tistmonal .swiper-container', {
    loop:true,
    spaceBetween: 30,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
    },
  });
  var swiper = new Swiper('.header .swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    loop: true,
  });
  let btn_drop = document.querySelector(".drop"),
    
      navbar = document.querySelector(".navbar");

      btn_drop.onclick = ()=>{
        navbar.classList.toggle("active")
      }
