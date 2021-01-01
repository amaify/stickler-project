//CODE FOR SUBMITTING A FORM
const submitBtn = document.querySelector(".contact-btn");
const modalBackdrop = document.querySelector(".modal-backdrop");
const modalContainer = document.querySelector(".modal-container");
const modalBtn = document.querySelector(".modal-close");

window.onload = () => {
  resetForm();
};

function resetForm() {
  const email = document.getElementById("email");
  const name = document.getElementById("name");
  const options = document.getElementById("select");
  const textArea = document.getElementById("text-area");

  email.value = "";
  name.value = "";
  options.value = "";
  textArea.value = "";
}

submitBtn.addEventListener("click", (e) => {
  e.preventDefault();
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const options = document.getElementById("select").value;
  const textArea = document.getElementById("text-area").value;

  submitBtn.innerHTML = "Sending....";
  submitBtn.setAttribute("disabled", "");

  if (name === "" || email === "" || options === "" || textArea === "") {
    document.querySelector(".form-error").classList.add("show-error");
    submitBtn.innerHTML = "Send Message";
    submitBtn.removeAttribute("disabled");
  } else {
    const mail = new sendMail(name, email, options, textArea);
    mail.sendEmail(mail);
  }

  setTimeout(() => {
    removeError();
  }, 6000);
});

function removeError() {
  document.querySelector(".form-error").classList.remove("show-error");
}

class sendMail {
  constructor(name, email, options, message) {
    this.name = name;
    this.email = email;
    this.options = options;
    this.message = message;
  }

  sendEmail(mail) {
    Email.send({
      Host: "smtp.mailtrap.io",
      Username: "9528f02595d128", //MAILTRAP WAS USED HERE, SO YOU SHOULD GET YOUR OWN MAILTRAP DETAILS.
      Password: "04bb2c98726e86", //MAILTRAP WAS USED HERE, SO YOU SHOULD GET YOUR OWN MAILTRAP DETAILS.
      To: "info@stickler.com.au",
      From: "info@stickler.com",
      Subject: "CONTACT REQUEST",
      Body: `
    <html>
    <h2>Header</h2>
    <p>Hello My name is ${mail.name}</p> 
    <p>Chosen Service: ${mail.options}</p>
    <p>Email: ${mail.email}</p>
    <p>Message: ${mail.message}</p>
    </html>
    `,
    }).then((message) => {
      if (message === "OK") {
        submitBtn.innerHTML = "Send Message";
        submitBtn.removeAttribute("disabled");
        modalContainer.classList.add("show-modal");
        modalBackdrop.classList.add("show-backdrop");
        resetForm();
      } else {
        submitBtn.innerHTML = "Send Message";
        submitBtn.removeAttribute("disabled");
      }
    });
  }
}

modalBtn.addEventListener("click", () => {
  modalBackdrop.classList.remove("show-backdrop");
  modalContainer.classList.remove("show-modal");
});

modalBackdrop.addEventListener("click", () => {
  modalBackdrop.classList.remove("show-backdrop");
  modalContainer.classList.remove("show-modal");
});

//END OF CODE FOR SUBMITTING FORM
function validateEmail() {
  const email = document.getElementById("email");
  const re = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

  if (!re.test(email.value)) {
    document.querySelector(".form-error").classList.add("show-error");
    email.classList.add("is-invalid");
    return;
  } else {
    email.classList.remove("is-invalid");
  }
}
