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
    <div><h3>
        <?php
        $arr = [
            "제육볶음", "냉면", "돈까스", "비빔밥", "우동",
            "파스타", "닭갈비", "찜닭", "떡볶이", "피자"
        ];
        //print rand(0, count($arr)-1) . "<br>";
        print $arr[rand(0, count($arr) - 1)];
        ?>
    </h3></div>
</body>

</html>