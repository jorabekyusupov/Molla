<?php
session_start();
require "./database.php";
$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();
    if (isset($_POST['p_update'])) {
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
        if (isset($_POST['p_update'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $name = $_POST['name'];
            $discription = $_POST['discription'];
            $image = $path1;
            $images = implode(",", $path2);
            $user_id = $_POST['user_id'];
            $price = $_POST['price'];
            $category_id = $_POST['category_id'];
            $status = $_POST['status'];
            $updated_at = $_POST['updated_at'];

            if ($db->query("UPDATE products SET title='$title',name='$name',discription='$discription', image = '$image',images = '$images',user_id=$user_id,price=$price,category_id=$category_id,status= $status,updated_at='$updated_at' WHERE id=$id;")) {
                $_SESSION['updated'] = "Product Updated Success";
              
                header("Location: /admin/index.php?sid=1&sname=products");
            } else {
                $_SESSION['updated'] = "Updated Error:" . $db->error;
                header("Location: /admin/index.php?sid=1&sname=products");
            }
        } else {
            $_SESSION['updated'] = "Error";
            header("Location: /admin/index.php?sid=1&sname=products");
        }
    }
}
