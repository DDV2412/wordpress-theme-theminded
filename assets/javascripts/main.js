const menuButton = document.getElementById('menu-toggle');

menuButton.addEventListener('click', () => {
  const menu = document.getElementById('menu');

  if (menu.classList.contains('is-open')) {
    menu.classList.remove('is-open');
  } else {
    menu.classList.add('is-open');
  }
});

const swiper = new Swiper('.swiper', {
  speed: 500,
  breakpoints: {
    640: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    },
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    disabledClass: 'is-disabled',
  },
});
