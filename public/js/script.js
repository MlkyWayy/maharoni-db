//Navbar fixed
window.onscroll = function () {
  const header = document.querySelector("header");
  const fixNav = header.offsetTop;

  if (window.pageYOffset > fixNav) {
    header.classList.add("navbar-fixed");
  } else {
    header.classList.remove("navbar-fixed");
  }
};

// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("hamburger-active");
  navMenu.classList.toggle("hidden");
});

//Login
const signin = document.querySelector(".login");
const signup = document.querySelector(".signup");
const btnSignin = document.querySelector("#signin");
const btnSignup = document.querySelector("#signup");
const img = document.querySelector(".loginimg");

btnSignup.onclick = () => {
  signin.classList.add("skanan", "hidden");
  img.classList.add("pindah");
  signup.classList.remove("skiri", "hidden");
};
btnSignin.onclick = () => {
  signin.classList.remove("skanan", "hidden");
  signup.classList.add("skiri", "hidden");
  img.classList.remove("pindah");
};
