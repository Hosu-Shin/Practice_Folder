<?php
    include_once ("db/dbMenu.php");

    $insMenu = $_POST["menu"];

    if(!$insMenu) { ?>
        <script> 
            alert("빈칸입니다 돌아가세요");   
            console.log(`<?=$insMenu?>`);
            //location.assign("menu.php");
        </script>
    <?php } 

    $param = [
        "menu" => $insMenu
    ];
    
    $all_sel = sel_all_lunch();
    while($row = mysqli_fetch_assoc($all_sel)) {
        if($row["menu"] !== $insMenu) {
            $result = ins_menu($param);
            ?>
            <script>
                alert("<?=$insMenu?>이(가) 등록되었습니다.");
                location.assign("menu.php");
            </script>
            <?php
        } else { ?>
            <script>
                alert("이미 등록된 메뉴입니다.");
                location.assign("menu.php");
            </script>
        <?php }} ?>
    
