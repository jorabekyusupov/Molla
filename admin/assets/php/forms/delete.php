<?php
session_start();
require "../action/database.php";

$connect = new DB;
if ($connect) {
    if (isset($_POST['delete']) && $_POST['delete'] == 'p_delete') {
        $db = $connect->getConnect();
        $id = $_POST['id'];
        if ($db->query("delete from products where id = $id")) {
            $_SESSION['delete'] = "Product Deleted";
            header("Location: /admin/index.php?sid=1&sname=products");
        }
        else {
            $_SESSION['delete'] = "Product not Deleted:".$db->error;
            header("Location: /admin/index.php?sid=1&sname=products");
        }
    }
}





?>