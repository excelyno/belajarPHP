<?php
//terkadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statement lalu jika benar kita ingin memberi nilai terhadap variable dengan nilai X dan jika salah dengan nilai Y
//Penggunaan if statement apda kasus seperti bisa dipersingkat menggunakan ternary operator
// ternary operator menggunakan kata kunci? dan :

$gender = "PRIA";
$hi = $gender == "PRIA" ? "Hi bro" : "Hi nona";
echo $hi;