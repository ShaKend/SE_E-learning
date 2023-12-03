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

function validateform(event) {
    var Name = document.getElementById("Name").value;
    var SignUpEmail = document.getElementById("SignUpEmail").value;
    var SignUpPassword = document.getElementById("SignUpPassword").value;
  
    event.preventDefault();
  
    if (Name === "") {
      alert("Username cannot be empty");
    } else if (!SignUpEmail.endsWith("@gmail.com")) {
      alert("Email must end with @gmail.com");
    } else if (!CheckPassword(SignUpPassword)) {
      alert("Password must be at least 8 characters and must include both letters and numbers");
    } else if (ConfirmPassword !== SignUpPassword) {
      alert("Password check must be the same as the password");
    }else {
        window.location.href = "HomePage.html";
      }
  }

  document.addEventListener("DOMContentLoaded", ()=>{
    const loginForm = document.querySelector("#login")
    const createAccountForm = document.querySelector("#createAccount")
    const showBody = document.getElementById("showBody");
    const showLogin = document.querySelector("#showLogin");
    const showCreateAccount = document.querySelector("#showCreateAccount");
    const CloseAccountForm = document.querySelector("#CloseCreateAccountForm");
    const CloseLoginForm = document.querySelector("#CloseLoginForm");

    
    document.querySelector("#linkCreateAccount").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
        showBody.classList.remove("form--hidden");
    });

    document.querySelector("#linkLogin").addEventListener("click", e => {
        
        loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");
        showBody.classList.remove("form--hidden");
    });


    document.querySelector("#showLogin").addEventListener("click", e => {
        loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");
        showBody.classList.remove("form--hidden");
    });
    
    document.querySelector("#showCreateAccount").addEventListener("click", e => {
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
        showBody.classList.remove("form--hidden");
    });

    document.querySelector("#CloseLoginForm").addEventListener("click", e => {
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.add("form--hidden");
        showBody.classList.add("form--hidden");
    });

    document.querySelector("#CloseCreateAccountForm").addEventListener("click", e => {
      loginForm.classList.add("form--hidden");
      createAccountForm.classList.add("form--hidden");
      showBody.classList.add("form--hidden");
  });
});

function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}