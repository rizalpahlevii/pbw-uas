<?php include("./helpers/database.php") ?>
<?php
if (isset($_POST['submit'])) {
    $date = date('Y-m-d H:i:s');
    $create = $db->create("messages", "NULL, '$_POST[email]','$_POST[message]','$date'");

    if ($create) {
        echo "<script>alert('Pesan Berhasil Dikirim')</script>";
        echo "<script>document.location.href='index.php?page=contact'</script>";
    } else {
        echo "<script>alert('Pesan Berhasil Dikirim</script>";
        echo "<script>document.location.href='index.php?page=contact'</script>";
    }
}
?>
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <h1 class="display-5 fw-bold">Kontak</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group mt-2">
                    <input type="submit" value="Kirim" name="submit" class="btn btn-primary btn-sm">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="b-example-divider"></div>