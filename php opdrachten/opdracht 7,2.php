<form action="#" method="post">
        <p>Getal 1 <input type="number" name="getal1" value="getal1"></p> 
        <input type="radio" name="rekenen" value="optellen"> Optellen
        <input type="radio" name="rekenen" value="aftrekken"> Aftrekken
        <input type="radio" name="rekenen" value="vermenigvuldigen"> Vermenigvuldigen
        <input type="radio" name="rekenen" value="delen"> Delen
        <p>Getal 2 <input type="number" name="getal2" value="getal2"></p> 
        <input type="submit" name="Berekenen" value="berekenen">
    </form>

<?php
        $waarde = $_POST["rekenen"];
        $getal1 = $_POST["getal1"];
        $getal2 = $_POST["getal2"];

        switch($waarde) {
            case"optellen":
                $som = $getal1 + $getal2;
                echo"$getal1 + $getal2 = $som"; // dit doet de getal 1 en 2 bij elkaar optellen
            break;
            case"aftrekken":
                $som = $getal1 - $getal2;
                echo"$getal1 - $getal2 = $som";// dit zorgert ervoor dat de gettalen aftrekken
            break;
            case"vermenigvuldigen":
                $som = $getal1 * $getal2;
                echo"$getal1 * $getal2 = $som";// dit zorgt ervoor dat het keer doet
            break;
            case"delen":
                $som = $getal1 / $getal2;
                echo"$getal1 / $getal2 = $som"; // dit zorgt ervoor dat het deelt met de getall die je invoert
            break;
        }

?>