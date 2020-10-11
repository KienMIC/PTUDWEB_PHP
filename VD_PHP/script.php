<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELLO PHP</title>
</head>
<body>
    Greeting: <?="Hello PHP"?>
    <?php
        $sotrang = $pagenumber;
        $record = $rownumber;
        $totalRows = 0;
        $paging = "Go to 1 2 3 4 5 Next";
    ?>
    Giá trị của Paging : <?=$paging?>
</body>
</html>