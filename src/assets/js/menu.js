console.log("hello menu.js");

const navbarMenu = document.querySelector(".deroulant");
const burger = document.querySelector(".burger");
const closeBtn = document.querySelector(".close");
const showHideNavbar = () => {
  navbarMenu.classList.toggle("hideNav");
  navbarMenu.classList.toggle("showNav");
  closeBtn.classList.toggle("hidden");
  burger.classList.toggle("hidden");
};
burger.addEventListener("click", showHideNavbar);
closeBtn.addEventListener("click", showHideNavbar);

