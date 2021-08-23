
<?php

function union($arr1, $arr2){
   $new_arr = $arr1;
   foreach ($arr2 as $element){
       if ( ! in_array($element, $arr1)){
           $new_arr[]=$element;
       }
   }
   return $new_arr;
}
$array1 = [1,2,3,4,5];
$array2 = [4,5,6,7,8];
$new_array= union($array1,$array2);

print_r($new_array);

?>