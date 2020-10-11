<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VD3.8: IF</title>
</head>
<body>
    <h4>IF Statement</h4>
    <?php
    $b=true;
    $j=3;
    if(($j>=3) &&($b!=true))
    echo "result is true";
    if(($j<3) ||($b==true))
    echo "result is false";
    ?>
</body>
</html>