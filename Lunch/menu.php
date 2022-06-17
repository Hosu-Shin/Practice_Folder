<?php
    include_once ("db.php");

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
        $ha =  implode(',', $rs_arr);
        return $ha;
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
    <button id="my_lunch" onclick="clickMe();">눌러</button>
    <div>
        
    </div>
    <div>© My_Lunch</div>
    <script>
        const ddd = document.querySelector('div');
        const h3 = document.createElement('h3');
        
        function clickMe() {
            let result = "<?= clickM2(); ?>";
            //console.log(result);
            const ho = result.split(',');

            let aa = ho[Math.floor(Math.random()*ho.length-1)];
            if(aa){
                ddd.appendChild(h3);
                h3.innerText = aa;
            }
        }
    </script>
</body>

</html>

