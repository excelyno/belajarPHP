<?php


// di PHP terdapat 2 jenis tipe data number.
// int bilangan bulat decimal (base 10). hexadecimal (base16) octa (base 9) dan binary (base 2) dan 

// float = bilangan pecahan

// di php kita bisa menambahkan _ (garis bawah) di angka, ini hanya untuk agar mudah dibaca, saat dijalankan. _(garis bawah_ tersebut akan di ignore

// untuk angka negatif kita bisa menggunakan minus (-) di depan angka


//vardump ini buat dump data. jdi cuma buat tau datanya itu apa di php

//tipe data number
echo "Decimal   :   ";
var_dump(1234);
echo "Octal     :   ";
var_dump(0123);
echo "Hexadecimal:   ";
var_dump(0x1A);
echo "Binary    :   ";
var_dump(0B111111111);
echo "Underscore di Number :   ";
var_dump(1_234_567);

//tipe data Floating Point

echo "Floating Point :  ";
var_dump(1.234);
echo "Floating Point dengan E notation Plus (1.2 x 1000):  ";
var_dump(1.2e3);
echo "Floating Point dengan E notation minus (7 x 0.001) :  ";
var_dump(7e-3);
echo "underscore di floating point :  ";
var_dump(1_234.567);