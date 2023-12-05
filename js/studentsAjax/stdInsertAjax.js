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
    // AJAXNYA TOLONG GANTI YAA
    // $.ajax({
    //   url: "query/students/addStudents.php",
    //   method: "POST",
    //   datatype: 'JSON',
    //   data: {
    //     stdsignup: "stdsignup",
    //     stdRegName: stdRegName,
    //     stdRegEmail: stdRegEmail,
    //     stdRegPassword: stdRegPassword,
    //   },
    //   success: function (data) {
    //     console.log(data);
    //     if (data == "yes") {
    //       $(".statusLogin").html("<span class='spinner-border text-success'></span>");
    //       setTimeout(() => {
    //         window.location.href = "./page1.php";
    //       }, 900);
    //     } else if (data == "no") {
    //       $(".statusLogin").html("<span class='text-danger'>Failed</span>");
    //     }
    //   },
    // });
  }
}
