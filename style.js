console.log("Cinema Paradise is loaded and ready!");

let currentSlide = 0; 
const slides = document.querySelectorAll(".slides img"); 


showSlide(currentSlide);


setInterval(() => {
    changeSlide(1); 
}, 5000);


function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove("active");
        if (i === index) {
            slide.classList.add("active");
        }
    });
}

function changeSlide(step) {
    currentSlide += step;

    if (currentSlide >= slides.length) currentSlide = 0;
    if (currentSlide < 0) currentSlide = slides.length - 1;

    showSlide(currentSlide);
}
