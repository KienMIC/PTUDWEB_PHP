<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope</title>
</head>
<body>
    <h4>Scope of Variable</h4>
    <?php
    $a = 100;
    /* global scope */
    function Test()
    {
    $i=10;
    $a=10;
    echo "<br>a:=$a";
    echo "<br>i:=$i";
    /* reference to local scope variable */
    }
    Test();
    echo "<br>a:=$a";
    $i=1000;
    echo "<br>i:=$i";
    ?>
</body>
</html>