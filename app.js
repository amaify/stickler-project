// document.getElementById("name").addEventListener("blur", validateName);
// document.getElementById("zip").addEventListener("blur", validateZipcode);
// document.getElementById("email").addEventListener("blur", validateEmail);
// document.getElementById("phone").addEventListener("blur", validateNumber);

// function validateName() {
//   const name = document.getElementById("name");
//   const re = /^[a-zA-Z]{2,10}$/;

//   if (!re.test(name.value)) {
//     name.classList.add("is-invalid");
//   } else {
//     name.classList.remove("is-invalid");
//   }
// }

// function validateZipcode() {
//   const zip = document.getElementById("zip");
//   const re = /^[0-9]{5}(-[0-9]{4})?$/;

//   if (!re.test(zip.value)) {
//     zip.classList.add("is-invalid");
//   } else {
//     zip.classList.remove("is-invalid");
//   }
// }

// function validateEmail() {
//   const email = document.getElementById("email");
//   const re = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

//   if (!re.test(email.value)) {
//     email.classList.add("is-invalid");
//   } else {
//     email.classList.remove("is-invalid");
//   }
// }

// function validateNumber() {
//   const number = document.getElementById("phone");
//   const re = /^\(?\d{3}\)?[-. ]?\d{3}[-. ]?\d{4}$/;

//   if (!re.test(number.value)) {
//     number.classList.add("is-invalid");
//   } else {
//     number.classList.remove("is-invalid");
//   }
// }

// const submitBtn = document.querySelector("#submitBtn");

// document.getElementById("email").addEventListener("blur", validateEmail);
// document.getElementById("password").addEventListener("blur", validatePassword);
// document
//   .querySelector(".fa-eye-slash")
//   .addEventListener("click", revealPassword);

// function validateEmail() {
//   const emailDiv = document.querySelector("#emailDiv");
//   const email = document.getElementById("email");
//   const re = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

//   if (!re.test(email.value)) {
//     emailDiv.classList.add("is-invalid");
//     email.classList.add("input-invalid");
//   } else {
//     emailDiv.classList.remove("is-invalid");
//     email.classList.remove("input-invalid");
//   }
// }

// submitBtn.addEventListener("click", (e) => {
//   e.preventDefault();
// });

// function validatePassword() {
//   const password = document.getElementById("password");
//   const passwordDiv = document.getElementById("passwordDiv");

//   if (password.value.length < 5) {
//     passwordDiv.classList.add("is-invalid");
//     password.classList.add("input-invalid");
//   } else {
//     passwordDiv.classList.remove("is-invalid");
//     password.classList.remove("input-invalid");
//   }
// }

// function revealPassword() {
//   const password = document.getElementById("password");

//   if (password.type === "password") {
//     password.type = "text";
//   } else {
//     password.type = "password";
//   }
// }

// document.querySelector(".btn").addEventListener("click", showModal);

// const modalContent = document.querySelector(".modal-content");

// const firstModal = `
//   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla,
//   alias quia rerum at molestiae illo ea quisquam officia ipsam earum
//   temporibus hic obcaecati incidunt quae possimus veniam sunt. Deserunt, architecto.
// `;

// function showModal() {
//   const heading = document.createElement("h1");
//   const headingNode = document.createTextNode("Modal");
//   heading.appendChild(headingNode);

//   const text = document.createElement("p");
//   const textNode = document.createTextNode(firstModal);
//   text.appendChild(textNode);

//   modalContent.append(heading, text);
// }
