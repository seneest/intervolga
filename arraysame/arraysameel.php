<?php
include_once ('func.php');
$arr=array(1,1,2,2,3,3,4,4,5,6,6,5,7,7,7,8,9,10,10,11,-11,12,3,13,13,14,14,15,10,10,10,5,5,5,55,5,16,16,17,16,17,18,18,19,18,20,12,21,1,1,1,2,2,3,4,5,6,6,6,-1,-6,-8,21,22,22,23,23,24,25,26,27,28,29,30,31,32,33,34,34,34,36,38,38,-38,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50);

$counter=0;

$amount=count($arr);

for ($i=0;$i<=$amount-2;$i++)

{
   $check[$i]=valuesAreIdentical($arr[$i],$arr[$i+1]);
    if($check[$i]==true)
    {
        $counter++;
    }
}
echo $counter;
?>