<?php

// Soal keempat: Buatlah pemograman PHP untuk memeriksa apakah sebuah kata atau kalimat yang dimasukkan merupakan kata atau kalimat palindrom atau tidak. Berikut adalah contoh pemogramannya:

$kataPertama = "aibohphobia";
$kataKedua = "autophile";

if (strrev($kataPertama) == $kataPertama) {
    echo "$kataPertama merupakan kata atau kalimat palindrom.";
} else {
    echo "$kataPertama bukan merupakan kata atau kalimat palindrom.";
}
echo "\n";

if (strrev($kataKedua) == $kataKedua) {
    echo "$kataKedua merupakan kata atau kalimat palindrom.";
} else {
    echo "$kataKedua bukan merupakan kata atau kalimat palindrom.";
}
echo "\n";