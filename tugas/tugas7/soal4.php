<?php
include 'menu.php';

$angka = 7;

$jenis = ($angka % 2 == 0) ? "Genap" : "Ganjil";

echo "<p>Angka $angka adalah $jenis.</p>";
?>