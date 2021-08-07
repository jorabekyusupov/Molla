<div class="card">
  <div class="card-header">
    <h4>Address</h4>
  </div>
  <div class="card-body">
    <ul class="nav nav-tabs" id="myTab2" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="Countries-tab" data-toggle="tab" href="#Countries" role="tab" aria-controls="Countries" aria-selected="true">Countries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="Regions-tab" data-toggle="tab" href="#Regions" role="tab" aria-controls="Regions" aria-selected="false">Regions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="Districts-tab" data-toggle="tab" href="#Districts" role="tab" aria-controls="Districts" aria-selected="false">Districts</a>
      </li>
    </ul>
    <div class="tab-content" id="myTab3Content">
      <div class="tab-pane fade active show" id="Countries" role="tabpanel" aria-labelledby="Countries-tab">
        <div class="card">
          <div class="card-header">
            <h4>Simple Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-md">
                <tbody>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>

                  </tr>
                  <?php if (isset($_GET['sname']) && $_GET['sname'] == 'address' && isset($country)) { ?>
                    <?php foreach ($country as $item) { ?>


                      <tr>
                        <td><?= $item->id ?></td>
                        <td><?= $item->name ?></td>

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
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="Regions" role="tabpanel" aria-labelledby="Regions-tab">
        <div class="card">
          <div class="card-header">
            <h4>Simple Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-md">
                <tbody>
                  <tr>
                    <th>ID</th>
                    <th>Country</th>
                    <th>Region</th>
                    <th>Status</th>

                  </tr>
                  <?php if (isset($_GET['sname']) && $_GET['sname'] == 'address' && isset($region)) { ?>
                    <?php foreach ($region as $item) { ?>


                      <tr>
                        <td><?= $item->id ?></td>
                        <td><?= $item->country ?></td>
                        <td><?= $item->name ?></td>

                        <td>
                          <div class="badge  <?= ($item->status == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($item->status == 1) ? 'Active' : 'deactive' ?></div>
                        </td>


                    <?php }
                  } ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="Districts" role="tabpanel" aria-labelledby="Districts-tab">
        <div class="card">
          <div class="card-header">
            <h4>Simple Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-md">
                <tbody>
                  <tr>
                    <th>ID</th>
                    <th>Country</th>
                    <th>Region</th>
                    <th>District</th>
                    <th>Status</th>

                  </tr>
                  <?php if (isset($_GET['sname']) && $_GET['sname'] == 'address' && isset($district)) { ?>
                    <?php foreach ($district as $item) { ?>


                      <tr>
                        <td><?= $item->id ?></td>
                        <td><?= $item->country ?></td>
                        <td><?= $item->region ?></td>
                        <td><?= $item->name ?></td>

                        <td>
                          <div class="badge  <?= ($item->status == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($item->status == 1) ? 'Active' : 'deactive' ?></div>
                        </td>


                    <?php }
                  } ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
</div>