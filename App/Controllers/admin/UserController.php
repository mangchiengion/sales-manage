<?php

namespace App\Controllers\Admin;

use \Core\View;
use App\Models\User;
use PDO;
use \Core\Database;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class UserController extends \Core\Controller
{


    /**
     * Show the index page
     *
     * @return void
     */
    private $user;
    private $pass;
    public function __construct(){
        $this->user = new User();
    }
    public function create()
    {
        View::render('admin/elements/users/add.php');
    }
    public function store()
    {
        if(isset($_POST['submit'])){
            if($_POST['email'] != '' && $_POST['password'] != '' && $_POST['address'] != '' && $_POST['phone'] != ''&& $_POST['role'] != ''){
                $pass = $_POST['password'];
                $check = $this->user->createData($_POST['name'],$_POST['email'],$_POST['password'],$_POST['address'],$_POST['phone'],$_POST['role']);
                if($check){
                    header('location:/admin/user/list');
                }
            }
            else{
                header('location:/admin/user/create');
            }
        }
    }
    public function index()
    {
        $users = $this->user->getAll();
        View::render('admin/elements/users/index.php', $users);
    }    
    public function edit() {
        if(isset($_GET['id'])) {
            $db = new Database();
            $id = (int)$_GET['id'];
            $user = $db->getRowArray('users', $id);
            if ($user != NULL) {
                View::render('admin/elements/users/edit.php', $user);
            } else {
                header('location:/admin/user/list');
            }
        }
    }
    public function update() {
        if(isset($_POST['submit'])){
            if($_POST['id'] && $_POST['name'] != '' && $_POST['email'] != '' && $_POST['address'] != '' && $_POST['phone'] != '' && $_POST['role'] != ''){
                $check = $this->user->updateData($_POST['id'],$_POST['name'], $_POST['email'],$_POST['address'],$_POST['phone'], $_POST['role']);
                if($check){
                    header('location:/admin/user/list');
                }
            } else{
                echo "<script>";
                echo "alert('Failed to edit, please try again!')";
                echo "window.location.href='http://mvc/admin/user/list'";
                echo "</script>";
            }
        }
}
    public function delete(){
        $id = $_GET['id'];
        $delete = $this->user->delete($id);
        if($delete){
            header('location:/admin/user/list');
        }
    }

}
