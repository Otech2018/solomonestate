// window.addEventListener('scroll', () => {
//     let header = document.querySelector('.wg-header');
//     let headerLinks = document.querySelectorAll('.wg-header-link');
//     let logo = document.querySelector('.logo');

//     header.classList.toggle('sticky', window.scrollY > 0);
//     headerLinks.forEach(link => {
//         link.classList.toggle('sticky', window.scrollY > 0);
//     });
//     logo.classList.toggle('sticky', window.scrollY > 0);
// })

var swiper = new Swiper('.swiper-container', {
  spaceBetween: 30,
  effect: 'fade',
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});