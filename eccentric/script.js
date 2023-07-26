const header=document.querySelector("header .container");
const hamburger=document.querySelector("header .hamburger");
const navbar=document.querySelector("header #main-nav ul");

hamburger.addEventListener("click",()=>{
    hamburger.classList.toggle("active");
    navbar.classList.toggle("active");
});