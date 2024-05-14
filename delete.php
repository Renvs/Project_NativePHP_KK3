<?php 
    include 'lib/library.php';
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET' ) {
        $nis = $_GET['nis'];
        
        $sql = "DELETE FROM siswa WHERE nis = '$nis' ";
    
        if ($mysqli->query($sql)) {
            echo 1;
        } else {
            echo 0;
        }
    }
    // Redirect to index.php if accessed directly
    header('location: index.php');
    exit;
?>
