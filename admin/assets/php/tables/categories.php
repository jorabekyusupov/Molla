<div class="card">
  <div class="card-header">
    <h4>Categories | <form class="d-inline-block" action="index.php" method="POST"> <input name="create" hidden type="text" value="c_create"> <button type="submit" class="btn btn-primary">ADD</button></form>
    </h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="mainTable" class="table table-striped" style="cursor: pointer;">
        <thead>
          <tr>
            <th>Name</th>
            <th>Product Count</th>
            <th>status</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
          <?php   foreach ($category as $item) {
           
            $prCounts = $db->query("select
            cate.name,
            (
              select
                case
                  when count(p.id) is null then 'null'
                  when count(p.id) > 0 then count(p.id)
                end as count
              from
                products p
                join categories c on p.category_id = c.id
                right join categories ca on ca.id = c.parent_id
              where
                c.parent_id is not null and
                ca.parent_id = $item->id
              GROUP BY
                ca.name
            )
          from
            products pa
            join categories cat on pa.category_id = cat.id
            right join categories cate on cate.id = cat.parent_id
          where
            cat.parent_id is null
       
          GROUP BY
            cate.name;");
            if ($prCounts->num_rows > 0) {
              while ($rows = $prCounts->fetch_object()) {
                $prCount[] = $rows;
                
              } 
                
            } ?>
            <tr>
              <td tabindex="1"><?= $item->name ?></td>
              <td tabindex="1"> <?php if(isset($prCount)){
                  foreach ($prCount as $items) {
                      echo !isset($items->count) ? 0 : $items->count;
                  }
              } else echo 0;?></td>
              <td tabindex="1">
                <div class="badge  <?= ($item->status == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($item->status == 1) ? 'Active' : 'deactive' ?></div>
              </td>
              <td tabindex="1" style="display: flex; align-items: center; width: 50px;">
                <form action="./assets/php/forms/view.php" method="post"> <input type="text" name="id" value="<?= $item->id ?>" hidden> <input type="text" hidden name="view" value="p_view"> <button type="submit" class="btn btn-success">View</button></form>
                <form class="mr-1 ml-1" action="./assets/php/forms/edit.php" method="post"> <input type="text" name="id" value="<?= $item->id ?>" hidden> <input type="text" hidden name="edit" value="p_edit"> <button type="submit" class="btn btn-secondary">Edit</button></form>
                <form action="./assets/php/forms/delete.php" method="post"> <input type="text" name="id" value="<?= $item->id ?>" hidden> <input type="text" hidden name="delete" value="p_delete"> <button type="submit" class="btn btn-danger">Delete</button></form>
              </td>

            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <th>
              <strong>TOTAL</strong>
            </th>
            <th></th>

          </tr>
        </tfoot>
      </table>
      <input style="position: absolute; display: none;">
    </div>
  </div>
</div>
<?php
if (isset($_SESSION['create'])) {
  $message = $_SESSION['create'];
  echo "swal('$message', '', 'error');";
}

?>