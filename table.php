<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
    <main class="table">
        <section class="table__header">
            <h1>Data Siswa</h1>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Absen</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    include 'connection/connection.php';

    // Query untuk mengambil data keterangan dan selfie
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 1";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 2";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 3";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 4";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 5";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 6";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 7";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 8";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 9";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 10";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 11";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 12";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 13";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 14";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 15";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 16";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 17";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 18";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 19";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 20";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 21";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 22";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 23";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 24";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 25";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 26";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 27";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 28";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 29";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 30";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 31";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen WHERE noabsen = 32";
    $folder_gambar = "css/dist/user.png";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td><img src='" . $folder_gambar . "' alt='' width='400'>" . $row['nama'] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
             echo "<td><p class='status . $row[keterangan]'>" . $row["keterangan"] . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }


    $db->close();
    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>