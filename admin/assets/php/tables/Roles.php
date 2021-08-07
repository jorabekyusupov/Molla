<div class="card">
    <div class="card-header">
        <h4>Roles</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="table-1">
                <thead>
                    <tr>
                        <th class="text-start">
                            ID
                        </th>
                        <th>Name</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($_GET['sname']) && $_GET['sname'] == 'roles' && isset($role)) { ?>

                        <?php foreach ($role as $item) { ?>
                            <tr>
                                <td>
                                   <?= $item->id ?>
                                </td>
                                <td>
                                   <?= $item->name ?>
                                </td>
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