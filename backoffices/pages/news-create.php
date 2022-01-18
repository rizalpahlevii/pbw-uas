<?php
include "./../helpers/database.php";
if (isset($_POST['submit'])) {
    $create = $db->create("news", "NULL, '$_POST[title]','$_POST[content]','$_POST[news_category_id]'");
    if ($create) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=news-index'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=news-index'</script>";
    }
}
?>
<section class="content-header">
    <h1>
        Tambah Berita
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Tambah Berita
                    </div>
                </div>
                <div class="box-body">

                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="form-group">
                            <label for="title">Nama</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Harga</label>
                            <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="stock">Kategori</label>
                            <select name="news_category_id" id="news_category_id" class="form-control" required>
                                <option value="">Pilih Kategori</option>
                                <?php
                                $newsCategories = $db->get("*", "news_categories");
                                foreach ($newsCategories as $row) :
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