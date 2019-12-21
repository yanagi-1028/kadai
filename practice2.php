<?php
$name = "takayuki";
if($name == "takayuki"){
    echo "私はあなたの名前です";
   }else{
    echo "あなたの名前ではありません。";
}
echo "\n";

$num = 0;
for ($i = 0; $i <= 10000; $i++){
    $num += $i;
}
echo $num;
echo "\n";

$fruits = array("apple","cherry","pine","grape","kiwi");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){

  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
