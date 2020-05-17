<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <style>
    .tulisan {
        font-family: Arial;
        font-size: 28px;
        color:  #8c782d;
        font-weight: bold;
        font-style: italic;
        text-align: center;
    }
    .kotak {
        border: 2px solid black;
        box-shadow: 10px 10px 10px rgba(0,0,0,5);
        border-radius: 20px;
    }
    </style>
</head>
<body>
    <?php 
        function gantiStyle($tulisan, $style1, $style2){
            echo "<div class='$style1'>
            <p class='$style2'>$tulisan</p>
            </div>";
        }
    ?>
    <?php
        echo gantiStyle("Selamat datang di praktikum PW 2020", "kotak", "tulisan");
    ?>
</body>
</html>