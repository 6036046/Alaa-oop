// JavaScript to enable scrolling functionality if needed.
const carousel = document.querySelector('.movie-carousel');

carousel.addEventListener('wheel', (event) => {
    event.preventDefault();
    carousel.scrollLeft += event.deltaY;
});
