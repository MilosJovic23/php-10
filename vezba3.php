<?php





    function kamata ( $iznosKredita, $godina ){

        $kamata = 0;

        if ( $godina < 2000 ){
            $kamata = 0.05;
        } else if(  $godina <= 2010 ){
            $kamata = 0.08;
        } else if (  $godina <= 2020 ){
            $kamata = 0.1;
        } else {
            $kamata = 0.14;
        }

        return $iznosKredita*$kamata;

    }

    $kamata = kamata(14000,2001);


    echo $kamata;


    ?>