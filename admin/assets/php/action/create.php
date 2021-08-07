<?php
session_start();
require "./database.php";
$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();
    if (isset($_POST['c_create'])) {
        $name = $_POST['name'];
        if (isset($_POST['parent_id'])) {
            $parent_id = $_POST['parent_id'];
            if ($db->query("insert into categories (name, parent_id) values ('$name', $parent_id)")) {
                $_SESSION['create'] = "Category Save Success";
                header("Location: /admin/index.php?sid=1&sname=categories");
            } else {
                $_SESSION['create'] = "Error" . $db->error;
                header("Location: /admin/index.php?sid=1&sname=categories");
            }
        } else {
            if ($db->query("insert into categories (name) values ('$name')")) {
                $_SESSION['create'] = "Category Save Success";
                header("Location: /admin/index.php?sid=1&sname=categories");
            } else {
                $_SESSION['create'] = "Error" . $db->error;
                header("Location: /admin/index.php?sid=1&sname=categories");
            }
        }
    }
    if (isset($_POST['p_create'])) {
        if (isset($_FILES['file'])) {
            $countfiles = count($_FILES['file']['name']);
            $folder_read = '/assets/images/products/';
            $folder = '../../../../assets/images/products/';
            for ($i = 0; $i < $countfiles; $i++) {
                $filename = $_FILES['file']['name'][$i];
                $path = $folder . $filename;
                if (file_exists($path)) {
                    unlink($path);
                    if ($_FILES['file']['size'][$i] > 50000000) {
                        echo "faylni hajmi 5mb dan ortib ketdi";
                        die();
                    } else {
                        $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                        if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'bmp') {
                            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $path)) {
                                $path2[] =  $folder_read . $_FILES['file']['name'][$i];
                            } else {
                                echo "error IMAGE";
                            }
                        }
                    }
                } else {
                    if ($_FILES['file']['size'][$i] > 50000000) {
                        echo "faylni hajmi 5mb dan ortib ketdi";
                        die();
                    } else {
                        $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                        if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'bmp') {
                            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $path)) {
                                $path2[] =  $folder_read . $_FILES['file']['name'][$i];
                            } else {
                                echo "error IMAGE";
                            }
                        }
                    }
                }
            }
        } else {
            echo "Image null!!";
        }

        if (isset($_FILES['image'])) {
            $folder_read = '/assets/images/products/';
            $folder = '../../../../assets/images/products/';
            $path = $folder . $_FILES['image']['name'];
            if (file_exists($path)) {
                unlink($path);
                if ($_FILES['image']['size'] > 50000000) {
                    echo "faylni hajmi 5mb dan ortib ketdi";
                    die();
                } else {
                    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'bmp') {
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                            $path1 =  $folder_read . $_FILES['image']['name'];
                        } else {
                            echo "error IMAGE";
                        }
                    }
                }
            } else {
                if ($_FILES['image']['size'] > 50000000) {
                    echo "faylni hajmi 5mb dan ortib ketdi";
                    die();
                } else {
                    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'bmp') {
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                            $path1 =  $folder_read . $_FILES['image']['name'];
                        } else {
                            echo "error IMAGE";
                        }
                    }
                }
            }
        } else {
            echo "Image null!!";
        }

        if (isset($_POST['p_create'])) {
            $title = $_POST['title'];
            $name = $_POST['name'];
            $discription = $_POST['discription'];
            $image = $path1;
            $images = implode(",", $path2);
            $user_id = $_POST['user_id'];
            $price = $_POST['price'];
            $category_id = $_POST['category_id'];
            $status = $_POST['status'];

            if ($db->query("insert into products (title,name,discription,image,images,user_id,price,category_id,status) values 
        ('$title','$name','$discription','$image','$images',$user_id,$price,$category_id,$status)")) {
                $_SESSION['create'] = "products Save Success";
                header("Location: /admin/index.php?sid=1&sname=products");
            } else {
                $_SESSION['create'] = "Error" . $db->error;
                header("Location: /admin/index.php?sid=1&sname=products");
            }
        }
        else {
            $_SESSION['create'] = "Error";
            header("Location: /admin/index.php?sid=1&sname=products");
        }
    }
}
