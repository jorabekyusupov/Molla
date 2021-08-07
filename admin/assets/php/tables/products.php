<div class="card">
  <div class="card-header">
    <h4>Products | <form class="d-inline-block" action="index.php" method="POST"> <input name="create" hidden type="text" value="p_create"> <button type="submit" class="btn btn-primary">ADD</button></form></h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped" id="table-1">
        <thead>
          <tr>
            <th class="text-start">
              ID
            </th>
            <th>Title</th>
       
            <th>Image</th>
            <th>Due Date</th>
            <th>category</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($product as $item) { ?>
          <tr>
            <td>
              <?= $item->pid ?>
            </td>
            <td><?= $item->title ?></td>
           
            <td>
              <img alt="image" src="<?= $item->image ?>" width="35">
            </td>
            <td><?= $item->created_at ?></td>
            <td><div class="badge badge-success badge-shadow"><?= $item->category ?></div></td>
            <td>
            <div class="badge  <?= ($item->status == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($item->status == 1) ? 'Active' : 'deactive' ?></div>
            </td>
            <td style="display: flex; ">
              <form action="/admin/index.php" method="post"> <input type="text" name="id" value="<?= $item->pid ?>"  hidden> <input type="text" hidden name="view" value="p_view"> <button type="submit" class="btn btn-success" >View</button></form>
              <form class="mr-1 ml-1" action="/admin/index.php" method="POST"> <input type="text" name="id" value="<?= $item->pid ?>" hidden> <input type="text" hidden name="edit" value="p_edit"> <button type="submit" class="btn btn-secondary" >Edit</button></form>
              <form action="./assets/php/forms/delete.php" method="post"> <input type="text" name="id" value="<?= $item->pid ?>"  hidden> <input type="text" hidden name="delete" value="p_delete"> <button type="submit" class="btn btn-danger" >Delete</button></form>
            
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php 
  if (isset($_SESSION['create'])) {
    $message = $_SESSION['create'];
    echo "<script>alert('$message')</script>";
    session_destroy();
  }
  if (isset($_SESSION['delete'])) {
    $message = $_SESSION['delete'];
    echo "<script>alert('$message')</script>";
    session_destroy();
  }
  if (isset($_SESSION['updated'])) {
    $message = $_SESSION['updated'];
    echo "<script>alert('$message')</script>";
    session_destroy();
  }

?>