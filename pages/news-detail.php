<?php include("./helpers/database.php") ?>
<?php
$news = $db->get("*", "news WHERE id = '$_GET[id]'")->fetch();
?>
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <h1 class="display-5 fw-bold"><?= $news['title'] ?></h1>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <h3><?= $news['title'] ?></h3>
        </div>
        <div class="col-md-12">
            <p><?= $news['content'] ?></p>
        </div>
    </div>
</div>

<div class="b-example-divider"></div>