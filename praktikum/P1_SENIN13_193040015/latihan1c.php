<?php 

$a = "A";
$b = "B";
$c = "C";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat bulat</title>
    <style>
    .bulat{
        width: 50px;
        height: 50px;
        border: 2px solid #000;
        text-align: center;
        line-height: 50px;
        margin: 2px;
        float: left;
        border-radius: 100px;
        background: salmon;
    }

    .clear{
        clear: both;
    }
    </style>
</head>
<body>
    <!-- baris1 -->
    <div class = "bulat"><?php echo $a?></div>
    <div class = "clear"></div>

    <!--baris2-->
    <div class = "bulat"><?php echo $b?></div>
    <div class = "bulat"><?php echo $b?></div>
    <div class = "clear"></div>

    <!--baris3-->
    <div class = "bulat"><?php echo $c?></div>
    <div class = "bulat"><?php echo $c?></div>
    <div class = "bulat"><?php echo $c?></div>
    <div class = "clear"></div>
</body>
</html>