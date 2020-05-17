<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <style>
    .kotak{
        width: 50px;
        height: 50px;
        border: 2px solid #000;
        text-align: center;
        line-height: 50px;
        margin: 2px;
        float: left;
        background: salmon;
    }
    .kotak-a{
        width: 50px;
        height: 50px;
        border: 2px solid #000;
        text-align: center;
        line-height: 50px;
        margin: 2px;
        float: left;
        background: lightskyblue;
    }
    .clear{
        clear: both;
    }
    </style>
</head>
<body>
<?php for ($i = 1; $i <= 6; $i++): ?>
    <?php for($k = 1; $k <= 6; $k++): ?>
        <?php if (($i+$k) % 2 ==0): ?>
            <div class="kotak"></div>
        <?php else: ?>
            <div class= "kotak-a"></div>
        <?php endif; ?>
        <?php endfor; ?>
            <div class="clear"></div>
    <?php endfor; ?>      
</body>
</html>