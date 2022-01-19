<?php include("./helpers/database.php") ?>
<?php
$video = $db->get("*", "videos WHERE id = '$_GET[id]'")->fetch();
?>
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <h1 class="display-5 fw-bold"><?= $video['title'] ?></h1>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <h3><?= $video['title'] ?></h3>
        </div>
        <div class="col-md-12">
            <iframe width="727" height="409" src=" <?= $video['url'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
    </div>
</div>

<div class="b-example-divider"></div>