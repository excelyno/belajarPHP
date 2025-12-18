<?php
$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75){
    echo "anda lulus";

}elseif ($nilai <75 && $absen >= 75){
    echo "ya belajar yang bener kocak";
} else {
    echo "latihan lagi deck";
}