<section class="content-header">
    <h1>
        Daftar Pesan
    </h1>

</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        Daftar Pesan
                    </div>
                </div>
                <div class="box-body">

                    <table class="table table-bordered-table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Waktu</th>
                                <th>Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "./../helpers/database.php";
                            $query = $db->get("*", "messages");
                            $no = 1;
                            foreach ($query as $row) :
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['message_at'] ?></td>
                                    <td><?= $row['message'] ?></td>

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