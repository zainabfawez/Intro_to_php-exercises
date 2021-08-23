<?php

$list1= "4, 5, 6, 7";
$list2= "4, 5, 7, 8";

// a function to remove the comma and space from string and transfrom it into an array.
function cleanAndSplit ($str){
    $str = str_replace(",", "",$str);
    $str = str_replace(" ", "",$str);
    $arr = str_split($str);
    return $arr;
}

$arr1= cleanAndSplit ($list1);
$arr2= cleanAndSplit ($list2);

//print_r($arr2);
//print_r($arr1);

// uniting the two arrays without duplicates
$new_arr = $arr1;
    foreach ($arr2 as $element){
        if ( ! in_array($element, $arr1)){
            $new_arr[]=$element;
       }
   }
//print_r($new_arr);

// converting the united array to a string where elements are seperated by comma and space.
$new_list= implode(", ", $new_arr);
echo $new_list;


?>