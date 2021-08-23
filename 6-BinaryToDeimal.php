<?php

function BinaryToDecimal($bin){
    $arr_bin=str_split($bin); // putting the binarydigits in an array 
    $arr_bin=array_reverse($arr_bin);
    $dec=0;
    for ($i=0; $i <strlen($bin) ; $i++){
        if ($arr_bin[$i]==1){
            $dec  = $dec + pow (2, $i);
        }
    }
    return $dec;
}

echo BinaryToDecimal("101001011" );
echo "\n";
echo bindec("101001011"); // to check my code

?>