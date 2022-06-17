<?php
    include_once ("db.php");

    $insMenu = $_POST["menu"];

    $param = [
        "menu" => $insMenu
    ];

    function ins_menu(&$param) {
        $menu = $param["menu"];
        $sql = "INSERT INTO menu
                (`menu`)
                VALUES
                ('$menu')
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        return $result;
    }

    $result = ins_menu($param);

    if($result) {
        header("Location: menu.php");
    }
?>


