<?php
include "./../helpers/database.php";
if (isset($_POST['submit'])) {
    $update = $db->update("product_categories", "name='$_POST[name]'", "id = $_POST[id]");
    if ($update) {
        echo "<script>alert('Data Berhasil Diupdate')</script>";
        echo "<script>document.location.href='index.php?page=pc-index'</script>";
    } else {
        echo "<script>alert('Data Gagal Diupdate')</script>";
        echo "<script>document.location.href='index.php?page=pc-index'</script>";
    }
}
?>
<section class="content-header">
    <h1>
        Edit Kategori Produk
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Edit Kategori Produk
                    </div>
                </div>
                <div class="box-body">
                    <?php
                    $query = $db->get("*", "product_categories", "WHERE id = $_GET[id]");
                    $row = $query->fetch();
                    ?>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?= $row['name'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
</section>