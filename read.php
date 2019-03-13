<?php
    include '../connect.php';

    $query ="SELECT * FROM dosen";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result);
?>

<body>
    <table border='1'>
        <h2>Data dosen</h2>
        <tr>
            <th>No.</th>
            <th>Nama Dosen</th>
            <th>Telepon</th>
            <th>Aksi</th>
            <th>Delete</th>
        </tr>
<?php
    if($num > 0)
    {
        $no = 1;
        while($data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $data['nama_dosen'] . "</td>";
            echo "<td>" . $data['telp'] . "</td>";
            echo "<td><a href='form-update.php?id=" . $data['id'] . "'>Edit</a> | ";
            echo "<td><a href='delete.php?id=" . $data['id'] . "'onclick='return confirm(\"apakah anda ingin menghapus data?\")'>Hapus</a></td>";
            echo "</tr>";
            $no++;
        }
    }
    else
    {
        echo "<td colspan='3'>Tidak ada</td>";
    }
?>
    </table>