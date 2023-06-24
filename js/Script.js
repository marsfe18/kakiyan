//Preload - loading will end after document loaded
// jshint esversion: 6
const preloader = document.querySelector("[data-preload]");
window.addEventListener("load", function() {
    preloader.classList.add("loaded");
    document.body.classList.add("loaded");
});

//Navigasi dan header
const addEventOnElements = function(elements, eventType, callback){
    for(let i = 0, len = elements.length; i<len; i++){
        elements[i].addEventListener(eventType, callback);
    }
};

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function(){
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
    document.body.classList.toggle("nav-active");
};

addEventOnElements(navTogglers,"click", toggleNavbar);

const header = document.querySelector("[data-header]");
window.addEventListener("scroll", function() {
    header.classList[window.scrollY > 100 ? "add" : "remove"]("active");
});

//Header Slider

const heroSliderItems=document.querySelectorAll("[data-hero-slider-item]");
const heroSliderBackBtn = document.querySelector("[data-back-btn]");
const heroSliderNextBtn = document.querySelector("[data-next-btn]");

let currentSlidePos = 0;
let lastActiveSliderItem = heroSliderItems[0];

const updateSliderPos = function(){
     lastActiveSliderItem.classList.remove("active");
     heroSliderItems[currentSlidePos].classList.add("active");
     lastActiveSliderItem = heroSliderItems[currentSlidePos];
};

const slideNext = function(){
     if (currentSlidePos >= heroSliderItems.length-1){
         currentSlidePos = 0;
     } else{
         currentSlidePos++;
     }

     updateSliderPos();
 };

let autoSlideInterval;

const autoSlide = function(){
    autoSlideInterval = setInterval(function(){
        slideNext();
    }, 4000);
};

addEventOnElements([heroSliderNextBtn, heroSliderBackBtn], "mouseover", function(){
    clearInterval(autoSlideInterval);
});

addEventOnElements([heroSliderNextBtn, heroSliderBackBtn], "mouseout", autoSlide);

window.addEventListener("load", autoSlide);

//gallery
let fullFotoBox = document.getElementById("fullFotoBox");
let fullFoto = document.getElementById("fullFoto");

function openFullFoto(pict){
    fullFotoBox.style.display="flex";
    fullFoto.src=pict;
}

function closeFullFoto(){
    fullFotoBox.style.display="none";
}

//slideshow special offer
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1;}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}

