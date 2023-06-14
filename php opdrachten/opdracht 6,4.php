<!DOCTYPE html>
<html lang="en">
<head>      

</head>
<body>
<?php
function Omtrek(){
    $pi = (pi());
    $lengte = $_POST['lengte'];
    $diameter = $lengte*2;
    $som = $diameter * $pi;
    $antwoord = number_format($som, 1);
    echo"antword $lengte is : $antwoord </br>";
}

function Oppervlakte(){
    $pi = (pi());
    $lengte = $_POST['lengte'];
    $som = $lengte * $lengte * $pi;
    $antwoord = number_format($som, 1);
    echo"antword $lengte is : $antwoord </br>";
}

if(isset($_POST['omtrek'])) {
    Omtrek();
}

if(isset($_POST['oppervlakte'])) {
    Oppervlakte();
}
?>

    <form action="#" method="post">
        <input type="number" name="lengte" required>
        <input type="submit" name="omtrek" value="Omtrek">
        <input type="submit" name="oppervlakte" value="Oppervlakte">

    </form>
</body>
</html>