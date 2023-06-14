
<!DOCTYPE html>
<html lang="en">
<head>
    <title>4,5opdr</title>
</head>
<body>
<form action="#" method="post">
    <input type="number" name="getal">
    <input type="submit" value="submit">
</form>

    <?php 
        if(isset($_POST['getal'])){
            $getal = $_POST['getal'];
            echo"Is het getal $getal even? ";
            if($getal % 2 == 0){
                echo"Ja";
            }
            elseif($getal % 2 == 1){
                echo"Nee";
            }
        }
    ?>

</body>
</html>