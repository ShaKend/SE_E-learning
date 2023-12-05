//untuk admin login
//karena page untuk login admin blm dibuat, jadi isi ini cuma kerangka doang

//WARNING: jika ada error di console seperti:
//content-all.js:1 Uncaught (in promise) Error: Could not establish connection. Receiving end does not exist.
//coba di incognito mode yaa
function admLogin() {
  event.preventDefault();
  let admEmail = $("#adminEmail").val();
  let admPassword = $("#adminPassword").val();
  console.log(admEmail);
  console.log(admPassword);

  //ajxx AJAX
  //nanti ketika sukses login, masuk ke dashboard admin
  // $.ajax({
  //   url: "query/admins/checkAdmins.php",
  //   method: "POST",
  //   data: {
  //     checklogin: "checklogin",
  //     admEmail: admEmail,
  //     admPass: admPass,
  //   },
  //   success: function (data) {
  //     console.log(data);
  //     if (data == 1) {
  //       $(".statusLogin").html("<span class='spinner-border text-success'></span>");
  //       setTimeout(() => {
  //         window.location.href = "";
  //       }, 900);
  //     } else if (data == 0) {
  //       alert("Wrong password or email");
  //     }
  //   },
  // });
}
