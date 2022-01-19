<?php
include "./../helpers/database.php";
if (isset($_POST['submit'])) {
    if (isset($_FILES['image']) != null) {
        $allowExtension = ['png', 'jpg', 'jpeg'];
        $fileName = $_FILES['image']['name'];
        $expl = explode('.', $fileName);
        $fileExtension = strtolower(end($expl));
        $size = $_FILES['image']['size'];
        $tempFile = $_FILES['image']['tmp_name'];
        $newName = md5(rand()) . '.' . $fileExtension;
        if (in_array($fileExtension, $allowExtension)) {
            if ($size  < 1044070) {
                move_uploaded_file($tempFile, './../assets/product-images/' . $newName);
                $update = $db->update("products", "name='$_POST[name]',image='$newName',price='$_POST[price]',stock='$_POST[stock]',product_category_id='$_POST[product_category_id]'", "id = $_POST[id]");
                if ($update) {
                    echo "<script>alert('Data Berhasil Disimpan')</script>";
                    echo "<script>document.location.href='index.php?page=product-index'</script>";
                } else {

                    echo "<script>alert('Data Gagal Disimpan')</script>";
                    echo "<script>document.location.href='index.php?page=product-index'</script>";
                }
            } else {
                echo "<script>alert('Ukuran File Terlalu Besar')</script>";
                echo "<script>document.location.href='index.php?page=product-index'</script>";
            }
        } else {
            echo "<script>alert('Ekstensi File Yang Di Upload Tidak Diperbolehkan')</script>";
            echo "<script>document.location.href='index.php?page=product-index'</script>";
        }
    } else {
        $update = $db->update("products", "name='$_POST[name]',price='$_POST[price]',stock='$_POST[stock]',product_category_id='$_POST[product_category_id]'", "id = $_POST[id]");
        if ($update) {
            echo "<script>alert('Data Berhasil Diupdate')</script>";
            echo "<script>document.location.href='index.php?page=product-index'</script>";
        } else {
            echo "<script>alert('Data Gagal Diupdate')</script>";
            echo "<script>document.location.href='index.php?page=product-index'</script>";
        }
    }
}
?>
<section class="content-header">
    <h1>
        Edit Produk
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Edit Produk
                    </div>
                </div>
                <div class="box-body">
                    <?php
                    $query = $db->get("*", "products", "WHERE id = $_GET[id]");
                    $row = $query->fetch();
                    ?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" required value="<?= $row['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input type="number" class="form-control" name="price" id="price" required value="<?= $row['price'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="stock">Stok</label>
                            <input type="number" class="form-control" name="stock" id="stock" required value="<?= $row['stock'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control" name="image" id="image">
                            <p>Kosongkan Form Jika Tidak Ingin Mengganti Gambar</p>
                        </div>
                        <div class="form-group">
                            <label for="stock">Kategori</label>
                            <select name="product_category_id" id="product_category_id" class="form-control" required>
                                <option value="">Pilih Kategori</option>
                                <?php
                                $productCategories = $db->get("*", "product_categories");
                                foreach ($productCategories as $productCategory) :
                                ?>
                                    <option value="<?= $productCategory['id'] ?>" <?= $row['product_category_id'] == $productCategory['id'] ? "selected" : ""  ?>><?= $productCategory['name'] ?></option>
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