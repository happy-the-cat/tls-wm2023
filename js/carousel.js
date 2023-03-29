const navPrev = document.querySelector('#nav-prev');
const navNext = document.querySelector('#nav-next');
const slider = document.querySelector('#menu-icons');

// get width of icons
const iconWidths = Array.from(slider.querySelectorAll('.icon')).map(icon => icon.offsetWidth);
const maxIconWidth = Math.max(...iconWidths);
const totalWidth = iconWidths.reduce((acc, curr) => acc + curr);

navPrev.addEventListener('click', () => {
  const scrollDistance = maxIconWidth;

  // if scrolled to start
  if (slider.scrollLeft === 0) {
    // reposition the last icon as new first and push the rest of the icons one place behind
    const lastIcon = slider.querySelector('.icon:last-child');
    slider.insertBefore(lastIcon, slider.querySelector('.icon:first-child'));
    slider.scrollTo({
      left: lastIcon.offsetLeft,
      behavior: 'smooth'
    });
  } else {
    // scroll to the left
    slider.scrollTo({
      left: slider.scrollLeft - scrollDistance,
      behavior: 'smooth'
    });
  }
});

navNext.addEventListener('click', () => {
  const scrollDistance = maxIconWidth;

  // if scrolled to end
  if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 1) {
    // reposition the first icon as new last and push the rest of the icons one place ahead
    const firstIcon = slider.querySelector('.icon:first-child');
    slider.appendChild(firstIcon);
    slider.scrollTo({
      left: slider.scrollLeft + firstIcon.offsetLeft - slider.clientWidth,
      behavior: 'smooth'
    });
  } else {
    // scroll to the right
    slider.scrollTo({
      left: slider.scrollLeft + scrollDistance,
      behavior: 'smooth'
    });
  }
});
