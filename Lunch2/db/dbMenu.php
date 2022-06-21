<?php

    include_once("db.php");


    //DB에 저장된 음식 메뉴 가져오는 함수
        function sel_all_lunch()
        {
            $sql =
                "   SELECT menu, menuId
                    FROM menu
                ";
            $conn = get_conn();
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $result;
        }


    //DB에 음식 메뉴 넣는 함수
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

        function sel_lunch(&$param) {
            $menu = $param["menu"];
            $sql =
                "   SELECT menu
                    FROM menu
                    WHERE menu = '$menu';
                ";
            $conn = get_conn();
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return mysqli_fetch_assoc($result);
        }
        