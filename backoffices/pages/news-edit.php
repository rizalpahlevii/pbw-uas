<?php
include "./../helpers/database.php";
if (isset($_POST['submit'])) {
    $update = $db->update("news", "title='$_POST[title]',content='$_POST[content]',news_category_id='$_POST[news_category_id]'", "id = $_POST[id]");
    if ($update) {
        echo "<script>alert('Data Berhasil Diupdate')</script>";
        echo "<script>document.location.href='index.php?page=news-index'</script>";
    } else {
        echo "<script>alert('Data Gagal Diupdate')</script>";
        echo "<script>document.location.href='index.php?page=news-index'</script>";
    }
}
?>
<section class="content-header">
    <h1>
        Edit Berita
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Edit Berita
                    </div>
                </div>
                <div class="box-body">
                    <?php
                    $query = $db->get("*", "news", "WHERE id = $_GET[id]");
                    $row = $query->fetch();
                    ?>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="form-group">
                            <label for="title">Nama</label>
                            <input type="text" class="form-control" name="title" id="title" required value="<?= $row['title'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="price">Konten</label>
                            <textarea name="content" id="content" cols="30" rows="5" class="form-control"><?= $row['content'] ?></textarea>

                        </div>
                        <div class="form-group">
                            <label for="stock">Kategori</label>
                            <select name="news_category_id" id="news_category_id" class="form-control" required>
                                <option value="">Pilih Kategori</option>
                                <?php
                                $newscategories = $db->get("*", "news_categories");
                                foreach ($newscategories as $newsCategory) :
                                ?>
                                    <option value="<?= $newsCategory['id'] ?>" <?= $row['news_category_id'] == $newsCategory['id'] ? "selected" : ""  ?>><?= $newsCategory['name'] ?></option>
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