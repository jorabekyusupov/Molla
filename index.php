<?php
session_start();
require "./assets/php/action/db.php";
$connect = new DB;
if ($connect) {
    if (isset($_SESSION['userid'])) {
        # code...
        $userid = $_SESSION['userid'];
    }
    $date = date("Y-m-d");
    $db = $connect->getConnect();

    $categories = $db->query("select * from categories where status = 1 and parent_id IS NULL");
   
    $products_index = $db->query("select p.*, c.name as category, c.href as href, c.id as cid from products p join categories c on p.category_id = c.id where c.status = 1 and p.status = 1 order by id desc");
    $prod = $db->query("select p.*, c.name as category, c.href as href, c.id as cid from products p join categories c on p.category_id = c.id where c.status = 1 and p.status = 1 order by p.id desc");
 
    if ($prod->num_rows > 0) {
        while ($rows = $prod->fetch_object()) {
            $pro[] = $rows;
        }
    }
   
    if ($products_index->num_rows > 0) {
        while ($rows = $products_index->fetch_object()) {
            $pi[] = $rows;
        }
    }

    if ($categories->num_rows > 0) {
        while ($rows = $categories->fetch_object()) {
            $category[] = $rows;
        }
    }
    if (isset($userid)) {
        
        $cart = $db->query("select *, p.price as prices, p.id as product from orders_details od join products p on p.id = od.product_id join orders o on o.id = od.order_id where od.order_date = '$date' and o.user_id = $userid and o.status = 1 order by od.id desc");
  
        if ($cart->num_rows > 0) {
            while ($rows = $cart->fetch_object()) {
                $carts[] = $rows;
            }
        }
    }
    if (isset($_GET['id'])) {
        # code...
        echo $c_id = $_GET['id'];

        $products = $db->query("select p.*, c.name as category, c.href as href, c.id as cid from products p join categories c on c.id = p.category_id where p.status = 1 and p.category_id = $c_id ");
        if ($products->num_rows > 0) {
            while ($rows = $products->fetch_object()) {
                $producte[] = $rows;
            }
        }
    }
    if (isset($_GET['name']) && isset($_GET['pid'])) {
        $id = $_GET['pid'];
        $single_p = $db->query("select * from products where id = $id");
        if ($single_p->num_rows > 0) {
            while ($rows = $single_p->fetch_object()) {
                $single[] = $rows;
            }
        }
    }
    // $_SESSION['username'] = 'jorabek';

}



?>

<?php include "./assets/php/layouts/head.php"; ?>
<div class="page-wrapper">
    <?php include "./assets/php/layouts/header.php"; ?>
    <?php
    if (isset($_GET['name']) && isset($_GET['pid'])) {
        include "./assets/php/form/product.php";
    } else if (!isset($_GET['name']) && !isset($_GET['lname']) && !isset($_POST['check'])) {
        include "./assets/php/form/index.php";
    } else if (isset($_GET['name']) && isset($_GET['sname']) && $_GET['sname'] == 'products') {
        include "./assets/php/form/products.php";
    } else if (isset($_GET['lname']) && $_GET['lname'] == 'login') {
        include "./assets/php/form/login.php";
    } else if (isset($_GET['name']) && $_GET['name'] == 'cart') {
        include "./assets/php/form/cart.php";
    } else if (isset($_POST['check']) && $_POST['check'] == 'check') {
        include "./assets/php/form/checkout.php";
    }


    ?>


    <?php include "./assets/php/layouts/footer.php"; ?>
    <!-- End .footer -->
</div><!-- End .page-wrapper -->
<?php include "./assets/php/layouts/mobile_menu.php " ?>

<?php include "./assets/php/layouts/foot.php " ?>