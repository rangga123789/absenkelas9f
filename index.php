<?php

//include "php/code.php";
 include "connection/connection.php";

    $notification = "";
    error_reporting();
    // Sembunyikan semua error dari halaman
    ini_set('display_errors', 0);


    if(isset($_POST['kirim'])) {
    $noabsen = $_POST['noabsen'];
    $keterangan = $_POST['keterangan'];
    $imageData = $_FILES['file']['tmp_name'];


    $sql = "SELECT * FROM absen WHERE noabsen = $noabsen";
    $result = $db->query($sql); 
    if($result->num_rows > 0) { 
      //$sql_update = "UPDATE absen SET keterangan = '$keterangan' WHERE noabsen = $noabsen"; 
      if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $imageData = $_FILES['file']['tmp_name'];
        $target_dir = "admin/uploads/"; // Sesuaikan dengan direktori tujuan
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Periksa ekstensi file (sesuaikan dengan kebutuhan)
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $notification = "Hanya file JPG, JPEG, dan PNG yang diizinkan.";
        } else {
    
          // Pindahkan file ke direktori tujuan
    $sql_gambar = "SELECT selfie FROM absen WHERE noabsen = '$noabsen'";
    $stmt_gambar = $db->query($sql_gambar);
    //$stmt_gambar->execute();
    //$result = $stmt_gambar->get_result();
    $row = $stmt_gambar->fetch_assoc();
    $selfie = $row['selfie'];
    $folder_gambar = "admin/uploads/" . $selfie;



if ($stmt_gambar->num_rows > 0) {
  if (file_exists($folder_gambar)) {
    unlink($folder_gambar);
  }

  } else {
  echo "Data tidak ditemukan.";
}
        
            if (move_uploaded_file($imageData, $target_file)) {
                $selfie = basename($_FILES["file"]["name"]);

                // Lanjutkan dengan query update
                
                // ... (sisanya kode Anda)
            } else {
                $notification = "Maaf, terjadi kesalahan saat mengunggah file.";
            }
        }
        $sql_update = "SELECT * FROM input WHERE masukan = '$keterangan'";
                $result = $db->query($sql_update);
                if ($result->num_rows > 0) {
                $sql_update = "UPDATE absen SET keterangan = LOWER('$keterangan'), selfie = '$selfie', date = NOW() WHERE noabsen = '$noabsen'";
              }else{
                $notification = "Maaf, input yang anda masukkan salah";
              }
    } else {
        $notification = "Silakan pilih file untuk diunggah.";
    }
    if ($db->query($sql_update) === TRUE){ $notification = "Selamat anda sebagai absen $noabsen berhasil absen!";
    }else{ $notification = "Gagal absen,input yang anda masukkan salah"; }
    // code.php

}
}
?>

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Absensi Kelas 9F</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <div class="form">
      <form action="index.php" method="POST" id="myForm" enctype="multipart/form-data">
        <h1>Absensi</h1>
        <div class="input-box" data-aos="fade-right" data-aos-duration="1000">
          <input
            type="text"
            placeholder="nomor absen"
            required
            name="noabsen"
            required
          />
        </div>
        <div class="input-box" data-aos="fade-left" data-aos-duration="1000">
        <input
            type="text"
            placeholder="isi masuk,izin,sakit,atau alpha"
            required
            name="keterangan"
            required
          />
        </div>
        <div class="boxbtn" data-aos="fade-down" data-aos-duration="1000">
          <label for="selfie">Klik untuk upload Selfie <br /></label>
          <input
            type="file"
            name="file"
            id="selfie"
            class="file:bg-gradient-to-b file:from-blue-500 file:to-blue-600 file:px-6 file:py-3 file:m-5 file:border-none file:rounded-full file:text-white file:cursor-pointer file:shadow-lg file:shadow-blue-600/50 text-white/80 cursor-pointer"
            require
          />
        </div>
        <i><?=$notification?></i>
        <button type="submit" name="kirim" id="myButton" class="btn" data-aos="fade-up" data-aos-duration="1000">Kirim</button>
        <div class="desc">
          <p><a href="table.php" >Klik Saya Untuk Melihat Data Siswa</a></p>
        </div>
      </form>
    </div>
    <script>
//const button = document.getElementById('myButton');
//
//button.addEventListener('click', () => {
//    button.disabled = true;
//    button.textContent = 'Memproses...';
//
//    // Simulasi proses pengiriman data (misalnya, mengirim ke server)
//    setTimeout(() => {
//        try {
//            // Coba arahkan ke halaman berikutnya
//            window.location.href = 'table.php';
//        } catch (error) {
//            console.error('Terjadi kesalahan saat mengalihkan halaman:', error);
//            // Tampilkan pesan error kepada pengguna
//            alert('Terjadi kesalahan. Silakan coba lagi.');
//        }
//    }, 3000);
//});
</script>
  </body>
</html>
