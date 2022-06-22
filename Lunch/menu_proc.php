<?php
    include_once ("db/dbMenu.php");

    $insMenu = $_POST["menu"];

    $param = [
        "menu" => $insMenu
    ];

    $empty = preg_replace("/\s+/", "", $insMenu);
    
    $all_sel = sel_all_lunch();

    if($insMenu !== '' && !empty($sel)) {
        $result = ins_menu($param);
        ?>
        <script>
            alert("<?=$insMenu?>이(가) 등록되었습니다.");
            location.assign("menu.php");
        </script>
        <?php
    } else if(empty($empty)) { ?>
        <script>
            alert("내용을 입력해 주세요");
            location.assign("menu.php");
        </script>
<?php } else {
        ?>
        <script>
            alert("이미 등록된 메뉴입니다.");
            location.assign("menu.php");
        </script>
<?php   } 
?>
