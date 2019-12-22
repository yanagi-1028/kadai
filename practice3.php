<?php

function a($num){
    $result = 0;
    $result += $num * 2;
    return $result;
}
echo a(17);
echo "\n";

function f($a, $b){
    $result = 0;
    $result += $a + $b;
    return $result;
}
echo f(11,10);
echo "\n";


function num($arr){
    $result = $arr[0];
    for($i = 1; $i < count($arr); $i++){
        $result *= $arr[$i];
    }
    return $result;
}
echo num(array(1,3,5,7,9));
    echo "\n";
    
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     }
 }
 return $max_number;
 }
 
 echo max_array(array(8,1,9,2,4,13,10));
 echo "\n";
 
 $str = "<h1>関数　課題</h1>"
  . "<p>取り除き</p>";
echo strip_tags($str) ."\n";

$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
 
print_r($fruits);

$arr1 = [1,2,3];
$arr2 = [10,20,30];
$arr3 = [100,200,300];
$arr = array_merge($arr1, $arr2, $arr3);

print_r($arr);

$timestamp = time();
echo $timestamp."\n";

echo date("Y年m月d日　H時i分s秒")."\n";

$timestamp = mktime(9,12,30,10.28);
echo $timestamp."\n";

