// // BEGINNING OF CODE FOR ADDING AN ACTIVE CLASS TO A LINK
let btnContainer = document.getElementById("nav");

let btn = btnContainer.getElementsByClassName("nav-item");

for (let i = 0; i < btn.length; i++) {
  btn[i].addEventListener("click", function() {
    let current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", " ");

    this.className += " active";
  });
}
// END OF CODE FOR ADDING AN ACTIVE CLASS TO A LINK

// BEGINING OF CODE FOR OPENING AND CLOSING THE SIDEDRAWER
let toggle = document.getElementById("toggle");
let nav = document.getElementById("mobileNav");
let backDrop = document.querySelector(".backdrop");
let closeButton = document.querySelector(".closebtn");

toggle.addEventListener("click", function() {
  nav.style.width = "80%";

  setTimeout(function() {
    backDrop.classList.add("open");
  }, 0);
});

closeButton.addEventListener("click", function() {
  nav.style.width = "0%";
  backDrop.classList.remove("open");
});

backDrop.addEventListener("click", function() {
  nav.style.width = "0%";
  backDrop.classList.remove("open");
});
// END OF THE CODE FOR OPENING AND CLOSING THE SIDEDRAWER

//BEGINNING OF CODE FOR FIXING OUR MAIN NAVIGATION BAR TO THE TOP ON SCROLL
window.onscroll = function() {
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

// END OF CODE FOR FIXING OUR MAIN NAVIGATION BAR TO THE TOP ON SCROLL

// $(document).ready(function() {
//
//     /* Every time the window is scrolled ... */
//     $(window).scroll( function(){
//
//         /* Check the location of each desired element */
//         $('section').each( function(i){
//
//             var bottom_of_object = $(this).position().top + $(this).outerHeight();
//             var bottom_of_window = $(window).scrollTop() + $(window).height();
//
//             /* If the object is completely visible in the window, fade it it */
//             if( bottom_of_window > bottom_of_object ){
//
//                 $(this).animate({'opacity':'1'},600);
//
//             }
//
//         });
//
//     });
//
// });

//Code for bringing out the modal
const serviceItems = document.querySelectorAll(".services__item");
const modal = document.querySelectorAll(".modal");
const backgroundOverlay = document.querySelector("#testback");

serviceItems.forEach(function(service, index) {
  service.addEventListener("click", function() {
    if (index === 0) {
      modal[0].classList.add("open__modal");
      backgroundOverlay.classList.add("open__background");
    }

    if (index === 1) {
      modal[1].classList.add("open__modal");
      backgroundOverlay.classList.add("open__background");
    }

    if (index === 2) {
      modal[2].classList.add("open__modal");
      backgroundOverlay.classList.add("open__background");
    }

    if (index === 3) {
      modal[3].classList.add("open__modal");
      backgroundOverlay.classList.add("open__background");
    }

    if (index === 4) {
      modal[4].classList.add("open__modal");
      backgroundOverlay.classList.add("open__background");
    }
  });
});

if (backgroundOverlay) {
  backgroundOverlay.addEventListener("click", closeBackdrop);
}

function closeBackdrop() {
  backgroundOverlay.classList.remove("open__background");

  modal.forEach(function(mods) {
    mods.classList.remove("open__modal");
  });
}

// const form = document.querySelector(".contact-form");
// const inputForm = document.querySelectorAll("input");

// function validation() {
//   inputForm.forEach(input => {
//     input.addEventListener("keyup", function() {
//       if (input.value != "") {
//         document.getElementById("button").disabled = false;
//       } else {
//         document.getElementById("button").disabled = true;
//       }
//     });
//   });
// }

// validation();

// form.addEventListener("submit", e => {
//   inputForm.forEach(input => {
//     input.value = "";
//   });

//   e.preventDefault();
// });
