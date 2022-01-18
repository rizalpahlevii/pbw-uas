<?php
include "./../helpers/database.php";
if (isset($_POST['submit'])) {
    $create = $db->create("news_categories", "NULL, '$_POST[name]'");
    if ($create) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=nc-index'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=nc-index'</script>";
    }
}
?>
<section class="content-header">
    <h1>
        Tambah Kategori Berita
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Tambah Kategori Berita
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
                            <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
</section>