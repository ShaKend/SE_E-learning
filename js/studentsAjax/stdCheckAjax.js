//untuk mengecheck apakah email sudah terdaftar didatabase atau blm
//
// $(document).ready(function () {
//   //ini menunggu folder untuk dirender, baru dieksekusi
//   $("#SignUpEmail").on("keypress blur", function () {
//     let stdRegEmail = $("#SignUpEmail").val();

//     //AJAX DISINI YAAA, jgn lupa diganti
//     // $.ajax({
//     //   url: NA,
//     //   method: "POST",
//     //   data: {
//     //     stdEmail: stdRegEmail,
//     //   },
//     //   success: function () {
//     //     console.log(data);
//     //   },
//     // });
//   });
// });

//login
function stdLogin() {
  event.preventDefault();
  let stdLogEmail = $("#loginEmail").val();
  let stdLogPass = $("#loginPass").val();

  //GANTI JADI AJAX
  console.log(stdLogEmail);
  console.log(stdLogPass);
}
