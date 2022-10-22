<?php
$i = array(1, 2, 3, 4, 5);
print_r($i);
$data = 7;
//mencari index array dari data
if (($cari = array_search($data, $i)) == NULL) {
    $cari = "-1";
    echo "<br>";
    echo "Data yang di cari index nya : " . $data;
    echo "<br>";
    echo "Hasil : " . $cari;
} else {
    echo "<br>";
    echo "Data yang di cari index nya : " . $data;
    echo "<br>";
    echo "Hasil : " . $cari;
}


//mencari data lomba kuda 
$jumlah = 25;
$i      = 5; //jumlah kuda dalam 1 sesi

$sesi = $jumlah / $i;

echo "<br>";
echo "<br>";
echo "Jumlah Peserta : " . $jumlah;
echo "<br>";
echo "Kouta Perserta / Sesi : " . $i;
echo "<br>";
echo "Maka sesi lomba dilakukan : " . $sesi;


//untuk kuda tercepat bisa di catat persesi mana yang tercepat dari 5 kandidiat/sesi
$x = array("Sesi1" => 30, "Sesi2" => 35, "Sesi3" => 20, "Sesi4" => 15, "Sesi5" => 23);
asort($x);
echo "<br>";
print_r($x);
