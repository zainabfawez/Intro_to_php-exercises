<?php

$arr=[1,2,3,4,5,6,7,8,9];
$arr_even=[];
$arr_odd=[];
 
foreach ($arr as $nb){
    if ($nb % 2 == 0){
        $arr_even[]=$nb;
    }
    else{
        $arr_odd[]=$nb;
    }
} 
echo "odd numbers : \n";
print_r ($arr_odd );
    

echo "\n even numbers : \n";
print_r ($arr_even);

?>