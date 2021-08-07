<?php
session_start();
require "./db.php";
$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $users = $db->query("select * from user where status = 1");
        $admins = $db->query("select *, u.id as userid , r.id as role from user_role ur right join user u on ur.user_id = u.id left join roles r on ur.role_id = r.id where u.status = 1");
        if ($admins->num_rows > 0) {
            while ($rows = $admins->fetch_object()) {
                $admin[] = $rows;
            }
        }
        if ($users->num_rows > 0) {
            while ($rows = $users->fetch_object()) {
                $user[] = $rows;
            }
        }

        foreach ($admin as $item) {
            if (strtolower($username) == $item->username && strtolower($password) == $item->password) {
                $_SESSION['username'] = $item->username;
                $_SESSION['userid'] = $item->userid;



                if ($item->employee == 1) {

                    $_SESSION['employee'] = $item->employee;
                    $_SESSION['role'] = $item->role;
                    $_SESSION['admin'] = bin2hex(random_bytes(20));
                    $_SESSION['username'] = $item->username;

                    header("Location: /index.php");
                } 
                else {
                    header("Location: /index.php");
                }
            } 
            
        }
    } else {
      echo "Error submit";
     
    }
}
