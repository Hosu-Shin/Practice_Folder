<?php
include_once("db.php");

function sel_lunch()
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

$arr = sel_lunch();

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
</head>

<body>
    <div class="joke">
        <details style="cursor:pointer">
            <summary class="setup">메뉴 펼쳐보기</summary>
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
    <button onclick='checked()'>확인</button>
    <div id='result'></div>

    <script>
        function checked() {
            let query = 'input[name="menu"]:checked';
            console.log(query);
            let selectedEls = document.querySelectorAll(query);

            let result = '';
            selectedEls.forEach((el) => {
                result += el.value + ' ';
            });
            console.log(result);

            document.getElementById('result').innerText = result;
        }
    </script>
</body>

</html>