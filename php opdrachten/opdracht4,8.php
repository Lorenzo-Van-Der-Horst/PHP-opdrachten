<!DOCTYPE html>
<html lang="en">
<head>
    <title>4,8</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="leeftijd" placeholder="Wat is je leeftijd?"><br>
        Stempas ontvangen?<br>
        <input type="radio" name="stempas" value="true">Ja (True)
        <input type="radio" name="stempas" value="false" checked="true">Nee (False)<br>
        <input type="submit" value="Verzenden"><br>
    </form>
    <?php
        if(isset($_POST["leeftijd"])){
            $leeftijd = $_POST['leeftijd'];
            $stempas = $_POST['stempas'];
            $examen = 16;

            if($leeftijd >= $examen){
                echo"je bent oud genoeg<br>";
            }
            else {
                echo"Je bent niet oud genoeg<br>";
            }

            if($stempas == 'true' && $leeftijd >= 18){
                echo"Ja mag stemmen en je mag een stempas krijgen";
            }
            else {
                echo"Je mag niet stemmen omdat je geen stempas hebt";
            }
        }
    ?>
</body>
</html>