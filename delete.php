<?php

include '../connect.php';

$id_dosen = $_GET['id'];

$query = "DELETE FROM dosen WHERE id = $id_dosen";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
    echo "Berhasil Hapus Data <br>";
}
else
{
    echo "Gagal Hapus Data <br>";
}

echo "<a href='read.php'>Lihat Data</a>";
?>