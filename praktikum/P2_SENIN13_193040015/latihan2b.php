<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
            <th>Kolom <?= $i;?></th>
            <?php  endfor; ?>
        </tr>
        <tr>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
        <th>Baris <?= $j; ?></th>
            <?php for ($k = 1; $k <= 5; $k++) : ?>
            <td>Baris <?= $j;?>, Kolom <?= $k; ?></td>
            <?php  endfor; ?>
        </tr>
        <?php  endfor; ?>
        
        
    </table>
</body>
</html>