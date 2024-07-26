$(document).ready(function () {
$(".profile-detail").hide();
$("#user-btn").click(function () {
$(".profile-detail").toggle();
});

// $(".search-form").hide();
$("#search-btn").click(function () {
$(".search-form").toggle();
});

// $(".navbar").hide();
$("#menu-btn").click(function () {
$(".navbar").toggle();
});

});

/* .................Home slider............................. */

const imgBox = document.querySelector('.slider-container');
const slides = document.getElementsByClassName('slideBox');

var i = 0;

function nextSlide(){
slides[i].classList.remove('active');
i = (i + 1) % slides.length;
slides[i].classList.add('active');
}

function prevSlide(){
slides[i].classList.remove('active');
i = (i - 1 + slides.length) % slides.length;
slides[i].classList.add('active');
}

/*.................testimonial.....................*/

// const btns = document.querySelectorAll(".btn1");
// const slideRow = document.getElementById("#slide-row");
// const main = document.querySelector("main");

// let currentIndex = 0;

// function updateSlide() {
//   const mainWidth = main.offsetWidth;
//   const translateValue = currentIndex * -mainWidth;
//   slideRow.style.transform = `translateX(${translateValue}px)`;

//   btns.forEach((btn1, index) => {
//     btn1.classList.toggle("active", index === currentIndex);
//   });
// }

// btns.forEach((btn1, index) => {
//   btn1.addEventListener("click", () => {
//     currentIndex = index;
//     updateSlide();
//   });
// });

// window.addEventListener("resize", () => {
//   updateSlide();
// });

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide-col");
  let dots = document.getElementsByClassName("btn1");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

$(document).ready(function(){
  $(".btn1").click(function(){
    $(".btn1:hover").css('color','yellow');
  });
});