<!DOCTYPE html>
<html>
  <head>
    <title>Data Absensi</title>
    <style>
      table,
      th,
      td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      th,
      td {
        padding: 15px;
        text-align: left;
      }
    </style>
  </head>
  <body>
    <h2>Data Absensi</h2>

    <table>
      <tr>
        <th>No absen</th>
        <th>Nama</th>
        <th>Keterangan</th>
        <th>Date</th>
        <th>Selfie</th>
      </tr>
      <?php
    include 'connection.php';

    // Query untuk mengambil data keterangan dan selfie
    $sql = "SELECT noabsen, keterangan, nama, date, selfie FROM absen";
    $folder_gambar = "uploads/";
    $result = $db->query($sql); 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["noabsen"] . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["keterangan"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td><img src='" . $folder_gambar . $row["selfie"] . "' alt='' width='400'></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }

    $db->close();
    ?>
    </table>
  </body>
</html>
