<?php
$arr= [4,6,12,-1,34,67,101,0,-13];
$max=$arr[0];
$min=$arr[0];

foreach ($arr as $nb){
    if ($nb >$max){
        $max=$nb;
    }
    elseif ($nb <$min){
        $min=$nb;
    }
}

/* or we can use another sort function 

sort ($arr);
$max= $arr[count($arr)-1];
$min= $arr[0]; */


echo "the maximum of the array is $max \n";  
echo "the minmum of the array is $min \n";
?>