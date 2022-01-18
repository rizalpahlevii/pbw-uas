<section class="content-header">
    <h1>
        User
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        User
                    </div>
                </div>
                <div class="box-body">
                    <a href="index.php?page=user-create" class="btn btn-sm btn-primary">Tambah</a>
                    <table class="table table-bordered-table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "./../helpers/database.php";
                            $query = $db->get("*", "users");
                            $no = 1;
                            foreach ($query as $row) :
                                if ($row['id'] != $_SESSION['session_id']) :
                            ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row['name'] ?></td>
                                        <td><?= $row['username'] ?></td>
                                        <td><?= $row['password'] ?></td>
                                        <td>
                                            <a href="index.php?page=user-edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="crud/user-delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                            <?php
                                    $no++;
                                endif;
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>