<?php
//OPERATOR ARITMATIKA
//+$variable => positif
//-$variable => negatif

//$variable + $variable =  penambahan
//$variable - $variable = pengurangan
//$variable * $variable = perkalian
//$variable / $variable = pembagian

//$variable % $variable => sisa bagi
//$variable ** $variable => pangkat

$result1 = 10 + 10;
var_dump($result1);

//output : int(20)

$result2 = 100 % 3;
var_dump($result2);
//output : int (1)

$resultNegative = -$result1;
var_dump($resultNegative);
//output : int (-20)

$resultPositif = +$result1;
var_dump($resultPositif);