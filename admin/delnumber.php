<?php

include "connection.php";

if (isset($_POST['kirim'])){
    // Hapus file gambar jika ada
    $absen = $_POST['absen'];
    
    $sql_gambar = "SELECT selfie FROM absen WHERE noabsen = '$absen'";
    $stmt_gambar = $db->query($sql_gambar);
    //$stmt_gambar->execute();
    //$result = $stmt_gambar->get_result();
    $row = $stmt_gambar->fetch_assoc();
    $selfie = $row['selfie'];
    $folder_gambar = "uploads/" . $selfie;

    if ($stmt_gambar->num_rows > 0) {
        
        if (file_exists($folder_gambar)) {
            unlink($folder_gambar);
        } 

        if (file_exists($folder_gambar)){
            echo "Data berhasil dihapus, tetapi file gambar tidak ditemukan.";
            
        } else {
            echo "Data dan file gambar berhasil dihapus.";
        
        }
    } else {
        echo "Data tidak ditemukan.";
    }

    $absen = $_POST['absen'];
    
    $sql_update = "UPDATE absen SET keterangan = '', selfie = '', date = NULL WHERE noabsen = '$absen'";
    if ($db->query($sql_update) === TRUE) {
        echo "Data absen berhasil di-reset.";
    } else {
        echo "Error: " . $sql_update . "<br>" . $db->error;
    }
}

//if(isset($_POST(['all']))) {
//    
//    sql = "UPDATE absensi SET keterangan = '', selfie = ''";
//
//}





?>