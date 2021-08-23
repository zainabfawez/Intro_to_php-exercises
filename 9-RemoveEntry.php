<?php

// removing entry by value 1st occurence:
function RemoveEntry ($arr,$value){
    foreach ($arr as $index => $val){
        if ($val==$value){
            unset($arr[$index]);
            // if we need to remove all the accurences of the value, remove break
            break;
        }
    }
    return $arr;
}
$my_array=[1,2,3,4,5,6,3,5];
$new_array=RemoveEntry($my_array,3);

print_r($new_array);
?>