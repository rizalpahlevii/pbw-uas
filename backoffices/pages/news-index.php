<section class="content-header">
    <h1>
        Berita
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Berita
                    </div>
                </div>
                <div class="box-body">
                    <a href="index.php?page=news-create" class="btn btn-sm btn-primary">Tambah</a>
                    <table class="table table-bordered-table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Content</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "./../helpers/database.php";
                            $query = $db->get("news.*,news_categories.name as category_name ", "news", "INNER JOIN news_categories ON news.news_category_id = news_categories.id");
                            $no = 1;
                            foreach ($query as $row) :
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $row['title'] ?></td>
                                    <td><?= $row['content'] ?></td>
                                    <td><?= $row['category_name'] ?></td>
                                    <td>
                                        <a href="index.php?page=news-edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="crud/news-delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
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