<?php
include "connection.php";

if (isset($_POST['all'])) {
    
    $folder = "uploads/";

// Mendapatkan daftar semua file dalam folder
$files = scandir($folder);

// Loop melalui setiap file
foreach ($files as $file) {
    // Cek jika file bukan '.' atau '..' (direktori khusus)
    if ($file != "." && $file != "..") {
        // Cek ekstensi file (sesuaikan dengan ekstensi gambar yang ingin dihapus)
        $ekstensi = pathinfo($file, PATHINFO_EXTENSION);
        if (in_array(strtolower($ekstensi), ['jpg', 'jpeg', 'png', 'gif'])) {
            // Hapus file
            unlink($folder . $file);
            echo "File $file berhasil dihapus.<br>";
        }
    }
}
    
    $sql = "UPDATE absen SET keterangan = NULL, selfie = NULL, date = NULL";
    if ($db->query($sql) === TRUE){
        echo "Semua nilai dalam kolom berhasil diubah menjadi NULL";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

?>