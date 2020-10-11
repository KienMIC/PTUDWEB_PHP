<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Const</title>
</head>
<body>
    <h4>Constant</h4>
    <?php
    define("pi",3.14);
    function Test()
    {
    echo "<br>pi:=".pi;
    echo "<br>pi:=".constant("pi");
    }
    Test();
    echo "<br>pi:=".pi;
    echo "<br>pi:=".constant("pi");
    ?>
</body>
</html>