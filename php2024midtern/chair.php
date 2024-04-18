<?php
session_start();
?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <title>表單資料顯示</title>
    <style>
        body {

            font-family: "標楷體", "KaiTi", serif;
            font-size: 25px;
        }
    </style>
</head>
<center>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["sName"];
        $number = $_POST["sNum"];
       

        echo "您的姓名：$name<br/>";
        echo "您的學號：$number<br/>";
    }
    ?>
</body>
<center>

</html>
