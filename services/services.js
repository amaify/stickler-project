const service = document.querySelectorAll(".services__item");
const modal = document.querySelectorAll(".modal");
const testback = document.querySelector("#testback");

service.forEach(function(item, index) {
  item.addEventListener("click", function() {
    if (index === 0) {
      modal[0].classList.add("open__modal");
      testback.classList.add("open__background");
    }

    if (index === 1) {
      modal[1].classList.add("open__modal");
      testback.classList.add("open__background");
    }

    if (index === 2) {
      modal[2].classList.add("open__modal");
      testback.classList.add("open__background");
    }

    if (index === 3) {
      modal[3].classList.add("open__modal");
      testback.classList.add("open__background");
    }

    if (index === 4) {
      modal[4].classList.add("open__modal");
      testback.classList.add("open__background");
    }

    if (index === 5) {
      modal[5].classList.add("open__modal");
      testback.classList.add("open__background");
    }

    if (index === 6) {
      modal[6].classList.add("open__modal");
      testback.classList.add("open__background");
    }
  });
});

//Closing the modal
testback.addEventListener("click", closeModal);

function closeModal() {
  modal.forEach(function(mod) {
    mod.classList.remove("open__modal");
  });
  testback.classList.remove("open__background");
}
