<!DOCTYPE html>
<html>
<head>
	<title>Form Insert Data</title>
    <link rel="stylesheet" type="text/css" href="../style/submit.css">
</head>
<body>
    <a href="../index.php" class="btn-back">&#8592; Kembali</a>
	<h2>Tambah Kategori</h2>
	<form action="process.php" method="post">
		<label for="category_name">Nama Kategori:</label>
		<input type="text" name="category_name" id="category_name"><br><br>
		<input type="submit" value="Tambah Kategori">
	</form>

	<hr>

	<h2>Tambah Produk</h2>
	<form action="process.php" method="post">
		<label for="category_id">ID Kategori:</label>
		<input type="text" name="category_id" id="category_id"><br><br>
		<label for="product_name">Nama Produk:</label>
		<input type="text" name="product_name" id="product_name"><br><br>
		<label for="description">Deskripsi Produk:</label>
		<textarea name="description" id="description"></textarea><br><br>
		<label for="product_price">Harga Produk:</label>
		<input type="text" name="product_price" id="product_price"><br><br>
		<label for="status">Status Produk:</label>
		<select name="status" id="status">
			<option value="accepted">Accepted</option>
			<option value="waiting">Waiting</option>
			<option value="rejected">Rejected</option>
		</select><br><br>
		<label for="created_by">Dibuat Oleh:</label>
		<input type="text" name="created_by" id="created_by"><br><br>
		<label for="verified_by">Diverifikasi Oleh:</label>
		<input type="text" name="verified_by" id="verified_by"><br><br>
		<input type="submit" value="Tambah Produk">
	</form>
</body>
</html>
