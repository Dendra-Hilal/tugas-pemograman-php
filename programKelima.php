<?php

// Soal kelima: Buatlah pemograman PHP untuk memeriksa apakah sebuah tahun yang dimasukkan merupakan tahun kabisat atau bukan. Berikut adalah contoh pemogramannya:

$tahunPertama = 2004;
$tahunKedua = 2005;

if (($tahunPertama % 4 == 0 && $tahunPertama % 100 != 0) || $tahunPertama % 400 == 0) {
    echo "$tahunPertama termasuk ke dalam tahun kabisat.";
} else {
    echo "$tahunPertama bukan termasuk ke dalam tahun kabisat.";
}
echo "\n";

if (($tahunKedua % 4 == 0 && $tahunKedua % 100 != 0) || $tahunKedua % 400 == 0) {
    echo "$tahunKedua termasuk ke dalam tahun kabisat.";
} else {
    echo "$tahunKedua bukan termasuk ke dalam tahun kabisat.";
}
echo "\n";