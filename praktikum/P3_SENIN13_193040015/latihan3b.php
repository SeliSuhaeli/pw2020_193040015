<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak {
        box-shadow: 1px 1px 1px rgba(0,0,0,1);
        border: 2px solid black;
    }
    </style>
</head>
<body>
    <?php
$jawabanIsset = "Isset adalah salah satu perintah PHP yang berfungsi untuk memeriksa sebuah objek dari form, apakah ada atau tidak nilai yang di lempar dari suatu form<br><br>";
$jawabanEmpty = "Empty pada PHP berfungsi sebagai penanda suatu kondisi.";
$GLOBALS ['Isset'] = $jawabanIsset;
$GLOBALS ['Empity'] = $jawabanEmpty;
function soal($style) {
    echo "<div class='$style'>
    <p>$GLOBALS[Isset]</p>
    <p>$GLOBALS[Empity]</p
    </div>";
}
?>
<?php
echo soal("kotak")
?>
</body>
</html>