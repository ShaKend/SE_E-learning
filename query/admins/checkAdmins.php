<?php 
if(!isset($_SESSION)){
    session_start();
}

//untuk login
if (isset($_POST['checklogin']) && isset($_POST['admEmail']) && isset($_POST['admPass'])) {
    $admEmail = $_POST['admEmail'];
    $admPass = $_POST['admPass'];
    $sql = "SELECT adm_email, adm_password FROM users WHERE adm_email = '".$admEmail."' AND adm_password = '".$admPass."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    if ($row === 1) {
        $_SESSION['isAdmLogin'] = true;
        $_SESSION['admEmail'] = $admEmail;
    }elseif($row === 0){
        $_SESSION['isLogin'] = false;
    }
    echo json_encode($row);
}



?>