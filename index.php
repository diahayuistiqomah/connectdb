<?php

require_once('routes/db.php');


header('Content-Type: text/html; charset=utf-8');

// Buat koneksi ke database
$conn = db_connect();

// Buat query untuk melakukan join tabel products dan categories
$sql = "SELECT p.*, c.name AS category_name
        FROM products p
        INNER JOIN categories c ON p.category_id = c.id
        LIMIT 30";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Data Produk</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>

  <a href="pages/submit_data.php" id="input-data">Input Data</a>
  <h2>Data Produk</h2>
  <table>
    <tr>
      <th>No</th>
      <th>Nama Kategori</th>
      <th>Nama Produk</th>
      <th>Deskripsi</th>
      <th>Harga</th>
      <th>Status</th>
      <th>Dibuat pada</th>
      <th>Diperbarui pada</th>
      <th>Dibuat oleh</th>
      <th>Diverifikasi oleh</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
      $no = 1;
      while($row = $result->fetch_assoc()) {
    ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row['category_name']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['description']; ?></td>
          <td><?php echo number_format($row['price'], 0, ',', '.'); ?></td>
          <td><?php echo $row['status']; ?></td>
          <td><?php echo date('d/m/Y H:i:s', strtotime($row['created_at'])); ?></td>
          <td><?php echo date('d/m/Y H:i:s', strtotime($row['updated_at'])); ?></td>
          <td><?php echo $row['created_by']; ?></td>
          <td><?php echo $row['verified_by']; ?></td>
        </tr>
    <?php
      }
    } else {
    ?>
        <tr>
          <td colspan="10">Tidak ada data</td>
        </tr>
    <?php
    }
    ?>
  </table>

  <?php

  mysqli_close($conn);
  ?>

</body>
</html>
