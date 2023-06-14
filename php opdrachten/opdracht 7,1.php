<form method="post">
    <p>exclusief BTW
        <input type="text" name="bedrag" value=""></p>
    <input type="radio" name="BTW" value="negen"> laag, 9%
    <input type="radio" name="BTW" value="eenentwitig"> hoog, 21%
    <p><input type="submit" name="omzetten" value="omzetten"></p>
</form>

<?php
if(isset($_POST['BTW'])) {
    $btw = $_POST['BTW'];
    $bedrag = $_POST['bedrag'];
    if($btw == "negen") {
        $som = $bedrag / 100 * 109;
        echo " bedrag inclusied 9% BTW  : &euro; $som,-";
    } elseif($btw == "eenentwitig") {
        $som = $bedrag / 100 * 121;
        echo "Bedrag inclusief 21% BTW : & euro; $som,-";
    }
   }
?>