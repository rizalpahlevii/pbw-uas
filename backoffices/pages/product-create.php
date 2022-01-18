<?php
include "./../helpers/database.php";
if (isset($_POST['submit'])) {
    $create = $db->create("products", "NULL, '$_POST[name]','$_POST[price]','$_POST[stock]','$_POST[product_category_id]'");
    if ($create) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=product-index'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=product-index'</script>";
    }
}
?>
<section class="content-header">
    <h1>
        Tambah Produk
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Tambah Produk
                    </div>
                </div>
                <div class="box-body">

                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input type="number" class="form-control" name="price" id="price" required>
                        </div>

                        <div class="form-group">
                            <label for="stock">Stok</label>
                            <input type="number" class="form-control" name="stock" id="stock" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">Kategori</label>
                            <select name="product_category_id" id="product_category_id" class="form-control" required>
                                <option value="">Pilih Kategori</option>
                                <?php
                                $productCategories = $db->get("*", "product_categories");
                                foreach ($productCategories as $row) :
                                ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
</section>