<?php

include '../connect.php';

$kode = $_GET['kode'];
$query ="DELETE FROM matakuliah WHERE kode = '$kode'";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if($num > 0){
    echo "Berhasil Hapus data <br>";

}
else {
    "gagal hapus Data <br>"
}
echo " <a href = 'read.php'>Lihat Data</a>";

?>