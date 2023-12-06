<?php
include_once('../dbConnection.php');

if (isset($_POST['stdRegName']) && isset($_POST['stdRegEmail']) && isset($_POST['stdRegPassword'])) {
    $stdName = $_POST['stdRegName'];
    $stdEmail = $_POST['stdRegEmail'];
    $stdPassword = $_POST['stdRegPassword'];

    $sql = "INSERT INTO student(stu_name, stu_email, stu_pass) VALUES ('$stdName', '$stdEmail', '$stdPassword')";

    if ($conn->query($sql) == true) {
        echo json_encode("yes");
    }else{
        echo json_encode("no");
    }
}


?>