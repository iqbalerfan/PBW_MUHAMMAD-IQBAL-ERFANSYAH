<?php
include 'menu.php';

$jumlah_roda = 2;

switch ($jumlah_roda) {
    case 2:
        echo "<p>Kendaraan adalah Sepeda Motor</p>";
        break;
    case 3:
        echo "<p>Kendaraan adalah Bajaj</p>";
        break;
    case 4:
        echo "<p>Kendaraan adalah Mobil</p>";
        break;
    default:
        echo "<p>Jenis kendaraan tidak diketahui</p>";
}
?>