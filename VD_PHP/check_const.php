<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECK CONST</title>
</head>
<body>
    <h4>Constant</h4>
    <?php
    define("pi",3.14);
    //define("hrs",8);
    function Test()
    {
    if(defined("pi"))
    echo "<br>pi:=".pi;
    else
    echo "<br>pi not defined";
    if(defined("hrs"))
    echo "<br>hrs:=".hrs;
    else
    echo "<br>hrs not defined";
    }
    Test();
    ?>
</body>
</html>