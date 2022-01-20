<?php include("./helpers/database.php") ?>
<?php
$videos = $db->get("*", "videos");
?>
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <h1 class="display-5 fw-bold">Video</h1>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($videos as $row) : ?>
            <div class="col-md-6 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['title'] ?></h5>

                        <a href="index.php?page=video-detail&id=<?= $row['id'] ?>" class="card-link">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="b-example-divider"></div>