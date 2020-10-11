<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2D</title>
</head>
<body>
    <h4>Array two demenssions</h4>
    <?php
    $myarrs[][]=array(2,3);
    $myarrs[0][0]="Number 00";
    $myarrs[1][0]="Number 10";
    $myarrs[0][1]="Number 01";
    $myarrs[1][1]="Number 11";
    $myarrs[0][2]="Number 02";
    $myarrs[1][2]="Number 13";
    echo $myarrs[0][2];
    echo "<br>";
    ?>
</body>
</html>