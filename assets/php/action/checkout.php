<?php

session_start();
require "./db.php";
$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();
 
    $date = date("Y-m-d");

    if (isset($_SESSION['userid'])) {

        $userid = $_SESSION['userid'];
    }
    else{
        header("Location: /index.php?lname=login");
    }
    if ($_POST['cart']) {
        $orders = $db->query("SELECT * FROM orders where user_id = $userid and status = 1 and order_date = '$date'");
        $order = $orders->fetch_object();

        if ($orders->num_rows > 0) {
            $id = $order->id;
            $order_date = $order->order_date;
            $p_id = $_POST['id'];
            $price = $_POST['price'];
            if (isset($_POST['count'])) {

                $title = $_POST['title'];
                $count = $_POST['count'];
                if ($cart = $db->query("INSERT INTO orders_details (order_date, order_id, product_id, price, count) VALUES ('$order_date',$id,$p_id,$price,$count)")) {

                    header("Location: /index.php?name=$title&pid=$p_id");
                } else {
                    echo $db->error;
                }
            } else {
                $href = $_POST['href'];
                $cid = $_POST['cid'];
                $cart = $db->query("INSERT INTO orders_details (order_date, order_id, product_id, price) VALUES ('$order_date',$id,$p_id,$price)");
                header("Location: /index.php?sname=products&name=$href&id=$cid");
            }
        } else {
            $ord = $db->query("INSERT INTO orders (order_date, user_id) VALUES ('$date', $userid)");
            $orders = $db->query("SELECT * FROM orders where user_id = $userid and status = 1 and order_date = '$date'");
            $order = $orders->fetch_object();
            if (isset($_POST['count'])) {
                $id = $order->id;
                $order_date = $order->order_date;
                $p_id = $_POST['id'];
                $title = $_POST['title'];
                $price = $_POST['price'];
                $count = $_POST['count'];
                $cart = $db->query("INSERT INTO orders_details (order_date, order_id, product_id, price, count) VALUES ('$order_date',$id,$p_id,$price,$count)");
                header("Location: /index.php?name=$title&pid=$p_id");
            } else {
                $orders = $db->query("SELECT * FROM orders where user_id = $userid and status = 1 and order_date = '$date'");
                $order = $orders->fetch_object();
                $id = $order->id;
                $order_date = $order->order_date;
                $p_id = $_POST['id'];
                $price = $_POST['price'];
                $href = $_POST['href'];
                $cid = $_POST['cid'];
                $cart = $db->query("INSERT INTO orders_details (order_date, order_id, product_id, price) VALUES ('$order_date',$id,$p_id,$price)");
                header("Location: /index.php?sname=products&name=$href&id=$cid");
            }
        }
    }
}
