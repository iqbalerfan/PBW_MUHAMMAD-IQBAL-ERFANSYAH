<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai</title>
</head>
<body>
    <h2>Form Penilaian Mahasiswa</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama"><br><br>
        Nilai: <input type="number" name="nilai"><br><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        $predikat = "";
        $status = "";

        if ($nilai >= 80) {
            $predikat = "A";
        } elseif ($nilai >= 70) {
            $predikat = "B";
        } elseif ($nilai >= 60) {
            $predikat = "C";
        } elseif ($nilai >= 50) {
            $predikat = "D";
        } else {
            $predikat = "E";
        }

        $status = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";

        echo "<h3>Hasil:</h3>";
        echo "Nama : $nama <br>";
        echo "Nilai : $nilai <br>";
        echo "Predikat : $predikat <br>";
        echo "Status : $status <br>";
    }
    ?>
</body>
</html>
