<?php
session_start();
require "./db.php";
$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();
    if (isset($_POST['signup'])) {
        $username = strtolower($_POST['username']);
        $password = strtolower($_POST['password']);
       if ($username && $password) {
          if ($db->query("INSERT INTO user (username, password) VALUES ('$username', '$password')")) {
            header("Location: /index.php?lname=login&message=Sing up Success, Please Sign In");
          }
          else{
            header("Location: /index.php?lname=login&message=ERROR SIGN UP");
          }
       }
    }

}




?>