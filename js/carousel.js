const navPrev = document.querySelector('#nav-prev');
const navNext = document.querySelector('#nav-next');
const slider = document.querySelector('#menu-slider');

navPrev.addEventListener('click', () => {
  slider.scrollBy({
    left: -200,
    behavior: 'smooth'
  });
});

navNext.addEventListener('click', () => {
  slider.scrollBy({
    left: 200,
    behavior: 'smooth'
  });
});