<?php
    include_once("db/db.php");
    include_once("db/dbMenu.php");

    $arr = sel_all_lunch();

//메뉴 배열로 만들기
    $rs_arr = [];
    while ($row = mysqli_fetch_assoc($arr)) {
        $rs_arr[] = $row['menu'];
        $menuId = $row['menuId'];
        $menu = $row['menu'];
    }

    //print_r ($rs_arr);

    // $randomMenu = $rs_arr[rand(0, count($rs_arr)-1)];
    //print $rs_arr[rand(0, count($rs_arr)-1)] ."<br>";


//메뉴 배열을 문자열로 바꾸기
    function clickM2()
    {
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Lunch_Menu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Neucha&display=swap');

        @font-face {
            font-family: 'EarlyFontDiary';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_220508@1.0/EarlyFontDiary.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>

<body>
    <h1>오늘의 점심</h1>
    <div>
        <form action="menu_proc.php" method="post">
            <input type="text" name="menu" required>
            <input type="submit" value="메뉴 등록하기" class="">
        </form>
    </div>
    <button id="my_lunch" class="button" onclick="clickMe();" style="font-family: Neucha, sans-serif;">Click🍭</button>
    <div id="print"></div>
    <div>© My_Lunch🍚</div>

    <script>
        const selDiv = document.querySelector('#print');
        const h3 = document.createElement('h3');

        function clickMe() {

            let result = "<?= clickM2(); ?>";
            //console.log(result);
            const menuArr = result.split(',');
            
            let printMenu = menuArr[Math.floor(Math.random() * menuArr.length - 1)];
        
        //undefined 안 뜨게 만들기
            if (printMenu) {
                selDiv.appendChild(h3);
                h3.innerText = printMenu;
                Swal.fire({
                    title: printMenu,
                    width: 600,
                    padding: '3em',
                    color: '#716add',
                    background: '#fff url(/images/trees.png)',
                    backdrop: `
                        rgba(0,0,123,0.4)
                        url("./pika_pika.gif")
                        center top
                        no-repeat
                    `
                    });
            };
        }
    </script>
</body>

</html>
