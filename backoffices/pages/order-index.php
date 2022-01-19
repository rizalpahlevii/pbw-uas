<section class="content-header">
    <h1>
        Order
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Order
                    </div>
                </div>
                <div class="box-body">
                    <a href="index.php?page=order-create" class="btn btn-sm btn-primary">Tambah Order</a>
                    <table class="table table-bordered-table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Customer</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "./../helpers/database.php";
                            $query = $db->get("* ", "sales");
                            $no = 1;
                            $total = 0;
                            foreach ($query as $row) :
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $row['date'] ?></td>
                                    <td><?= $row['customer_name'] ?></td>
                                    <td><?= $row['total'] ?></td>
                                </tr>
                            <?php
                                $total += $row['total'];
                                $no++;
                            endforeach;
                            ?>
                            <tr>
                                <th colspan="3">Total</th>
                                <td>
                                    <b>
                                        <?= $total ?>
                                    </b>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>