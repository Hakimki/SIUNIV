<?php

include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="create.php" method="POST">
        <fieldset>
            <legend><h1>Tambah Data Mata Kuliah</h1></legend>
            <p>
                <label>Kode:</label>
                <input type = "text" name="kode" />
</p>
            <p>
                <label>Matakuliah</label>
                <input type ="text" name="nama_matkul"/>
</p>
<p>
                <label>SKS:</label>
                <input type ="text" name="sks"/>
</p>
<p>
                <label>Semester:</label>
                <input type ="text" name="semester"/>
</p>
<p>
                <label>Dosen Pengajar</label>
                <select name="id_dosen" id="nama_dosen">
                    <option vJHHBJHJHJHalue= "-">---Pilih Salah Satu---</option>
                    <?php
                    while ($data = mysqli_fetch_assoc($result)){
                        ?>
                        <option value ="<?php echo $data['id_dosen'];?>">
                        <?php echo $data['nama_dosen'];?>
                    </option>
                    <?php
                    }
                    ?>
</select>

</p>
<p>
                <input type ="submit" name="button" value="Simpan"/>
</p>
</fieldset>
</form>



    
</body>
</html>
