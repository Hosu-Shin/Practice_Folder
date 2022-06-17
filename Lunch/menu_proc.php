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

    function sel_lunch(&$param)
    {
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

    $sel = sel_lunch($param);
    if(empty($sel)) {
        $result = ins_menu($param);
        ?>
        <script>
            alert("<?=$insMenu?>이(가) 등록되었습니다.");
            location.assign("menu.php");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("이미 등록된 메뉴입니다.");
            location.assign("menu.php");
        </script>
<?php    } 
?>
