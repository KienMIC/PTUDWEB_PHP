<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AND OPERATOR</title>
</head>
<body>
    <h4>ADD Operator</h4>
    <?php
    $i=10;
    $j=5;
    $j+=$i++;
    echo "j=$j";
    echo "<br>";
    echo "i=$i";
    echo "<br>";
    $j+=++$i;
    echo "j=$j";echo "<br>";
    ?>
</body>
</html>