<?php

$uur = date ("H");

if($uur > 6 & $uur <12)
{
    echo "Het is ochtend";
}
elseif($uur > 11 & $uur < 18)
{
    echo "Het is middag";
}


?>