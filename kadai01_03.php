<?php

//課題01
function double( $num ) {
  $result=2*$num;
  return $result;
}

//課題02
function sum( $a , $b ) {
  $result=$a+$b;
  return $result;
}

//課題03
function products( $arr ) {
  $result=1;
  
  foreach( $arr as $a ) {
    $result*=$a;
  }
  return $result;
}

echo double(25) . "\n";
echo sum(7,8) . "\n";
echo products(array(1,2,3,4,5)) . "\n";