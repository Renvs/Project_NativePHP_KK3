<?php
    include 'lib/library.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis                = $_POST['nis'];
        $nama_lengkap       = $_POST['nama_lengkap'];
        $jenis_kelamin      = $_POST['jenis_kelamin'];
        $kelas              = $_POST['kelas'];
        $jurusan            = $_POST['jurusan'];
        $Alamat             = $_POST['alamat'];
        $golongan_darah     = $_POST['golongan_darah'];
        $foto               = $_FILES['foto'];

        if (!empty($foto) AND $foto ['error'] == 0) {
            $path = './media/images/';
            $upload_file = $path . basename($foto['name']);

            if(move_uploaded_file($foto['tmp_name'], $upload_file)){
                $file = $foto['name'];
            }

            if (!$upload_file) {
                flash('error', 'Gagal Upload');
                header('location: index.php');
                exit();
            }
        }

        $sql = "INSERT INTO siswa (nis, nama_lengkap, jenis_kelamin, kelas, jurusan, Alamat, golongan_darah, file)
                VALUES ('$nis', '$nama_lengkap', '$jenis_kelamin', '$kelas', '$jurusan' ,'$Alamat', '$golongan_darah', '$file')";

        $mysqli->query ($sql) or die ($mysqli->error);

        header('location: index.php');
    }

    include 'views/v_tambah.php' ;
?>
