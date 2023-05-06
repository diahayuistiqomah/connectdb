<?php
// Function untuk melakukan insert ke table categories
function insert_category($conn, $category_name) {
    $sql = "INSERT INTO categories (name, created_at, updated_at) VALUES ('$category_name', NOW(), NOW())";
    if ($conn->query($sql) === TRUE) {
        echo "Kategori berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function untuk melakukan insert ke table products
function insert_product($conn, $category_id, $product_name, $description, $product_price, $status, $created_by, $verified_by) {
    $sql = "INSERT INTO products (category_id, name, description, price, status, created_at, updated_at, created_by, verified_by) VALUES ('$category_id', '$product_name', '$description', '$product_price', '$status', NOW(), NOW(), '$created_by', '$verified_by')";
    if ($conn->query($sql) === TRUE) {
        echo "Produk berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
