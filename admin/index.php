<?php
session_start();
if (!isset($_SESSION['employee']) && !isset($_SESSION['role']) && !isset($_SESSION['admin'])) {
    header("Location: /");
}
require "./assets/php/action/database.php";
$connect = new DB;
if ($connect) {
      $db = $connect->getConnect();
      $categories = $db->query("select * from categories where parent_id is null");
      if ($categories->num_rows > 0) {
            while ($rows = $categories->fetch_object()) {
                  $category[] = $rows;
            }
      }
      if (isset($_GET['sname']) && $_GET['sname'] == 'categories') {
            $categories = $db->query("select * from categories where parent_id is null");
            if ($categories->num_rows > 0) {
                  while ($rows = $categories->fetch_object()) {
                        $category[] = $rows;
                  }
            }
      }
      if (isset($_POST['create']) && $_POST['create'] == 'c_create') {
            $categories = $db->query("select * from categories");
            if ($categories->num_rows > 0) {
                  while ($rows = $categories->fetch_object()) {
                        $category[] = $rows;
                  }
            }
            
      }
      if (isset($_GET['sname']) && $_GET['sname'] == 'products') {
            $products = $db->query("select *, p.id as pid, c.name as category from products p join categories c on  p.category_id = c.id ");
            if ($products->num_rows > 0) {
                  while ($rows = $products->fetch_object()) {
                        $product[] = $rows;
                  }
            }
      }
      if (isset($_POST['create'])) {
            $admins = $db->query("SELECT u.* FROM user_role ur JOIN user u ON ur.user_id = u.id JOIN roles r ON r.id = ur.role_id WHERE r.id = (select id from roles where name = 'admin')");
            if ($admins->num_rows > 0) {
                  while ($rows = $admins->fetch_object()) {
                        $admin[] = $rows;
                  }
            }
      }
      if (isset($_POST['edit']) && $_POST['edit'] == 'p_edit') {

            $id = $_POST['id'];
            $u_products = $db->query("select * from products where id = $id");
            if ($u_products->num_rows > 0) {
                  while ($rows = $u_products->fetch_object()) {
                        $u_product[] = $rows;
                  }
            }
        
            $admins = $db->query("SELECT u.* FROM user_role ur JOIN user u ON ur.user_id = u.id JOIN roles r ON r.id = ur.role_id WHERE r.id = (select id from roles where name = 'admin')");
            if ($admins->num_rows > 0) {
                  while ($rows = $admins->fetch_object()) {
                        $admin[] = $rows;
                  }
            }
            $categories = $db->query("select * from categories");
            if ($categories->num_rows > 0) {
                  while ($rows = $categories->fetch_object()) {
                        $category[] = $rows;
                  }
            }
      }
      if (isset($_GET['sname']) && $_GET['sname'] == 'orders') {
            $orders = $db->query("select o.*, u.username as username from orders o join user u on o.user_id = u.id order by id desc ");
            if ($orders->num_rows > 0) {
                  while ($rows = $orders->fetch_object()) {
                        $order[] = $rows;
                  }
            }
      }
      if (isset($_GET['sname']) && $_GET['sname'] == 'order_details') {
            $orderdetails =  $db->query("select
            od.*,
            p.title as title,
            o.order_date
          from
            orders_details od
            join products p on od.product_id = p.id
            join orders o on o.id = od.order_id
          order by
            od.id desc");
            if ($orderdetails->num_rows > 0) {
                  while ($rows = $orderdetails->fetch_object()) {
                        $orderdetail[] = $rows;
                  }
            }
      }
      if (isset($_GET['sname']) && $_GET['sname'] == 'address') {
            $countries = $db->query("select * from countries");
            $regions = $db->query("select r.*, c.name as country from regions r join countries c on c.id = r.country_id");
            $districts = $db->query("select
            d.*, r.name as region, c.name as country
            from
              districts d
              join regions r on r.id = d.region_id
              join countries c on c.id = r.country_id");
            if ($countries->num_rows > 0 && $regions->num_rows > 0 && $districts->num_rows > 0) {
                  while ($rows = $countries->fetch_object()) {
                        $country[] = $rows;
                  }
                  while ($rows = $regions->fetch_object()) {
                        $region[] = $rows;
                  }
                  while ($rows = $districts->fetch_object()) {
                        $district[] = $rows;
                  }
            }
      }
      if (isset($_GET['sname']) && $_GET['sname'] == 'customers') {
            $customers = $db->query("select * from user where employee = 0");
            if ($customers->num_rows > 0) {
                  while ($rows = $customers->fetch_object()) {
                        $customer[] = $rows;
                  }
            }
      }
      if (isset($_GET['sname']) && $_GET['sname'] == 'admin') {
            $employees = $db->query("select u.*, r.name as role from user_role ur join user u on ur.user_id = u.id join roles r on ur.role_id = r.id where employee = 1");
            if ($employees->num_rows > 0) {
                  while ($rows = $employees->fetch_object()) {
                        $employee[] = $rows;
                  }
            }
      }
      if (isset($_GET['sname']) && $_GET['sname'] == 'roles') {
            $roles = $db->query("select * from roles");
            if ($roles->num_rows > 0) {
                  while ($rows = $roles->fetch_object()) {
                        $role[] = $rows;
                  }
            }
      }
      if (!isset($_GET['sid']) && !isset($_POST['create']) && !isset($_POST['edit'])) {
            $c_count = $db->query("select count(id) as customers from user where employee = 0");
            $o_count = $db->query("select count(id) as orders from orders ");
            $p_count = $db->query("select count(id) as products from products  ");
            $o_sum = $db->query("select sum(price) as sum from orders");
            if ($c_count->num_rows > 0 && $o_count->num_rows > 0 && $p_count->num_rows > 0 && $o_sum->num_rows > 0) {
                  while ($rows = $c_count->fetch_object()) {
                        $c_counts[] = $rows;
                  }
                  while ($rows = $o_count->fetch_object()) {
                        $o_counts[] = $rows;
                  }
                  while ($rows = $p_count->fetch_object()) {
                        $p_counts[] = $rows;
                  }
                  while ($rows = $o_sum->fetch_object()) {
                        $o_sums[] = $rows;
                  }
            }
      }
}

?>




<?php include "./assets/php/layouts/head.php"; ?>

            <?php if (!isset($_GET['sid']) && !isset($_POST['create']) && !isset($_POST['edit'])) {
                  include "./assets/php/layouts/dashboard.php";
            } ?>

            <?php if (isset($_GET['sname']) && $_GET['sname'] == 'products') {
                  include "./assets/php/tables/products.php";
            } ?>

            <?php if (isset($_GET['sname']) && $_GET['sname'] == 'orders') {
                  include "./assets/php/tables/orders.php";
            } ?>

            <?php if (isset($_GET['sname']) && $_GET['sname'] == 'order_details') {
                  include "./assets/php/tables/order_details.php";
            } ?>

            <?php if (isset($_GET['sname']) && $_GET['sname'] == 'categories') {
                  include "./assets/php/tables/categories.php";
            } ?>

            <?php if (isset($_GET['sname']) && $_GET['sname'] == 'address') {
                  include "./assets/php/tables/address.php";
            } ?>
            
            <?php if (isset($_GET['sname']) && $_GET['sname'] == 'customers') {
                  include "./assets/php/tables/user.php";
            } ?>
    
            <?php if (isset($_GET['sname']) && $_GET['sname'] == 'admin') {
                  include "./assets/php/tables/admin.php";
            } ?>
    
            <?php if (isset($_GET['sname']) && $_GET['sname'] == 'roles') {
                  include "./assets/php/tables/roles.php";
            } ?>
            <?php if (isset($_POST['create'])) {
                  include "./assets/php/forms/create.php";
            } ?>
            <?php if (isset($_POST['edit'])) {

                  include "./assets/php/forms/update.php";
            } ?>
            <?php if (isset($_POST['view'])) {
                  include "./assets/php/forms/view.php";
            } ?>
            
    
<?php include "./assets/php/layouts/headend.php"; ?>