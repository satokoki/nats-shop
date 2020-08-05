<?php
$kuji=["大吉","中吉","小吉","末吉","凶","大凶"];
$n = rand(1,6);
 echo '<img src="img/kai.png" alt="開">';
 echo '<img src="img/un.png" alt="運">'; 
 echo '<img src="img/fuda',$n,'.png">';
 
 $num = rand(1,100);
 if($num<=10){
    $n=1; 
 }elseif($num<=30){
    $n=2; 
 }elseif($num<=60){
    $n=3;
 }elseif($num<=70){
    $n=4;
 }elseif($num<=95){
    $n=5;
 }elseif($num<=100){
    $n=6;}
 ?> 

<img src="img/fuda<?=$n?>.png">