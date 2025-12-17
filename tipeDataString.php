<?php
//tipe data string adalah tipe data representasi dari teks
// string bisa mengandung kosong atau banyak karakter

// single Quote
//untuk membuat string di PHP, kita bisa menggunakan single quote

echo 'Nama: ';
echo 'Excel suka makan ikan dengan segalanya ';

//double quote
//selain single quote kita juga bisa menggunakan double quote. salah satu kelebihan menggunakan double quote adalah, kita menggunakan escape sequwnce untuk beberapa hal seperti \n untuk enter dan \t untuk tab\" untuk double quote dan lain lain

echo 'Nama : ';
echo 'excel suka ikanhiu';
echo "\n";

echo "Nama : ";
echo "excel \t suka\t ikanhiu\n";


//karena menggunakan \n terlalu lama. maka kita ada sistem heredoc.
echo <<<IKAN
ini adalah heredoc. 
perkenalkan nama saya excel dan saya suka memakan ikan hiu
jujur ikan hiu itu ikan yang seram
tapi ya ga menutup kemungkinan juga sih
yaudh sih yapping aja
hehe
IKAN;