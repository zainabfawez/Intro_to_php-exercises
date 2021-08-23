<?php

$associative_arr = ["ali"=>23, "zainab"=>28,"ahmad"=>22,"abed"=>21,"hannan"=>26,"Mohammad"=>29,"nathalie"=>27];
$max=reset($associative_arr); // assigning the first value of the array to be the maximum
foreach ($associative_arr as $index => $age ){
    if ($age >$max){
        $max=$age;
        $result=$index;
    }
 }
echo "the index of the highest value in the array is: $result";
?>