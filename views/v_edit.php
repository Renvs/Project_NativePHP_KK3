<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $action = 'edit.php';
        if (empty($siswa)) $action = 'tambah.php';
    ?>
    <h1>Edit</h1>
    <form action="<?= $action ?>" method="POST"> 
        NIS <input readonly type="text" name="nis" value="<?= @$siswa['nis'] ?>"><br>
        Nama Lengkap <input type="text" name="nama_lengkap" value="<?= @$siswa['nama_lengkap']?>"><br>
        Jenis Kelamin <br>
            <input type="radio" name="jenis_kelamin" value="L" <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?>>Laki Laki<br>
            <input type="radio" name="jenis_kelamin" value="P" <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>>Perempuan<br>
        Kelas <br> 
            <select name="kelas">
                <option value="XI RPL 1" <?= @$siswa['kelas'] == 'XI RPL 1' ? 'selected' : '' ?>>XI RPL 1</option>
                <option value="XI RPL 2" <?= @$siswa['kelas'] == 'XI RPL 2' ? 'selected' : '' ?>>XI RPL 2</option>
                <option value="XI RPL 3" <?= @$siswa['kelas'] == 'XI RPL 3' ? 'selected' : '' ?>>XI RPL 3</option>
                <option value="XI RPL 3" <?= @$siswa['kelas'] == 'XI DKV 1' ? 'selected' : '' ?>>XI DKV 1</option>
                <option value="XI RPL 3" <?= @$siswa['kelas'] == 'XI DKV 2' ? 'selected' : '' ?>>XI DKV 2</option>
            </select>
        Jurusan <input type="text" name="jurusan" value="<?= @$siswa['jurusan']?>"><br>
        Alamat <input type="text" name="Alamat" value="<?= @$siswa['Alamat']?>"><br>
        Golongan Darah <input type="text" name="golongan_darah" value="<?= @$siswa['golongan_darah']?>"><br>
        Nama Ibu Kandung <input type="text" name="nama_ibu_kandung" value="<?= @$siswa['nama_ibu_kandung']?>"><br>
        <input type="submit" value="simpan"><br>
    </form>
</body>
</html>