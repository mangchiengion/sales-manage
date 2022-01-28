<?php

namespace App\Controllers\admin;

use \Core\View;
use App\Models\Category;
use PDO;
use \Core\Database;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class CategoryController extends \Core\Controller
{


    /**
     * Show the index page
     *
     * @return void
     */
    private $category;

    public function __construct() {
        $this->category = new Category();
    }

    public function index() {
        $categories = $this->category->getAll();
        if($categories != null) {
            View::render('admin/elements/categories/index.php', $categories);
        } else {
            View::render('admin/elements/categories/index.php');
        }
    }

    public function create()
    {
        View::render('admin/elements/categories/add.php');
       
    }

    public function store()
    {
        if(isset($_POST['submit'])) {
            if($_POST['name'] != '' && ($_POST['description']) !='') {
                $check = $this->category->createData($_POST['name'], $_POST['description']);
                if($check) {
                    header('location:/admin/category/list');
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
            $category = $db->getRowArray('categories', $id);
            if ($category != null) {
                View::render('admin/elements/categories/edit.php', $category);
            } else {
                View::render('admin/elements/categories/index.php');
            }
        }
    }

    public function update() {
        if(isset($_POST['submit'])) {
            if($_POST['id'] && $_POST['name'] != '' && ($_POST['description']) !='') {
                $check = $this->category->updateData($_POST['id'],$_POST['name'], $_POST['description']);
                if($check) {
                    header('location:/admin/category/list');
                }
            } else {
                echo "<script>";
                echo "alert('Failed to edit, please try again!')";
                echo "</script>";
            }
        } 
    }

    public function delete()
    {
        $id = $_GET['id'];
        $delete = $check = $this->category->delete($id);
        if($delete) {
            header('location:/admin/category/list');
        }
    }
}
