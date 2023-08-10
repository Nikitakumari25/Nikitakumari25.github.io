function clear(){
document.body.innerHTML = '';
}



const header=document.querySelector("header .header"); 
const hamburger=document.querySelector("header .hamburger"); 
const mobile_menu=document.querySelector("header nav ul"); 
const hamburger_icon=document.querySelector("header .hamburger i")
hamburger.addEventListener("click",()=>{
    hamburger.classList.toggle("active");
    mobile_menu.classList.toggle("active");
    const isOpen=hamburger.classList.contains("active");
    hamburger_icon.classList=isOpen
    ? "fa-solid fa-xmark"
    : "fa-solid fa-bars";
});