const navPrev = document.querySelector('#nav-prev');
const navNext = document.querySelector('#nav-next');
const slider = document.querySelector('#menu-icons');

// get width of icons
const iconWidths = Array.from(slider.querySelectorAll('.icon')).map(icon => icon.offsetWidth);
const totalWidth = iconWidths.reduce((acc, curr) => acc + curr);

navPrev.addEventListener('click', () => {
  // scroll to the left
  slider.scrollBy({
    left: -200,
    behavior: 'smooth'
  });
  
  // if scrolled to start
  if (slider.scrollLeft === 0) {
    // scroll to end
    slider.scrollTo({
      left: totalWidth - slider.clientWidth,
      behavior: 'smooth'
    });
  }
});

navNext.addEventListener('click', () => {
  // scroll to the right
  slider.scrollBy({
    left: 200,
    behavior: 'smooth'
  });
  
  // if scrolled to end
  if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 1) {
    // scroll to start
    slider.scrollTo({
      left: 0,
      behavior: 'smooth'
    });
  }
});
