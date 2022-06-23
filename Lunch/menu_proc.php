<?php
    include_once ("db/dbMenu.php");

    $insMenu = $_POST["menu"];

//울고 싶은 공백 처리
    $insMenu = preg_replace("/\s+/", "", $insMenu);
    if(empty($insMenu)) { ?>
        <script>
            alert("내용을 입력해 주세요");
            location.assign("menu.php");
        </script>
<?php } 

    $param = [
        "menu" => $insMenu
    ];

    
    $sel = sel_lunch($param);
    

    if($insMenu !== '' && empty($sel['menu'])) {
        $result = ins_menu($param);
        ?>
        <script>
            alert("<?=$insMenu?>이(가) 등록되었습니다.");
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
