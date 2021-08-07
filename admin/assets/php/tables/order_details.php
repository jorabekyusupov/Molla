<div class="card">
  <div class="card-header">
    <h4>Order Details</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
        <thead>
          <tr>
            <th>ID</th>
            <th>Order Date</th>
            <th>Order ID</th>
            <th>Product ID</th>
            <th>Price</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php if (isset($_GET['sname']) && $_GET['sname'] == 'order_details' && isset($orderdetail)) { ?>
            <?php foreach ($orderdetail as $item) { ?>


              <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->order_date ?></td>
                <td><?= $item->order_id ?></td>
                <td><?= $item->product_id ?></td>
                <td><?= $item->price ?></td>
                <td>
                  <div class="badge  <?= ($item->status == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($item->status == 1) ? 'Active' : 'deactive' ?></div>
                </td>
              </tr>
          <?php }
          } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>