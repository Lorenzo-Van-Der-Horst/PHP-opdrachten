<!DOCTYPE html>
<html lang="en">
<body>
    <form action="#" method="post">
        Startkapitaal: <input type="number" name="start" placeholder="100000" required><br>
        Rentepercentage: <input type="number" name="rente" placeholder="4" max="8" required><br>
        Jaarlijkse opname: <input type="number" name="opname" placeholder="5000" min="4700" required><br>
        <input type="submit" value="Toevoegen">
    </form>

    <?php
        if (isset($_POST["start"])) {
            $start = $_POST["start"];
        } else {
            $start = 100000;
        }
        if(isset($_POST["rente"])) {
            $rente = $_POST["rente"];
        } else {
            $rente = 4;
        }
        if(isset($_POST["opname"])) {
            $opname = $_POST["opname"];
        } else{
            $opname = 5000;
        }
            $bedrag = $start/100(100+$rente);
            $jaaren = 0;

        if($opname > 4079) {
            while ($bedrag > $opname) {
                $bedrag -= $opname;
                $bedrag = $bedrag / 100 (100 + $rente);
                $jaaren++;
            }
            echo"U kunt $jaaren jaar lang $opname opnemen";
        } else {
            echo"De opname is te laag binnen 100 jaren.";
        }
    ?>
</body>
</html>