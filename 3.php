<html>
<head>
    <title>Mendefinisakan dan memanggil fungsi</title>
</head>
<body>


<?php
function judul(){
    echo "<h2> Demo Ke-1 Mendefinisikan ".
    " dan memanggil fungsi</h2>";
}

function gabungString($kiri, $kanan){
    return $kiri.$kanan;
}
$str1 = "ini adalah ";
$str2 = "kalimat lengkap.";

$hasil = gabungString($str1, $str2);

judul();

echo "$str1 : $str1<br />";
echo "$str2 : $str2<br />";
echo "setelah digabung : $hasil";
?>
</body>
</html>