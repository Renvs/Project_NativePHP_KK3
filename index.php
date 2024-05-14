<?php 
    include 'lib/library.php';

    checkLogin();

    $search = trim($_GET['search'] ?? '');
    $sort = trim($_GET['sort'] ?? '');
    $order = strtoupper($_GET['order'] ?? '') === 'DESC' ? 'DESC' : 'ASC';

    $query = "SELECT * FROM siswa";

    if ($search) {
        $query .= " WHERE (nis LIKE ? OR nama_lengkap LIKE ? OR nama_ibu_kandung LIKE ? OR Alamat LIKE ?) ";
        $params = ["%$search%", "%$search%", "%$search%", "%$search%"];
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param(str_repeat("s", count($params)), ...$params);
    } else {
        $stmt = $mysqli->prepare($query);
    }

    if ($sort) {
        $query .= " ORDER BY $sort $order";
        $stmt = $mysqli->prepare($query);
    }

    $stmt->execute();

    $listSiswa = $stmt->get_result();

    include 'views/v_index.php';
?>  

