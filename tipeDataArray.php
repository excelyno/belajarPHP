<?php
// Array adalah tipe data yang berisikan kosong atau banyak data
//array di PHP bisa berisikan data dengan jenis berbeda - beda
// Array di PHP memiliki panjang dinamis, artinya kita bisa menambahkan data ke Array sebanyak banyaknya, tidak dibatasi kapasitasnya


//indexing dimulai dari 0 untuk suku pertama jika ascending dan untuk desending bisa dari -1 untuk suku terakhir dan terus berkurang hingga pertama
// jadi bisa disimpulkan indexing dari array adalah panjang array (n) - 1

// $values = array(1, 2, 3, 4);
// var_dump($values);

// $names = ["excel", "ikan", "hiu"];
// var_dump($names);


//OUTPUT
// array(4) {
//   [0]=>
//   int(1)
//   [1]=>
//   int(2)
//   [2]=>
//   int(3)
//   [3]=>
//   int(4)
// }
// array(3) {
//   [0]=>
//   string(5) "excel"
//   [1]=>
//   string(4) "ikan"
//   [2]=>
//   string(3) "hiu"
// }
// jadi akan muncul panjang array seperti array(4) dan akan di tuliskan indexingnya dan panjang dari string

//OPERASI DALAM ARRAY
//dalam array kita bisa mengoperasikan beberapa operasi seperti
//$array[index] => mengakses data di array pada nomor index
//$array[index] => mengubah data di array pada nomor index dengan value baru
//$array[] = value => menambah data di array pada posisi paling belakang
//unset($array[index]) => menghapus data di array, index otomatis hilang dari array
//count($array) => mengambil total data di array

// $valuess = ["ikan", "lost", "control"];
// var_dump($valuess[0]);

// $valuess[0] = "HIU";
// var_dump($valuess);

// unset($valuess[1]);
// var_dump($valuess);

// $valuess[] ="YANTO";
// var_dump($valuess);

// var_dump(count($valuess));

//OUTPUT 
// string(4) "ikan" => mengambil index pertama yaitu ikan


// array(3) { 
//   [0]=>
//   string(3) "HIU"
//   [1]=>
//   string(4) "lost"
//   [2]=>
//   string(7) "control"
// } => mengubah index 0 yang awalnya ikan menjadi HIU


// array(2) {
//   [0]=>
//   string(3) "HIU"
//   [2]=>
//   string(7) "control"
// } => unset atau tidak set index 1 sehingga tidak ditampilkan 



// array(3) {
//   [0]=>
//   string(3) "HIU"
//   [2]=>
//   string(7) "control"
//   [3]=>
//   string(5) "YANTO"
// } => hasil inset masih ada dan menambahkan data baru yaitu yanto yang menempati index 3


// int(3) => karena 1 unset sehingga awalnya 3 terus dikurangi 1 (unset) dan ditambah 1 lagi (menambahkan nilai baru diakhir) = 3 panjang arraynya 

//biasanya kebanyakan bahasa pemrograman, terdapat tipe data bernama map yaitu asosiasi antara key dan value;
//namun di PHP, Map bisa dibuat menggunakan Array
//Secara default array akan menggunakan index(number) sebagai key dan value nya kita bisa bebas memasukkan data ke dalam array
//namun jika kita ingin kita juga bisa mengubah index nya tidak harus menggunakan number, bisa gunakan tipe data lain, seperti string msialnya
//hal tersebut seperti map di bahasa pemrograman lain

$excel = array (
    "id" => "excel",
    "name" => "Excelyno suka hiu",
    "ages" => "30"
);
var_dump($excel);
