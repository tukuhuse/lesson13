<?php

//strip_tags
$html='<h1>Tech Boost</h1><p>kadai</p>';

//第2引数省略で全てのtagを削除
echo strip_tags($html) . "\n";
//第2引数に<h1>を指定したことで、<h1>tagのみ残る
echo strip_tags($html,'<h1>') . "\n";

//array_push
$arr=array(1,2);

array_push($arr,3,4,5);
print_r($arr);

//array_merge
$arr1=array(1,2);
$arr2=array(3,4);

$result=array_merge($arr1,$arr2);
print_r($result);

//time,mktime,date
//timeは現在時刻を取得する関数
//dateは時刻型を特定の書式に変換する関数
echo date('Y/m/d h:i',time()) . "\n";
//mktimeは指定された時刻の時刻型データを生成する関数
$tomorrow=mktime(0,0,0,date("m",time()),date("d",time())+1,date("Y",time()));
echo date('l',$tomorrow) . "\n";