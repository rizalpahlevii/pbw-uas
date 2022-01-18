<?php
include "../../helpers/database.php";

$update = $db->delete("news",  "id = $_GET[id]");
if ($update) {
    echo "<script>alert('Data Berhasil Dihapus')</script>";
    echo "<script>document.location.href='../index.php?page=news-index'</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus')</script>";
    echo "<script>document.location.href='../index.php?page=news-index'</script>";
}
