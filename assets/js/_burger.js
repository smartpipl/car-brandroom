const burger = document.getElementById("burger");
const menuWrapper = document.getElementById("menuWrapper");
const overlay = document.getElementById("overlay");

function toggleMenu(e) {
  const isOpen = menuWrapper.classList.toggle("open");

  if (isOpen) {
    overlay.classList.add("active");
    burger.classList.add("open");
  } else {
    overlay.classList.remove("active");
    burger.classList.remove("open");
  }

  if (isOpen) {
    document.body.style.overflow = "hidden";
  } else {
    document.body.style.overflow = "";
  }
}

burger.addEventListener("click", toggleMenu);
overlay.addEventListener("click", toggleMenu);

