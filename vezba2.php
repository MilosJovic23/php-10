<?php





    $brojevi = [250,330,1000,2000,5000];
    $popusti = [];

    function izracunajPopust ( $broj ) {
        return $broj*0.1;
    }

    foreach ( $brojevi as $broj ) {
        $popustProizvoda = izracunajPopust($broj);
        $popusti[] = $popustProizvoda;
    }


    $ukupanPopust = array_sum($popusti);

    echo $ukupanPopust;


?>