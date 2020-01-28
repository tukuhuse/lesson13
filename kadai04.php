<?php

function max_array($arr) {
  //とりあえず配列の最初の要素を1番大きい値とする
  $max_number = $arr[0];
  foreach( $arr as $a ) {
    //if文を使う場合
    if( $max_number < $a ) {
      $max_number=$a;
    }
    //三項演算を使う場合
    $max_number = ($max_number<$a) ? $a : $max_number;
  }
  return $max_number;
}

echo max_array(array(3,1,5,2,4)) . "\n";