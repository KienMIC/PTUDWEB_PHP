<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>settype</title>
</head>
<body>
    <h4>Change DataType of Variable</h4>
    <?php
    $var="12-ABC";
    $check=true;
    echo $var;
    echo "<br>";
    echo $check;
    echo "<br>";
    settype($var,"integer");
    echo $var;
    echo "<br>";
    settype($check,"string");
    echo $check;
    ?>
</body>
</html>