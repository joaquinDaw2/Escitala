<?php

    $anchoCod = 10;
    $carasCod = 6;

    $texto = "Ernu  n cyna dhoocuea  on ,nqr l oudladmiau ebergM rrmaaceoe";

    $arrayCod = array();
    $arrayDes = array();

    $cont = 0;
    $cadenaCod = "";
    $cadenaDes = "";

    for ($j = 0; $j < $anchoCod; $j++){
        for ($i = 0; $i < $carasCod; $i++){
            $arrayCod[$i][$j] = substr($texto,$cont,1);
            $cont++;
        }
    }

    $cont = 0;

    for ($j= 0; $j < $anchoCod; $j++){
        for ($i=0; $i < $carasCod; $i++){
            $arrayDes[$j][$i] = substr($texto,$cont,1);
            $cont++;
        }
    }

for ($j = 0; $j < $carasCod; $j++){
    for ($i = 0; $i < $anchoCod; $i++){
        $cadenaDes .= $arrayCod[$j][$i];
    }
}
echo "<pre>".$cadenaDes."</pre>";

?>