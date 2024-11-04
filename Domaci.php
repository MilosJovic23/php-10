<?php









    function izracunajDostavu ( $cena , $grad ){

        $dostava = [
            "subotica" => 220,
            "pancevo" => 10,
            "sarajevo" => 292,
            "split" => 799
        ];

        $grad = strtolower($grad);
        $proveraDostave = array_key_exists( $grad , $dostava );

        if( !$proveraDostave ){
            die("Za sad ne dostavljamo na vasu adresu :(");
        }

        foreach ($dostava as $gradZaDostavu => $udaljenostOdBg){
            if ( $gradZaDostavu == $grad ){
                $udaljenost = $udaljenostOdBg;
            }

        }

        if( $udaljenost < 100 ) {
            $cenaDostave = 200;
        } else if ( $udaljenost < 200 ) {
            $cenaDostave = 350;
        } else {
            $cenaDostave = 500;
        }


    return $cenaDostave;

    }

    $cenaDostave = izracunajDostavu( 2000 , "SpLiT" );

    echo  "cena za dostavu je ".$cenaDostave;




?>