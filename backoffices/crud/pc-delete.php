<?php
include "../../helpers/database.php";

$update = $db->delete("product_categories",  "id = $_GET[id]");
if ($update) {
    echo "<script>alert('Data Berhasil Dihapus')</script>";
    echo "<script>document.location.href='../index.php?page=pc-index'</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus')</script>";
    echo "<script>document.location.href='../index.php?page=pc-index'</script>";
}
