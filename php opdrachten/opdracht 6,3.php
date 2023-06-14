<?php
        function Postcode() {
            echo rand(1000,9999);
            $stringtekst = "ABCEDFGHIJKLMNOPQRSTUVWXYZ";
            $random = substr(str_shuffle($stringtekst), 0, 2);
            echo $random;
        }
        Postcode();
    ?>  