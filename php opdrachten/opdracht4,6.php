
<!DOCTYPE html>
<html lang="en">
<head>
    <title>4,6</title>
</head>
<body>
    <?php

        $tijd = date("H:i");
        $uur = date("H");
        $temperatuur = 19;
        $luchtvochtigheid = 95;
        echo"$tijd<br>";




        if ($uur > 17.00 || $temperatuur < 20 && $luchtvochtigheid < 85){
            echo"De airco staat uit.";
        }
        else {
            echo"De airco staat aan.";
        }
    ?>

</body>
</html>