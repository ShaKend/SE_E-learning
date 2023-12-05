//untuk mengecheck apakah email sudah terdaftar didatabase atau blm
//
$(document).ready(function () {
  //ini menunggu folder untuk dirender, baru dieksekusi
  $("#SignUpEmail").on("keypress blur", function () {
    let stdEmail = $("#SignUpEmail").val();

    //AJAX DISINI YAAA, jgn lupa diganti
    // $.ajax({
    //   url: "query/students/checkStudents.php",
    //   method: "POST",
    //   data: {
    //     checkmail: "checkmail",
    //     stdEmail: stdEmail,
    //   },
    //   success: function () {
    //     console.log(data);
    //     if (data != 0) {
    //       $("#btnRegis").attr("disabled", true);
    //       $("#regisStatus2").html("<small class='text-danger'> Email used!</small>");
    //     } else if (data == 0) {
    //       $("#btnRegis").attr("disabled", false);
    //     }
    //   },
    // });
  });
});

//login
function stdLogin() {
  event.preventDefault();
  let stdLogEmail = $("#loginEmail").val();
  let stdLogPass = $("#loginPass").val();
  console.log(stdLogEmail);
  console.log(stdLogPass);

  //GANTI JADI AJAX
  // $.ajax({
  //   url: "query/students/checkStudents.php",
  //   method: "POST",
  //   data: {
  //     checklogin: "checklogin",
  //     stdLogEmail: stdLogEmail,
  //     stdLogPass: stdLogPass,
  //   },
  //   success: function (data) {
  //     console.log(data);
  //     if (data == 1) {
  //       $(".statusLogin").html("<span class='spinner-border text-success'></span>");
  //       setTimeout(() => {
  //         window.location.href = "";
  //       }, 900);
  //     } else if (data == 0) {
  //       $(".statusLogin").html("<span class='text-danger'>Wrong</span>");
  //     }
  //   },
  // });
}
