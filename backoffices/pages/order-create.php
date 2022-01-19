<?php
include "./../helpers/database.php";
if (isset($_POST['submit'])) {
    $number = uniqid("SL");
    $sale = $db->create("sales", "NULL, '$number', '$_POST[date]', '0', '$_POST[customer_name]'");
    $id = $db->get("*", "sales", "ORDER BY id DESC LIMIT 1")->fetch()['id'];
    $tt = 0;
    foreach ($_POST['product_id'] as $i => $productId) {
        $qty = $_POST['quantity'][$i];
        $product = $db->get("*", "products", "WHERE id = '$productId'")->fetch();
        $total  = $qty * $product['price'];
        $price = $product['price'];
        $tt += $total;
        $sale = $db->create("sales", "NULL, '$id', '$productId', '$qty', '$price','$total'");
        $oldStock = $product['stock'] - $qty;
        $db->update('products', "stock='$oldStock'", "id = '$productId'");
    }
    $db->update("sales", "total='$tt'", "id = '$id'");
    if ($db) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=order-index'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan')</script>";
        echo "<script>document.location.href='index.php?page=order-index'</script>";
    }
}
?>
<section class="content-header">
    <h1>
        Tambah Order
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Tambah Order
                    </div>
                </div>
                <div class="box-body">

                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_name">Nama Pelanggan</label>
                                    <input type="text" class="form-control" name="customer_name" id="customer_name" required>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Tanggal</label>
                                    <input type="date" class="form-control" name="date" id="date" required>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary btn-add">Tambah Produk</button>
                        <div class="row" id="form-element">
                            <div class="col-md-6">
                                <label for="product_id">Produk</label>
                                <select name="product_id[]" id="product_id" class="form-control">
                                    <?php
                                    $products = $db->get("*", "products");
                                    foreach ($products as $row) :
                                    ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control" name="quantity" id="quantity" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group " style="margin-top: 20px;">
                            <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<div id="elm" hidden>

    <div class="col-md-6">
        <label for="product_id">Produk</label>
        <select name="product_id[]" id="product_id" class="form-control">
            <?php
            $products = $db->get("*", "products");
            foreach ($products as $row) :
            ?>
                <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="quantity" required>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.btn-add').click(function() {
            html = $('#elm').html();
            $('#form-element').append(html);
        });
    });
</script>