<?php
    include_once ("db.php");

    $insMenu = $_POST['menu'];

    $param = [
        "menu" => $insMenu
    ];

    print_r ($param);


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

//---------------------------------------

    function sel_lunch() {
        $sql = 
        "   SELECT menu, menuId
            FROM menu
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    $arr = sel_lunch();
    
    $rs_arr = [];
    while($row = mysqli_fetch_assoc($arr)) {
        $rs_arr[] = $row['menu'];
        $menuId = $row['menuId'];
        $menu = $row['menu'];

    }
    // $randomMenu = $rs_arr[rand(0, count($rs_arr)-1)];
   
    //print $rs_arr[rand(0, count($rs_arr)-1)] ."<br>";
    function clickM2() {
        global $rs_arr;
        $divarr =  implode(',', $rs_arr);
        return $divarr;
    }

    //print clickM2();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch_Menu</title>
    <style>
        h3 {
            color: blue;
        }
    </style>
</head>

<body>
    <h1>오늘의 점심</h1>
    <div>
        <form action="#" method="post">    
            <input type = "text" name = "menu">
            <input type = "submit" value="메뉴 등록하기" class = "">
        </form>
    </div>
    <button id="my_lunch" onclick="clickMe();">눌러 눌러🍕</button>
    <div id="print">
    </div>
    <div>© My_Lunch</div>
    <script>
        const selDiv = document.querySelector('#print');
        const h3 = document.createElement('h3');
        
        function clickMe() {
            let result = "<?= clickM2(); ?>";
            //console.log(result);
            const menuArr = result.split(',');

            let printMenu = menuArr[Math.floor(Math.random()*menuArr.length-1)];
            if(printMenu){
                selDiv.appendChild(h3);
                h3.innerText = printMenu;
            }
        }
    </script>
</body>

</html>

