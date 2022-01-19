<section class="content-header">
    <h1>
        Produk
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Produk
                    </div>
                </div>
                <div class="box-body">
                    <a href="index.php?page=product-create" class="btn btn-sm btn-primary">Tambah</a>
                    <table class="table table-bordered-table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "./../helpers/database.php";
                            $query = $db->get("products.*,product_categories.name as category_name ", "products", "INNER JOIN product_categories ON products.product_category_id = product_categories.id");
                            $no = 1;
                            foreach ($query as $row) :
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td style="width: 20%;"><img src="./../assets/product-images/<?= $row['image'] ?>" alt="" style="width: 80%;"></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['price'] ?></td>
                                    <td><?= $row['stock'] ?></td>
                                    <td><?= $row['category_name'] ?></td>
                                    <td>
                                        <a href="index.php?page=product-edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="crud/product-delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
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