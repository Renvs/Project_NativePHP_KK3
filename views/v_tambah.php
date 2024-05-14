<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 50px;
            border-radius: 30px;
            background-color: azure;
            box-shadow: -1px 1px 32px -2px rgba(0, 0, 0, 0.56);
            -webkit-box-shadow: -1px 1px 32px -2px rgba(0, 0, 0, 0.56);
            -moz-box-shadow: -1px 1px 32px -2px rgba(0, 0, 0, 0.56);
        }
    </style>
</head>

<body>
    <?php
    $url = "tambah.php";
    $action = "tambah.php";
    if (!empty($siswa)) $action = "edit.php";
    ?>
    <div class="form-container">
        <h1 class="text-center mb-4">Tambah Data</h1>
        <form action="<?php echo $url ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">  
                <label for="nis" class="form-label">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" required>
            </div>
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_l" value="L">
                    <label class="form-check-label" for="jenis_kelamin_l">Laki-Laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_p" value="P">
                    <label class="form-check-label" for="jenis_kelamin_p">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <select name="kelas" id="kelas" class="form-select">
                    <option value="XI RPL 1" <?= @$siswa['kelas'] == 'XI RPL 1' ? 'selected' : '' ?>>XI RPL 1</option>
                    <option value="XI RPL 2" <?= @$siswa['kelas'] == 'XI RPL 2' ? 'selected' : '' ?>>XI RPL 2</option>
                    <option value="XI RPL 3" <?= @$siswa['kelas'] == 'XI RPL 3' ? 'selected' : '' ?>>XI RPL 3</option>
                    <option value="XI DKV 1" <?= @$siswa['kelas'] == 'XI DKV 1' ? 'selected' : '' ?>>XI DKV 1</option>
                    <option value="XI DKV 2" <?= @$siswa['kelas'] == 'XI DKV 2' ? 'selected' : '' ?>>XI DKV 2</option>
                    <option value="XI TJKT 1" <?= @$siswa['kelas'] == 'XI TJKT 1' ? 'selected' : '' ?>>XI TJKT 1</option>
                    <option value="XI TJKT 2" <?= @$siswa['kelas'] == 'XI TJKT 2' ? 'selected' : '' ?>>XI TJKT 2</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form-select">
                    <option value="RPL" <?= @$siwa['jurusan'] == 'RPL' ? 'selected' : '' ?>>RPL</option>
                    <option value="DKV" <?= @$siwa['jurusan'] == 'DKV' ? 'selected' : '' ?>>DKV</option>
                    <option value="TJKT" <?= @$siwa['jurusan'] == 'TJKT' ? 'selected' : '' ?>>TJKT</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="golongan_darah" class="form-label">Golongan Darah</label>
                <select name="golongan_darah" id="golongan_darah" class="form-select">
                    <option value="A" <?= @$siswa['golongan_darah'] == 'A' ? 'selected' : '' ?>>A</option>
                    <option value="B" <?= @$siswa['golongan_darah'] == 'B' ? 'selected' : '' ?>>B</option>
                    <option value="O" <?= @$siswa['golongan_darah'] == 'O' ? 'selected' : '' ?>>O</option>
                    <option value="AB" <?= @$siswa['golongan_darah'] == 'AB' ? 'selected' : '' ?>>AB</option>
                </select>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-6">
                    <?php if ($action == "tambah.php") { ?>
                        <img src="<?php echo empty($siswa['file']) ? "assets/viureth-favicon-color.png" : '/assets' . $siswa['file']; ?>" width="100px" height="100px" id="output" class="m-3">
                    <?php } ?>
                    <input type="file" name="foto" autocomplete="off" class="form-control" onchange="loadThumbnail(event)" value="<?php echo @$result->file?>">
                </div>
            </div>
            <input type="submit" value="simpan" class="btn btn-primary mt-3">
        </form>
    </div>

    <script>
        function loadThumbnail(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
</body>
</html>
            

