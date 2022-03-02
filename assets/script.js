$.mobile.pageLoadErrorMessage = "";

const slidepage = document.querySelector(".slidepage");

const firstNextBtn = document.querySelector(".nextBtn");
const NextBtnSec = document.querySelector(".next-1");
const NextBtnThird = document.querySelector(".next-2");
const NextBtnFourth = document.querySelector(".next-3");
const submitBtn = document.querySelector(".submit");

const progessText = document.querySelectorAll(".step P");
const progessCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let max =4;
let current =1;

// firstNextBtn.addEventListener("click",function(){
//     slidepage.style.marginLeft = "-25%";
//     bullet[current - 1].classList.add("active");
//     bullet[current - 1].classList.add("active");
//     progessCheck[current - 1].classList.add("active");
    
//     current += 1;
// });

// NextBtnSec.addEventListener("click",function(){
//     slidepage.style.marginLeft = "-50%";
//     bullet[current - 1].classList.add("active");
//     bullet[current - 1].classList.add("active");
//     progessCheck[current - 1].classList.add("active");
    
//     current += 1;
// });

// NextBtnThird.addEventListener("click",function(){
//     slidepage.style.marginLeft = "-75%";
//     bullet[current - 1].classList.add("active");
//     bullet[current - 1].classList.add("active");
//     progessCheck[current - 1].classList.add("active");
   
//     current += 1;
// });
// NextBtnFourth.addEventListener("click",function(){
//     slidepage.style.marginLeft = "-100%";
//     bullet[current - 1].classList.add("active");
//     bullet[current - 1].classList.add("active");
//     progessCheck[current - 1].classList.add("active");
   
//     current += 1;
// });

// submitBtn.addEventListener("click",function(){
//     bullet[current - 1].classList.add("active");
//     bullet[current - 1].classList.add("active");
//     progessCheck[current - 1].classList.add("active");
    
//     current += 1;
//     setTimeout(function(){
//         alert("You're Succesfuly Signed Up")
        
//     }, 800);
// });


