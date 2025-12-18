<?php
//OPERATOR PERBANDINGAN
//operator perbandingan seperti namanya, digunakann untuk membandingkan dua buah value
//hasil dari operator perbandignan adalah boolean, true jika perbandingannya benar, false jika perbandingannya salah

//perbandingan 1
// $a == $b => sama dengan => true jika $a sama dengan $b setelah dilakukan konversi tipe data
// $a === $b => identik => true jika $a sama dengan $b dan memiliki tipe data yang sama
//$a != $b => tidak sama dengan => true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
// $a <>$b => tidak sama dengan => true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data

//perbandingan 2
//$a !== $b => tidak identik => true jika $a tidak sama dengan $b atau tidak sama tipe data
//$a < $b => kurang dari => true jika $a kurang dari $b
// $a <= $b => kurang dari atau sama dengan => true jika $a kurang dari atau sama dengan $b 
// $a >$b => lebih dari => true jika $a lebih dari $b
// $a >= $b => lebih dari sama dengan => true jika $a lebih dari atau sama dengan $b 

var_dump("10" == 10);//bool = true
var_dump("10" === 10);//bool = false

var_dump(10 == 9); //bool = false
var_dump(10 >= 10); // bool = true

