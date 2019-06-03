<?php
$numbersArray = [1, 3, 3, [5, 8, 6, [6, 8, 9]],6, 7];
$numbersArray2 = [2, 3, 5, 7];

function sumArrayNumbers($array){
    $sum = 0;
    foreach ($array as $element){
    if(is_array($element)){
        $sum = $sum + sumArrayNumbers($element);
    }else {
        $sum = $sum + $element;
    }
    }
    return $sum;
}
echo sumArrayNumbers($numbersArray);
echo ('<br>');
echo sumArrayNumbers($numbersArray2);


?>