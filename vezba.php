<?php








    function izracunajPopust ( $cena,$popust ) {

        $procenatPopusta = $popust / 100;
        $popustProizvoda = $cena * $procenatPopusta;

        return $popustProizvoda;

    }


    echo izracunajPopust(1500,10);

?>