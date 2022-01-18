<?php
include "./../helpers/database.php";
if (isset($_POST['submit'])) {
    if ($_POST['password'] == "") {
        $create = $db->update("users", "name='$_POST[name]',username='$_POST[username]'", "id = $_SESSION[session_id]");
    } else {
        $create = $db->update("users", "name='$_POST[name]',username='$_POST[username]',password='$_POST[password]'", "id = $_SESSION[session_id]");
    }
    if ($create) {
        $_SESSION['session_username'] = $_POST['username'];
        $_SESSION['session_name'] = $_POST['name'];
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=profile'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=profile'</script>";
    }
}
?>
<section class="content-header">
    <h1>
        Ubah Profil
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Ubah Profil
                    </div>
                </div>
                <div class="box-body">

                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $_SESSION['session_id'] ?>">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?= $_SESSION['session_name'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" value="<?= $_SESSION['session_username'] ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <p>Kosongkan Input Password Jika Tidak Ingin Mengganti Password</p>
                        </div>


                        <div class="form-group">
                            <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
</section>