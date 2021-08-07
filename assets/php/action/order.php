<?php  

session_start();
require "./db.php";
$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();
    if (isset($_SESSION['userid'])) {
        # code...
        $userid = $_SESSION['userid'];
    }
    if (isset($_POST['order'])) {
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $country = $_POST['country'];
        $region = $_POST['region'];
        $adress = $_POST['adress'];
        $postcode = $_POST['postcode'];
        $phone = $_POST['phone'];
        $prices = $_POST['prices'];
        $status = $_POST['status'];
        if ($country && $region && $adress && $postcode && $userid  && $firstname && $lastname && $phone  && $prices && $prices ) {
           if ($db->query("INSERT INTO address(country_id,region_id,address,postal_code,user_id) VALUES ($country, $region, '$adress', $postcode, $userid)")) {
              $adress_id = $db->query("select id from address where user_id=$userid");
              $addressID = $adress_id->fetch_object();
            
              if ($db->query("UPDATE `user` SET firstname='$firstname',lastname='$lastname',addres_id=$addressID->id ,phone='$phone' WHERE id=$userid")) {
                if ($db->query(" UPDATE orders SET status= $status ,price= $prices WHERE user_id = $userid and status=1")) {
                    header("Location: /index.php?message=Order Success");
                }
              }
              else {
                  echo $db->error;
              }
           }
        }


    }
}

?>