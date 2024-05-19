var swiper = new swiper(".myswiper-1", {
  slidesperview: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clikable: true,
  },
  Navigation: {
    nextEl: ",swiper-button-next",
    prevEl: ",swiper-button-prev",
  },
});

var swiper = new swiper(".myswiper-2", {
  slidesperview: 3,
  spaceBetween: 20,
  loop: true,
  loopFillgroupWithBank: true,
  Navigation: {
    nextEl: ",swiper-button-next",
    prevEl: ",swiper-button-prev",
  },
  breakpoint: {
    0: {
      slidesperview: 1,
    },
    520: {
      slidesperview: 2,
    },
    950: {
      slidesperview: 3,
    },
  },
});

let tabInputs = document.querySelectorAll(".tabInput");

tabInputs.forEach(function (input) {
  input.addEventlistener("change", function () {
    let id = input.ariaValueMax;
    let thisSwiper = document.getElementById("swiper" + id);
    thisSwiper.swiper.update();
  });
});
