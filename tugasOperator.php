//TUGAS1

//Lengkapi script berikut ini untuk menampilkan hasil bagi bilangan
//100 dengan 3 beserta sisanya

$bilangan= 100;
$pembagi = 3;

$hasilbagi = $bilangan / $pembagi;
$sisabagi = $bilangan % $pembagi;

echo "hasilbagi: " . $hasilbagi . "<br>";
echo "sisabagi: " . $sisabagi . "<br>";

<?php

//Ada seorang masalah yamg menabung di bank x dengan saldo awal Rp.1.000.000,-.
//Bank x menerapkan bunga 3% perbulan  saldo awal tabungan. Hitunglah jumlah saldo akhir
//nasabah tersebut setelah 11 bulan. Lengkapilah script berikut ini untuk menyelesaikan masalah tersebut.  

$saldo_awal = 1000000;
$bunga = 0.03;
$bulan = 11;

$saldoakhir = $saldoawal + ($saldoawal * $bunga * $bulan);

echo "Saldo akhir setelah 11 bulan: Rp. " . $bulan."bulan adalah : " . $saldoakhir.",";

