<?php include("./helpers/database.php") ?>
<?php
$product = $db->get("*", "products", "WHERE id = '$_GET[id]'")->fetch();
?>
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <h1 class="display-5 fw-bold"><?= $product['name'] ?></h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="assets/product-images/<?= $product['image'] ?>" alt="" class="img-thumbnail">
        </div>
        <div class="col-md-8">
            <h3><?= $product['name'] ?></h3>
            <h6><?= $product['price'] ?></h6>
        </div>
    </div>
</div>

<div class="b-example-divider"></div>