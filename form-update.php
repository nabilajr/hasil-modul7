<?php

    include '../connect.php';

    $id_dosen = $_GET['id'];
    
    $query = "SELECT * FROM dosen WHERE id = $id_dosen";

    $result = mysqli_query($connect, $query);

    $row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
    <body>
    <h2> Form Update</h2>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td><label for="nama">Nama Dosen</label></td>
                    <td>:</td>
                    <td><input value="<?php echo $row['nama_dosen']; ?>" 
                        type="text" name="nama_dosen" id="nama"></td>
                </tr>
                <tr>
                    <td><label for="no_telp">No. Telepon</label></td>
                    <td>:</td>
                    <td><input value="<?php echo $row['telp']; ?>" 
                        type="text" name="telp" id="no_telp"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input value="<?php echo $row['id']; ?>"
                        type="hidden" name="id"></td>
                    <td><input type="submit" value="Simpan" name="btnSimpan"></td>
                </tr>
            </table>
        </form>

            