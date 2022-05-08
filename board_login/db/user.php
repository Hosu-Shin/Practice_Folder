<?php

    include_once "db.php";
    

    function ins_join($param){
        
    $conn = get_conn();

        $uid = $param['uid'];
        $upw = $param['upw'];
        $nm = $param['nm'];
        $email = $param['email'];
        $gender = $param['gender'];
    

    $sql = "INSERT INTO t_user
            (uid, upw, nm, email, gender)
            VALUES
            ('$uid', '$upw', '$nm', '$email', $gender)
            ";
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    return $result;

    };
?>