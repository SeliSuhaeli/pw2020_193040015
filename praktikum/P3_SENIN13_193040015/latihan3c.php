<?php 
function tumpukanBola($tumpukan) {
    for ($i=0; $i <= $tumpukan ; $i++){
        for ($j=1; $j <= $i; $j++){
            echo "<div class='bola'>$i</div>";
        }
            echo "<div class='clear'></div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3c</title>
    <style>
        .bola {
            font-size: 20px;
            width: 35px;
            height: 35px;
            border: 2px solid #000;
            text-align: center;
            line-height: 35px;
            margin: 3px;
            float: left;
            border-radius: 35px;
            background-color: salmon;
        }

        .clear{
            clear: both;
        }
        
    </style>
</head>
<body>
    <?php tumpukanBola(5) ?>
</body>
</html>