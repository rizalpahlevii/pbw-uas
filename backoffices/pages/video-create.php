<?php
include "./../helpers/database.php";
if (isset($_POST['submit'])) {
    $create = $db->create("videos", "NULL, '$_POST[title]','$_POST[url]'");
    if ($create) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=video-index'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=video-index'</script>";
    }
}
?>
<section class="content-header">
    <h1>
        Tambah Video
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Tambah Video
                    </div>
                </div>
                <div class="box-body">

                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                        <div class="form-group">
                            <label for="url">Url Iframe</label>
                            <input type="text" class="form-control" name="url" id="url" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
</section>