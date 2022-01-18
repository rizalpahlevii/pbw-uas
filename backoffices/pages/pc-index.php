<section class="content-header">
    <h1>
        Kategori Produk
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Kategori Produk
                    </div>
                </div>
                <div class="box-body">
                    <a href="index.php?page=pc-create" class="btn btn-sm btn-primary">Tambah</a>
                    <table class="table table-bordered-table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "./../helpers/database.php";
                            $query = $db->get("*", "product_categories");
                            $no = 1;
                            foreach ($query as $row) :
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td>
                                        <a href="index.php?page=pc-edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="crud/pc-delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>