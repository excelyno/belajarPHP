<?php
//OPERATOR PENUGASAN
//operator penugasan di PHP sama seperti bahsa pemrograman lain, yaitu dengan menggunakan karakter = (sama dengan)
//operator penugasan sudah sering digunakan, terutama ketika mengubah value sebuah variable
//Namun selain hal itu, operasi penugasan juga bisa digunakan untuk operasi aritmatika

//Operator penugasan
// $a += $b  => $a + $b
// $a -= $b  => $a - $b
// $a *= $b  => $a * $b
// $a /= $b  => $a / $b
// $a %= $b  => $a % $b


$total = 0;
$fruit = 10000;
$chicken = 35000;
$orangeJuice = 1000;
$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total);

//OUTPUT = int(46000)