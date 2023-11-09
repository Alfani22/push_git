<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["radius"])) {
        $radius = floatval($_POST["radius"]); // Mengonversi input ke tipe float
        if ($radius >= 0) {
            $keliling = 2 * M_PI * $radius;
            $luas = M_PI * pow($radius, 2);

            echo "<h3>Hasil Perhitungan Lingkaran:</h3>";
            echo "Jari-Jari Lingkaran: " . number_format($radius, 2) . "<br>";
            echo "Keliling Lingkaran: " . number_format($keliling, 2) . "<br>";
            echo "Luas Lingkaran: " . number_format($luas, 2) . "<br>";
        } else {
            echo "Jari-Jari Lingkaran harus positif.";
        }
    } else {
        echo "Isi formulir dengan benar.";
    }
}
?>
