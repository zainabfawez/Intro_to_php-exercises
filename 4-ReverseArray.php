<?php
function ReverseArray ($arr){
    $arr_len=count($arr);
    $new_arr=[];
    for ($i=$arr_len-1; $i>-1; $i--){
        $new_arr[]=$arr[$i];
        
    }
    return $new_arr;
}

$arr = [1,2,3,4,5,6,7,8,9];
$new_arr=ReverseArray($arr);

print_r ($new_arr);
}

?>
