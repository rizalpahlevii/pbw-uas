<?php
include "./../helpers/database.php";
if (isset($_POST['submit'])) {
    $update = $db->update("videos", "title='$_POST[title]',url='$_POST[url]'", "id = $_POST[id]");
    if ($update) {
        echo "<script>alert('Data Berhasil Diupdate')</script>";
        echo "<script>document.location.href='index.php?page=video-index'</script>";
    } else {
        echo "<script>alert('Data Gagal Diupdate')</script>";
        echo "<script>document.location.href='index.php?page=video-index'</script>";
    }
}
?>
<section class="content-header">
    <h1>
        Edit Video
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Edit Video
                    </div>
                </div>
                <div class="box-body">
                    <?php
                    $query = $db->get("*", "videos", "WHERE id = $_GET[id]");
                    $row = $query->fetch();
                    ?>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="form-group">
                            <label for="title">Nama</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?= $row['title'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="url">Url Iframe</label>
                            <input type="text" class="form-control" name="url" id="url" value="<?= $row['url'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
</section>