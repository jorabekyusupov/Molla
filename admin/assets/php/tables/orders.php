<div class="card">
    <div class="card-header">
        <h4>Orders</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Order Date</th>
                        <th>User_id</th>
                        <th>UserName</th>
                        <th>Status</th>
                        <th>price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($_GET['sname']) && $_GET['sname'] == 'orders' && isset($order)) { ?>
                        <?php foreach ($order as $item) {  ?>

                            <tr>
                                <td><?= $item->id ?></td>
                                <td><?= $item->order_date ?></td>
                                <td><?= $item->user_id ?></td>
                                <td><?= $item->username ?></td>
                                <td>
                                    <div class="badge  <?= ($item->status == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($item->status == 1) ? 'Active' : 'deactive' ?></div>
                                </td>
                                <td><?= $item->price ?></td>
                            </tr>
                    <?php  }
                    } ?>


                </tbody>
            </table>
        </div>
    </div>
</div>