// Js for Toggle
var navLink = document.getElementById('navLinks');
function showMenu(){
    navLink.style.right = "0"
}
function hideMenu(){
    navLink.style.right = "-200px"
}

// slideing
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}

// for opening image 1 st img
function openModal() {
  var modal = document.getElementById("myModal");
  var modalContent = document.getElementById("modalContent");

  // Set the content of the modal
  modalContent.innerHTML =  '<img src="./Images/IQAC/StJosephIQAC_-The-Structure-of-the-Governing-Body-of-the-Institution.jpg" alt=""></p>';
  
  modal.style.display = "flex";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}
// for 2nd img
function openModal1() {
  var modal = document.getElementById("myModal1");
  var modalContent = document.getElementById("modalContent1");

  // Set the content of the modal
  modalContent.innerHTML =  '<img src="./Images/IQAC/StJosephIQAC_The-Structure-of-the-Governing-Council-of-the-Institution.jpg" alt=""></p>';
  
  modal.style.display = "flex";
}

function closeModal1() {
  document.getElementById("myModal1").style.display = "none";
}
//for 3 rd image
function openModal2() {
  var modal = document.getElementById("myModal2");
  var modalContent = document.getElementById("modalContent2");

  // Set the content of the modal
  modalContent.innerHTML =  '<img src="./Images/IQAC/StJosephIQAC_-The-Structure-of-the-Internal-Quality-Assurance-Cell-IQAC-of-the-Institution.jpg" alt=""></p>';
  
  modal.style.display = "flex";
}

function closeModal2() {
  document.getElementById("myModal2").style.display = "none";
}
//for 4th image
function openModal3() {
  var modal = document.getElementById("myModal3");
  var modalContent = document.getElementById("modalContent3");

  // Set the content of the modal
  modalContent.innerHTML =  '<img src="./Images/IQAC/StJosephIQAC_-The-Structure-of-the-Staff-Council-of-the-Institution-1.jpg" alt=""></p>';
  
  modal.style.display = "flex";
}

function closeModal3() {
  document.getElementById("myModal3").style.display = "none";
}
//5 th image 
function openModal4() {
  var modal = document.getElementById("myModal4");
  var modalContent = document.getElementById("modalContent4");

  // Set the content of the modal
  modalContent.innerHTML =  '<img src="./Images/IQAC/StJosephIQAC_-The-Structure-of-the-Student-Council-of-the-Institution.jpg" alt=""></p>';
  
  modal.style.display = "flex";
}

function closeModal4() {
  document.getElementById("myModal4").style.display = "none";
}

// Fancybox Configuration
$('[data-fancybox="gallery"]').fancybox({
  buttons: [
    "slideShow",
    "thumbs",
    "zoom",
    "fullScreen",
    "share",
    "close"
  ],
  loop: false,
  protect: true
});
