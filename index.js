// // BEGINNING OF CODE FOR ADDING AN ACTIVE CLASS TO A LINK
let btnContainer = document.getElementById("nav");

let btn = btnContainer.getElementsByClassName("nav-item");

for (let i = 0; i < btn.length; i++) {
  btn[i].addEventListener("click", function () {
    let current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", " ");

    this.className += " active";
  });
}
// END OF CODE FOR ADDING AN ACTIVE CLASS TO A LINK

// BEGINNING OF CODE FOR OPENING AND CLOSING THE SIDEDRAWER
let toggle = document.getElementById("toggle");
let nav = document.getElementById("mobileNav");
let backDrop = document.querySelector(".backdrop");
let closeButton = document.querySelector(".closebtn");

toggle.addEventListener("click", function () {
  nav.style.width = "50%";

  setTimeout(function () {
    backDrop.classList.add("open");
  }, 0);
});

closeButton.addEventListener("click", function () {
  nav.style.width = "0%";
  backDrop.classList.remove("open");
});

backDrop.addEventListener("click", function () {
  nav.style.width = "0%";
  backDrop.classList.remove("open");
});
// END OF THE CODE FOR OPENING AND CLOSING THE SIDEDRAWER

//BEGINNING OF CODE FOR FIXING OUR MAIN NAVIGATION BAR TO THE TOP ON SCROLL
window.onscroll = function () {
  scrollFunction();
};

let header = document.querySelector(".main-nav");
let sticky = header.offsetTop;

function scrollFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("stick");
  } else {
    header.classList.remove("stick");
  }
}

//Code for bringing out the modal
const serviceItems = document.querySelectorAll(".services__item");
const modal = document.querySelectorAll(".modal");
const backgroundOverlay = document.querySelector("#testback");

serviceItems.forEach((service, index) => {
  service.addEventListener("click", () => {
    modal.forEach((m, i) => {
      if (index === i) {
        m.classList.add("open__modal");
        backgroundOverlay.classList.add("open__background");
      }
    });
  });
});

if (backgroundOverlay) {
  backgroundOverlay.addEventListener("click", closeBackdrop);
}

function closeBackdrop() {
  backgroundOverlay.classList.remove("open__background");

  modal.forEach(function (mods) {
    mods.classList.remove("open__modal");
  });
}

//CODE FOR AUTOMATICALLY GETTING THE CURRENT YEAR
const year = document.querySelector(".rights");
const currentYear = new Date().getUTCFullYear();
year.children[0].innerHTML = currentYear