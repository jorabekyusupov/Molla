<div class="card">
  <div class="card-header">
    <h4>Employees</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped" id="table-1">
        <thead>
          <tr>
            <th class="text-start">
              ID
            </th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>UserName</th>
            <th>Address</th>
            <th>Role</th>
            <th>status</th>
          </tr>
        </thead>
        <tbody>
          <?php if (isset($_GET['sname']) && $_GET['sname'] == 'admin' && isset($employee)) { ?>

            <?php foreach ($employee as $item) { 
             
                ?>
              <tr>
                <td>
                  <?= $item->id ?>
                </td>
                <td><?= $item->firstname ?></td>
                <td><?= $item->lastname ?></td>
                <td><?= $item->username ?></td>
                <td><?= isset($item->address_id) ? $item->address_id : 'Null' ?></td>
                <td><div class="badge badge-success badge-shadow"><?= $item->role ?></div></td>
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