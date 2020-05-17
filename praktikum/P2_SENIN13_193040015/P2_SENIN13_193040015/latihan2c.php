

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
<?php
for ($i = 1; $i <= 3; $i++) {
    for($k = 1; $k <= $i; $k++) {
    echo '<div class= "bulat">' . $i . '</div>';
}
    echo '<div class= "clear"></div>';
}
?>
</body>
</html>