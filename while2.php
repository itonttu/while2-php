<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while</title>
</head>
<body>
<?php
    $num = 10;
    $cnt= 0;
    echo $num,'個の●を表示します。<br>';
    do {
        echo'●';
        $cnt ++;
    } while($cnt<$num);
?>
</body>
</html>