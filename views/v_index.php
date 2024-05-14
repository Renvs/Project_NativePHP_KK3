<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        /* border: 1px solid; */
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100svh;
    }

    .data_siswa {
        position: fixed;
        flex-direction: column;
        min-width: 98%;
        top: 120px;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        height: 70px;
        position: fixed;
        top: 50px;
        gap: 105px;
    }

    .tambah_data {
        margin: 0 0 0 10px;
    }

    .tambah_data a {
        font-weight: 500;
        font-size: 15px;
    }

    .search_bar input {
        height: 37px;
        width: 250px;
        padding: 0 10px;
        border: 1px solid transparent;
        transition: border-color .3s, padding .3s;
        text-align: left;
    }

    .Logout {
        margin: 0 10px 0 0;
    }

    .list_data {
        display: flex;
        justify-content: center;
        margin-top: 10px;
        padding: 10px;
    }

    thead {
        text-align: center;
        font-weight: 400;
    }

    tbody {
        text-align: center;
    }

    tbody td {
        text-align: center;
        vertical-align: middle;
    }

    .edit_btn {
        text-decoration: none;
    }
</style>

<body>
    <div class="data_siswa">
        <div class="navbar">
            <div class="tambah_data">
                <a href="tambah.php" class="btn btn-dark" role="button"><i class="bi bi-plus-circle-fill"></i> Tambah Data</a>
            </div>
            <div class="search_bar">
                <form method="GET" action="index.php" class="d-inline">
                    <input type="text" name="search" value="<?= @$search ?>" class="rounded border border-4-primary-subtle btn btn-outline-light" placeholder="Search">
                    <button type="submit" class=" btn btn-primary">Cari</button>
                </form>
            </div>
            <h2><strong>List Siswa SMKN 4 Bandung</strong></h2>

            <div class="reset">
                <a href="index.php" class="btn btn-warning ">Reset</a>
            </div>

            <div class="Logout">
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
        <div class="list_data">
            <table class="table table-striped table-hover rounded">
                <thead>
                    <tr class="table-active">
                        <th>Foto</th>
                        <th>
                            NIS
                            <a href="index.php?sort=nis&order=asc"><i class="bi bi-caret-up-fill"></i></a>
                            <a href="index.php?sort=nis&order=desc"><i class="bi bi-caret-down-fill"></i></a>
                        </th>
                        <th>
                            Nama Lengkap
                            <a href="index.php?sort=nama_lengkap&order=asc"><i class="bi bi-caret-up-fill"></i></a>
                            <a href="index.php?sort=nama_lengkap&order=desc"><i class="bi bi-caret-down-fill"></i></a>
                        </th>
                        <th>
                            Jenis Kelamin
                            <a href="index.php?sort=jenis_kelamin&order=asc"><i class="bi bi-caret-up-fill"></i></a>
                            <a href="index.php?sort=jenis_kelamin&order=desc"><i class="bi bi-caret-down-fill"></i></a>
                        </th>
                        <th>
                            Kelas
                            <a href="index.php?sort=kelas&order=asc"><i class="bi bi-caret-up-fill"></i></a>
                            <a href="index.php?sort=kelas&order=desc"><i class="bi bi-caret-down-fill"></i></a>
                        </th>
                        <th>
                            Jurusan
                            <a href="index.php?sort=jurusan&order=asc"><i class="bi bi-caret-up-fill"></i></a>
                            <a href="index.php?sort=jurusan&order=desc"><i class="bi bi-caret-down-fill"></i></a>
                        </th>
                        <th>
                            Alamat
                            <a href="index.php?sort=alamat&order=asc"><i class="bi bi-caret-up-fill"></i></a>
                            <a href="index.php?sort=alamat&order=desc"><i class="bi bi-caret-down-fill"></i></a>
                        </th>
                        <th>
                            Golongan Darah
                            <a href="index.php?sort=golongan_darah&order=asc"><i class="bi bi-caret-up-fill"></i></a>
                            <a href="index.php?sort=golongan_darah&order=desc"><i class="bi bi-caret-down-fill"></i></a>
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = 1;
                    while ($siswa = $listSiswa->fetch_array()) {
                    ?>
                        <tr>
                            <td>
                                <?php if (!empty($siswa['file'])) { ?>
                                    <img width="70px" src="<?= base_url() ?>/media/images/<?= $siswa['file'] ?>" alt="">
                                <?php } else { ?>
                                    <i class="bi bi-file-earmark-image"></i>
                                <?php } ?>
                            </td>
                            <td style="text-align: left;"><?= $siswa['nis'] ?></td>
                            <td><?= $siswa['nama_lengkap'] ?></td>
                            <td><?= $siswa['jenis_kelamin'] ?></td>
                            <td><?= $siswa['kelas'] ?></td>
                            <td><?= $siswa['jurusan'] ?></td>
                            <td><?= $siswa['Alamat'] ?></td>
                            <td><?= $siswa['golongan_darah'] ?></td>
                            <td>
                                <a class="btn btn-outline-success" href="edit.php?nis=<?= $siswa['nis'] ?>"><i class="bi bi-pencil-fill"></i></a>
                                <form action="delete.php" method="GET" class="d-inline">
                                    <input type="hidden" name="nis" value="<?= $siswa['nis'] ?>">
                                    <button class="btn btn-warning btnDelete" type="submit"><i class="bi bi-trash3-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php $nama = $siswa['nama_lengkap'] ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"></h4>
                </div>

                <div class="modal-body">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnHapus" data-url="<?= base_url() ?>delete.php?nis=<?= $siswa['nis'] ?>" data-nis="<?= $siswa['nis'] ?>">Ya</button>
                    <button type="button" class="btn btn-danger" id="btnBatal" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Ajax -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(".btnDelete").click(function(e) {
            e.preventDefault();

            var nama = $(this).parent().parent().find('td:eq(3)').text();
            var nis = $(this).parent().parent().find('td:eq(2)').text();
            var url = "delete.php?nis=" + nis;

            $(".modal").modal('show');
            $(".modal-title").html('Konfirmasi');
            $(".modal-body").html('Anda Yakin Ingin Menghapus Data <b>' + nama + '</b> ?');

            $("#btnHapus").off('click').on('click', function() {
                // Pass url and nis as arguments to hapusData
                hapusData(url, nis);
            });

            $('#btnBatal').on('click', function() {
                $('.modal').modal('hide');
            });
        });

        function hapusData(url, nis) {
            $.get(url, {
                nis: nis
            }, function(data) {
                console.log("success:", data);
                console.log('link   : ' + url);
                console.log('NIS    : ' + nis);

                if (data.status == 'success') {
                    $("#" + nis).remove(); // Remove the deleted row using the NIS as ID
                    toastr.success('Data berhasil dihapus');
                } else {
                    toastr.error('Gagal menghapus data', 'Error');
                }
            }).done(function() {
                $('.modal').modal('hide');
            });
        }
    </script>
</body>

</html>