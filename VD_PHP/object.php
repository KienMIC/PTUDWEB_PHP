<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object</title>
</head>
<body>
    <h4>Object</h4>
    <?php
    class clsA
    {
        function clsA()
        {
        echo "I am the constructor of A.<br />\n";
        }
        function B(){
            echo "I am a regular function named B in class A.<br />\n";
            echo "I am not a constructor in A.<br />\n";
            }
        }
        $b = new clsA();
        echo "<br>";
        $b->B();
        ?>
        </BODY>
        </HTML>
</body>
</html>