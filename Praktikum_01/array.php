<?php
// buat array
$binatangs = ["Kucing", "Ayam", "Ikan", "Burung"];
//tampilin kocheng
echo $binatangs[0] . "<br>";
//tampilin buwung puyoh
echo $binatangs[3] . "<br>";
//tampilin ayam
echo $binatangs[1] . "<br>" . "<hr>";

// looping array
foreach ($binatangs as $binatang) {
    echo $binatang . "<br>";
}
echo "<hr>";
// buat aray asosiatif
$mahasiswa = ["nama"=>"Ardh Nur Syah Ramadhan", "umur"=>21, "alamat"=>"Jakarta Utara"];

echo $mahasiswa["nama"] . "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " = ".$value;
    echo "<br>";
}
echo "<br>";

// Buat array multidimensi
$dosen = [
    ["Rojul", "Pemweb"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "Jarkom"]
];

echo $dosen[0][1];
echo "<br>";

foreach ($dosen as $dsn){
    echo "Nama Dosen: ". $dsn[0] . "<br>";
    echo "Matkulnya adalah: ". $dsn[1];
    echo "<br>";
}
?>