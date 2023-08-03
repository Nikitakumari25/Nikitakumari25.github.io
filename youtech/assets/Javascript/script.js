// Header section
const header=document.querySelector("header .header");
const hamburger=document.querySelector("header .hamburger");
const mobile_menu=document.querySelector("header nav ul");
hamburger.addEventListener("click",()=>{
    hamburger.classList.toggle("active");
    mobile_menu.classList.toggle("active");
})

document.addEventListener("scroll",()=>{
    var scroll_pos=window.scrollY;
    if(scroll_pos>50)
    {
        header.style.backgroundColor="black";
    }
    else
    {
        header.style.backgroundColor="transparent";
    }
});




// Product section
var belProducts=document.querySelector("#products .bel-products .products-top");
var belBtn=document.querySelector("#products .bel-products .bel");

var SignProducts=document.querySelector("#products .sign-products .products-top");
var SignBtn=document.querySelector("#products .sign-products .sign");

var moreProducts=document.querySelector("#products .more-products .products-top");
var moreBtn=document.querySelector("#products .more-products .more");

belBtn.addEventListener("click",()=>{
    if(belProducts.style.display=="none"){
    belProducts.style.display="grid";
    }
    else{
        belProducts.style.display="none";
    }
});

SignBtn.addEventListener("click",()=>{
    if(SignProducts.style.display=="none"){
    SignProducts.style.display="grid";
    }
    else{
        SignProducts.style.display="none";
    }
});

moreBtn.addEventListener("click",()=>{
    if(moreProducts.style.display=="none"){
    moreProducts.style.display="grid";
    }
    else{
        moreProducts.style.display="none";
    }
});



