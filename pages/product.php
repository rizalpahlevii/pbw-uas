<?php include("./helpers/database.php") ?>
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <h1 class="display-5 fw-bold">Daftar Produk</h1>
    <?php
    if (isset($_GET['category'])) :
        if ($_GET['category'] != "") :
            $productCategory =  $db->get("*", "product_categories", "WHERE id = '$_GET[category]'")->fetch();
    ?>
            <p>Kategori : <?= $productCategory['name'] ?></p>
    <?php
        endif;
    endif;
    ?>
</div>
<?php
$products = $db->get("*", "products");
if (isset($_GET['category'])) {
    if ($_GET['category'] != "") {
        $products = $db->get("*", "products", "WHERE product_category_id = '$_GET[category]'");
    } else {
        $products = $db->get("*", "products");
    }
} else {
    $products = $db->get("*", "products");
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <?php
                $productCategories = $db->get("*", "product_categories");
                foreach ($productCategories as $_productCategory) :
                ?>
                    <a href="../index.php?page=product&category=<?= $_productCategory['id'] ?>" class="list-group-item list-group-item-action <?= $_GET['category'] == $_productCategory['id'] ? "active" : "" ?>"><?= $_productCategory['name'] ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <?php foreach ($products as $_product) : ?>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="assets/product-images/<?= $_product['image'] ?>" class="card-img-top" alt="<?= $_product['name'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $_product['name'] ?></h5>
                                <p class="card-text"><?= $_product['price'] ?></p>
                                <a href="index.php?page=product-detail&id=<?= $_product['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<div class="b-example-divider"></div>