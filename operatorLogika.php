<?php
//Operator Logika
//$a && $b => and => true jika keduanya true
//$a and $b => and => true jika keduanya true
//$a  || $b => or => true jika $a dan $b salah satunya true atau kedua duanya true
// $a or $b => or => true jika salah satunya true atau keduanya
//!$a => not => true jika nilai $a = false
//$a xor $b => xor => true jika salah satu true namun tidak keduanya

var_dump(true && true); //bool (true)
var_dump(true && false); //bool (false)
var_dump(true || false);// bool (true)
var_dump(true xor true);// bool (false)
var_dump(!true); // bool (false)