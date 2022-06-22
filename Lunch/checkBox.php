<?php

include_once("db/dbMenu.php");

$arr = sel_all_lunch();

$rs_arr = [];
while ($row = mysqli_fetch_assoc($arr)) {
    $rs_arr[] = $row['menu'];
    $menuId = $row['menuId'];
    $menu = $row['menu'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox</title>
    <link href="style.css" rel="stylesheet">
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
    <div class="joke">
        <details style="cursor:pointer">
            <summary class="setup" style="font-family: 'EarlyFontDiary'; font-size: 24px;">메뉴 펼쳐보기</summary>
            <span class="punchline">
                <form id="Lunch" action="checkBox_proc.php" method="post">
                    <?php
                    for ($i = 0; $i < count($rs_arr); $i++) {
                    ?>
                        <input type="checkbox" name="menu" value="<?= $rs_arr[$i] ?>" />
                    <?php echo $rs_arr[$i];
                    } ?>
                </form>
            </span>
        </details>
    </div>
    <button onclick='checked()' class="button" style="font-family: Neucha, sans-serif;">Click🍭</button>
    <div id='result'></div>

    <script>
        function checked() {
            let query = 'input[name="menu"]:checked';
            console.log(query);
            let selectedEls = document.querySelectorAll(query);

            let result = '';
            selectedEls.forEach((el, idx) => {

                if (idx !== selectedEls.length - 1) {
                    result += el.value + ',';
                } else {
                    result += el.value;
                }
            });

            const arr1 = result.split(",");

            let randomMenu = arr1[Math.floor(Math.random() * arr1.length)];

            document.getElementById('result').innerText = randomMenu;

        }
    </script>
</body>

</html>
