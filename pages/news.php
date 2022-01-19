<?php include("./helpers/database.php") ?>
<?php
$news = $db->get("*", "news");
?>
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <h1 class="display-5 fw-bold">Berita</h1>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($news as $row) : ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['title'] ?></h5>
                        <p class="card-text"><?php echo substr($row['content'], 0, 100) ?></p>
                        <a href="index.php?page=news-detail&id=<?= $row['id'] ?>" class="card-link">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="b-example-divider"></div>