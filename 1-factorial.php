
<?php

function factorial($n){
    if ($n==0){
        return 0;
    }
    $f=1;
    for($i=2;$i<=$n;$i++){
        $f=$f*$i;
    }
    return $f;
}

$f1= factorial(5);
$f2= factorial(0);
echo "the factorial of 5 is $f1";
echo "the factorial of 0 is $f2";

?>