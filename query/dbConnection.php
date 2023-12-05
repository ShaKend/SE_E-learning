<?php

//ubah aja nanti
//syntax: mysqli(host, user, password, database_name, ports)
//untuk ports itu optional, boleh ada atau tidak
//disini gw(shaun) pakenya 3307 krn ports gw emg sgitu
$conn = new mysqli("localhost", "root", "password", "elearning", "3307");
if($conn->connect_error){
    die("connection failed");
}

?>