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

//akan ada untuk student dan untuk admin
//std = student, adm = admin
//query HANYA untuk INSERT disini aja ya, yg lainnya di folder ajax
function addStudent() {
  //std = student, Reg = register
  let regex = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}/i; //untuk check email valid atau tidak
  let stdRegName = $("#Name").val();
  let stdRegEmail = $("#SignUpEmail").val();
  let stdRegPassword = $("#SignUpPassword").val();

  event.preventDefault();

  if (!regex.test(stdRegEmail) && stdRegEmail.trim() != "") {
    $("#regisStatus2").html("<small class='text-danger'> Invalid email</small>");
    $("#SignUpEmail").focus();
    return false;
  } else if (stdRegName.trim() == "") {
    $("#regisStatus1").html("<small class='text-danger'> Please put name</small>");
    $("#Name").focus();
    return false;
  } else if (stdRegEmail.trim() == "") {
    $("#regisStatus2").html("<small class='text-danger'> Please put email</small>");
    $("#SignUpEmail").focus();
    return false;
  } else if (stdRegPassword.trim() == "") {
    $("#regisStatus3").html("<small class='text-danger'> Please put password</small>");
    $("#SignUpPassword").focus();
    return false;
  } else {
    // INI NANTI GANTI PAKE AJAX YAA
    window.location.href = "https://getbootstrap.com/";
  }
}

//show login dan register ketika link di klik
document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.querySelector("#login");
  const createAccountForm = document.querySelector("#createAccount");
  const showBody = document.getElementById("showBody");
  const showLogin = document.querySelector("#showLogin");
  const showCreateAccount = document.querySelector("#showCreateAccount");
  const CloseAccountForm = document.querySelector("#CloseCreateAccountForm");
  const CloseLoginForm = document.querySelector("#CloseLoginForm");

  document.querySelector("#linkCreateAccount").addEventListener("click", (e) => {
    e.preventDefault();
    loginForm.classList.add("form--hidden");
    createAccountForm.classList.remove("form--hidden");
    showBody.classList.remove("form--hidden");
  });

  document.querySelector("#linkLogin").addEventListener("click", (e) => {
    loginForm.classList.remove("form--hidden");
    createAccountForm.classList.add("form--hidden");
    showBody.classList.remove("form--hidden");
  });

  document.querySelector("#showLogin").addEventListener("click", (e) => {
    loginForm.classList.remove("form--hidden");
    createAccountForm.classList.add("form--hidden");
    showBody.classList.remove("form--hidden");
  });

  document.querySelector("#showCreateAccount").addEventListener("click", (e) => {
    loginForm.classList.add("form--hidden");
    createAccountForm.classList.remove("form--hidden");
    showBody.classList.remove("form--hidden");
  });

  document.querySelector("#CloseLoginForm").addEventListener("click", (e) => {
    loginForm.classList.add("form--hidden");
    createAccountForm.classList.add("form--hidden");
    showBody.classList.add("form--hidden");
  });

  document.querySelector("#CloseCreateAccountForm").addEventListener("click", (e) => {
    loginForm.classList.add("form--hidden");
    createAccountForm.classList.add("form--hidden");
    showBody.classList.add("form--hidden");
  });
});

//untuk menampilkan dan menghilangkan login
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
