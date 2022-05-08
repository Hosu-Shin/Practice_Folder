<?php

    include "db/user.php";

    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    // $upw_com = $_POST['confirm_upw'];
    $nm = $_POST['nm'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $param = [
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "email" => $email,
        "gender" => $gender
    ];


    $result = ins_join($param); 

?>