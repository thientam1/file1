const faqs = document.querySelectorAll(".faq");

faqs.forEach(faq => {
  faq.addEventListener("click", () => {
    faq.classList.toggle("active");
  })
})
var swiper = new Swiper(".slide-container", {
  slidesPerView: 2,
  spaceBetween: 30,
  
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  
});
var swiper2 = new Swiper(".slide-container2", {
  slidesPerView: 2,
  spaceBetween: 30,
  
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  
});


// var swiper2 = new Swiper(".slide-container2", {
//   spaceBetween: 500,
//   pagination: {
//     el: ".swiper-pagination2",
//     type: "fraction",
//   },
//   navigation: {
//     nextEl: ".swiper-button-next2",
//     prevEl: ".swiper-button-prev2",
//   },
// });
