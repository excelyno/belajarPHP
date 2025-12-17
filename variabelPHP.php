<?php
//variable adalah tempat untuk mentimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya
//di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah ubah tipe data 
// untuk membuat variable kita bisa menggunakan tanda $dolar di ikuti dengan nama variabelnya
// penamaan variable tidak boleh mengandung spasi

$nama = "Excel";
$age = 30;

echo "Name : ";
echo $nama;
echo "\numur : ";
echo $age;

//Variable Variables
// php mmemiliki kemampuan variable variable yaitu membuat variable dari string value variable
//walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas, jadi disarankan ya jangan dipakai kecuali memang perlu
//untuk membuat variable dari value variable kita bisa menggunakan $$ di ikuti dengan nama variable nya

$siapa = "aku";
$$siapa = "keren";

echo "\$siapa = ";
echo $siapa;

//jujurly bingung sama fitur ini buat apa dan kenapa harus ada


//CONSTANT
//variable di PHp sifatnya mutable, artinya kita bisa merubahnya dan bisa dirubah
// jika kita ingin membuat variable yang immutable (tidak bisa dirubah). maka tidak bisa kita lakukan di PHP
//sebagai gantinya , terdapat fitur yang namanya constant
//constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
//untuk membuat constant kita bisa menggunakan function define()
// best practice pembuatan nama constant adalah menggunakan UPPER_CASE

define("AUTHOR", "IKAN HIU YANG SUKA");
define("APP_VERSION", 100);

echo "\n";

echo AUTHOR;
echo "\n";
echo APP_VERSION;
echo "\n";