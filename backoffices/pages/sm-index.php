<?php
include "./../helpers/database.php";
if (isset($_POST['submit'])) {

    $db->update("social_medias", "value='$_POST[twitter]'", "name = 'twitter'");
    $db->update("social_medias", "value='$_POST[facebook]'", "name = 'facebook'");
    $db->update("social_medias", "value='$_POST[instagram]'", "name = 'instagram'");
    echo "<script>alert('Data Berhasil Disimpan')</script>";
    echo "<script>document.location.href='index.php?page=sm-index'</script>";
}
?>
<section class="content-header">
    <h1>
        Sosial Media
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Sosial Media
                    </div>
                </div>
                <div class="box-body">
                    <form action="" method="POST">
                        <table class="table table-bordered-table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Url </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $query = $db->get("*", "social_medias");
                                $no = 1;
                                foreach ($query as $row) :
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row['name'] ?></td>
                                        <td>
                                            <input type="text" name="<?= $row['name'] ?>" class="form-control" value="  <?= $row['value'] ?>">

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