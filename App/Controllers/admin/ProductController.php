<?php

namespace App\Controllers\admin;

use \Core\View;
use App\Models\Product;
use App\Models\Category;
use PDO;
use \Core\Database;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class ProductController extends \Core\Controller
{


    /**
     * Show the index page
     *
     * @return void
     */
    private $product;
    private $category;

    public function __construct() {
        $this->product = new Product();
        $this->category = new Category();
    }

    public function index() {
        $db = new Database();
        $arr['product'] = $db->getArray('products');
        $arr['categories'] = $db->getArray('categories');
        if($arr != null) {
            View::render('admin/elements/products/index.php', $arr);
        } else {
            View::render('admin/elements/products/index.php');
        }
    }

    public function create()
    {
        $categories = $this->category->getAll();
        View::render('admin/elements/products/add.php', $categories);
       
    }

    public function store()
    {
        if(isset($_POST['submit'])) {
            if($_POST['name'] != '' && ($_POST['price']) !='' && ($_POST['sale']) !='' && ($_POST['short_description']) !='' && ($_POST['description']) !='' && ($_POST['status']) !='') {
                if($_FILES['images']['type'] == 'image/png' || $_FILES['images']['type'] == 'image/jpg' || $_FILES['images']['type'] == 'image/gif' || $_FILES['images']['type'] == 'image/jpeg' ) {
                    $path = "uploads/";
                    $name = date('Y').date('m').date('d').date('H').date('i').date('s').$_FILES['images']['name'];
                    $image = $path.$name;
                    $tmp_name = $_FILES['images']['tmp_name'];
                    move_uploaded_file($tmp_name, $image);
                }
                $data = [
                    'name'=>$_POST['name'],
                    'price'=>$_POST['price'],
                    'sale'=>$_POST['sale'],
                    'status'=>$_POST['status'],
                    'short_description'=>$_POST['short_description'],
                    'description'=>$_POST['description'],
                    'images'=>$image,
                    'id_category'=>$_POST['category_id'],
                ];
                $check = $this->product->createData($data);
                if($check) {
                    header('location:/admin/product/list');
                }
            } else {
                echo "<script>";
                echo "alert('Failed to edit, please try again!')";
                echo "</script>";
            }
        }       
    }

    public function edit() 
    {
        if(isset($_GET['id'])) {
            $db = new Database();
            $id = (int)$_GET['id'];
            $arr['product'] = $db->getRowArray('products', $id);
            $arr['categories'] = $db->getArray('categories');

            if ($arr != null) {
                View::render('admin/elements/products/edit.php', $arr);
            } else {
                View::render('admin/elements/products/index.php');
            }
        }
    }

    public function update() {
        if(isset($_POST['update'])) {
            if($_POST['id'] && $_POST['name'] != '' && ($_POST['price']) !='' && ($_POST['sale']) !='' && ($_POST['short_description']) !='' && ($_POST['description']) !='' && ($_POST['status']) !='') {
                
                if($_FILES['images']['type'] == 'image/png' || $_FILES['images']['type'] == 'image/jpg' || $_FILES['images']['type'] == 'image/gif' || $_FILES['images']['type'] == 'image/jpeg' ) {
                    $path = "uploads/";
                    $name = date('Y').date('m').date('d').date('H').date('i').date('s').$_FILES['images']['name'];
                    $image = $path.$name;
                    $tmp_name = $_FILES['images']['tmp_name'];
                    move_uploaded_file($tmp_name, $image);
                }


                if (isset($_FILES['images'])) {
                    
                } else {
                    
                }

                    

                $check = $this->product->updateData($_POST['id'],$_POST['name'],$_POST['price'],$_POST['sale'],$_POST['status'],$_POST['short_description'],$_POST['description'],$image,$_POST['category_id']);
                if($check) {
                    header('location:/admin/product/list');
                } else {
                echo "<script>";
                echo "alert('Failed to edit, please try again!')";
                echo "</script>";
                }
            }
        } 
    }

    public function delete()
    {
        $id = $_GET['id'];
        $delete = $check = $this->product->delete($id);
        if($delete) {
            header('location:/admin/product/list');
        }
    }
}
