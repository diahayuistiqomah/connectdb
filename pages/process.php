<?php
// Memeriksa apakah form untuk menambahkan kategori atau produk telah disubmit

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('../routes/db.php');
    require_once('../helpers/function.php');
    $conn = db_connect();

    if (isset($_POST['category_name'])) {
        $category_name = $_POST['category_name'];
        insert_category($conn, $category_name);
        header('Refresh: 1; URL=submit_data.php');
        exit;
    }

    if (isset($_POST['category_id']) && isset($_POST['product_name']) && isset($_POST['description']) && isset($_POST['product_price']) && isset($_POST['status']) && isset($_POST['created_by']) && isset($_POST['verified_by'])) {
        $category_id = $_POST['category_id'];
        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $product_price = $_POST['product_price'];
        $status = $_POST['status'];
        $created_by = $_POST['created_by'];
        $verified_by = $_POST['verified_by'];
        insert_product($conn, $category_id, $product_name, $description, $product_price, $status, $created_by, $verified_by);
        header('Refresh: 1; URL=submit_data.php');
        exit;
    }

    $conn->close();
}



?>
