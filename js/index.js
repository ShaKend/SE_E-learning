// function togglePasswordVisibility(inputId) {
//     var passwordInput = document.getElementById(inputId);
//     var togglePassword = document.getElementById('toggle' + inputId);

//     if (passwordInput.type === "password") {
//         passwordInput.type = "text";
//         togglePassword.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
//     } else {
//         passwordInput.type = "password";
//         togglePassword.innerHTML = '<i class="fa-solid fa-eye"></i>';
//     }
// }

// function updatePasswordVisibility(inputId, toggleId) {
//     var passwordInput = document.getElementById(inputId);
//     var togglePassword = document.getElementById(toggleId);

//     if (passwordInput.value.trim() !== '') {
//         togglePassword.style.visibility = 'visible';
//     } else {
//         togglePassword.style.visibility = 'hidden';
//     }
// }

//show login dan register ketika link di klik
document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.querySelector("#login");
  const createAccountForm = document.querySelector("#createAccount");
  const loginadminform = document.querySelector("#loginadminform");
  const showBody = document.getElementById("showBody");
  const showLogin = document.querySelector("#showLogin");
  const showCreateAccount = document.querySelector("#showCreateAccount");
  const CloseAccountForm = document.querySelector("#CloseCreateAccountForm");
  const CloseLoginForm = document.querySelector("#CloseLoginForm");
  const loginAdmin = document.querySelector("#showloginadmin");
  const closeAdmin = document.querySelector("#closeLoginAdmin");

  document.querySelector("#linkCreateAccount").addEventListener("click", (e) => {
    e.preventDefault();
    loginForm.classList.add("form--hidden");
    createAccountForm.classList.remove("form--hidden");
    showBody.classList.remove("form--hidden");
    loginadminform.classList.add("form--hidden");
  });

  document.querySelector("#linkLogin").addEventListener("click", (e) => {
    loginForm.classList.remove("form--hidden");
    createAccountForm.classList.add("form--hidden");
    showBody.classList.remove("form--hidden");
    loginadminform.classList.add("form--hidden");
  });

  document.querySelector("#showLogin").addEventListener("click", (e) => {
    loginForm.classList.remove("form--hidden");
    createAccountForm.classList.add("form--hidden");
    showBody.classList.remove("form--hidden");
    loginadminform.classList.add("form--hidden");
  });

  document.querySelector("#showCreateAccount").addEventListener("click", (e) => {
    e.preventDefault();
    loginForm.classList.add("form--hidden");
    createAccountForm.classList.remove("form--hidden");
    showBody.classList.remove("form--hidden");
    loginadminform.classList.add("form--hidden");
  });

  document.querySelector("#CloseLoginForm").addEventListener("click", (e) => {
    loginForm.classList.add("form--hidden");
    createAccountForm.classList.add("form--hidden");
    showBody.classList.add("form--hidden");
    loginadminform.classList.add("form--hidden");
  });

  document.querySelector("#CloseCreateAccountForm").addEventListener("click", (e) => {
    loginForm.classList.add("form--hidden");
    createAccountForm.classList.add("form--hidden");
    showBody.classList.add("form--hidden");
    loginadminform.classList.add("form--hidden");
  });
  document.querySelector("#showloginadmin").addEventListener("click", (e) => {
    e.preventDefault();
    loginadminform.classList.remove("form--hidden");
    createAccountForm.classList.add("form--hidden");
    showBody.classList.remove("form--hidden");
    loginForm.classList.add("form--hidden"); // Fix this line
  });

  document.querySelector("#CloseLoginAdmin").addEventListener("click", (e) => {
    loginadminform.classList.add("form--hidden");
    createAccountForm.classList.add("form--hidden");
    showBody.classList.add("form--hidden");
    loginForm.classList.remove("form--hidden"); // Fix this line
  });
});

function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}

const nav = document.querySelector(".navbar");

// Add an event listener to the document
// so that a class is added to the nav
// element when the page is scrolled
document.addEventListener("scroll", () => {
  nav.classList.add("scrolled");

  // After 1s, check if the user has scrolled to
  // the top of the page and make the nav
  // element transparent again
  setTimeout(() => {
    if (window.pageYOffset === 0 && nav.classList.contains("scrolled")) {
      nav.classList.remove("scrolled");
    }
  }, 1000);
});
