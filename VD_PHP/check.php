<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check data type</title>
</head>
<body>
    <h4>Check DataType of Variable</h4>
    <?php
    $sotrang=10;
    $record=5;
    $check = true;
    $strSQL="select * from tblCustomers";
    $myarr = array("first", "last", "company");
    //$myarrs[2];
    $myarrs[0]="Number 0";
    $myarrs[1]="Number 1";
    $myarrs[2]="Number 2";
    echo is_array($myarr);
    echo "<br>";
    echo is_bool($record);
    ?>
</body>
</html>