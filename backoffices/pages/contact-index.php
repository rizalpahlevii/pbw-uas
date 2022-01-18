<?php
include "./../helpers/database.php";
if (isset($_POST['submit'])) {

    $db->update("contact_us", "value='$_POST[name]'", "title = 'name'");
    $db->update("contact_us", "value='$_POST[nim]'", "title = 'nim'");
    $db->update("contact_us", "value='$_POST[address]'", "title = 'address'");
    $db->update("contact_us", "value='$_POST[email]'", "title = 'email'");
    echo "<script>alert('Data Berhasil Disimpan')</script>";
    echo "<script>document.location.href='index.php?page=contact-index'</script>";
}
?>
<section class="content-header">
    <h1>
        Contact Us
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Contact Us
                    </div>
                </div>
                <div class="box-body">
                    <form action="" method="POST">
                        <table class="table table-bordered-table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Nilai </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $query = $db->get("*", "contact_us");
                                $no = 1;
                                foreach ($query as $row) :
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row['title'] ?></td>
                                        <td>
                                            <input type="text" name="<?= $row['title'] ?>" class="form-control" value="  <?= $row['value'] ?>" required>

                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                        <input type="submit" value="Ubah" name="submit" class="btn btn-primary btn-sm">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>