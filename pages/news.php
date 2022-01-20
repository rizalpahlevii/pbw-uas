<?php include("./helpers/database.php") ?>

<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <h1 class="display-5 fw-bold">Berita</h1>
    <?php
    if (isset($_GET['category'])) :
        if ($_GET['category'] != "") :
            $newsCategory =  $db->get("*", "news_categories", "WHERE id = '$_GET[category]'")->fetch();
    ?>
            <p>Kategori : <?= $newsCategory['name'] ?></p>
    <?php
        endif;
    endif;
    ?>
</div>
<?php
$news = $db->get("*", "news");
if (isset($_GET['category'])) {
    if ($_GET['category'] != "") {
        $news = $db->get("*", "news", "WHERE news_category_id = '$_GET[category]'");
    } else {
        $news = $db->get("*", "news");
    }
} else {
    $news = $db->get("*", "news");
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <?php
                $newsCategories = $db->get("*", "news_categories");
                foreach ($newsCategories as $_newsCategory) :
                ?>
                    <a href="index.php?page=news&category=<?= $_newsCategory['id'] ?>" class="list-group-item list-group-item-action <?= $_GET['category'] == $_newsCategory['id'] ? "active" : "" ?>"><?= $_newsCategory['name'] ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <?php foreach ($news as $row) : ?>
                    <div class="col-md-6 mt-2">
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
    </div>
</div>

<div class="b-example-divider"></div>