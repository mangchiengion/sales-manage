<?php

namespace App\Controllers\admin;

use \Core\View;
use App\Models\Contact;
use PDO;
use \Core\Database;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class ContactController extends \Core\Controller
{


    /**
     * Show the index page
     *
     * @return void
     */
    private $contact;

    public function __construct() {
        $this->contact = new Contact();
    }

    public function index() {
        $contact = $this->contact->getAll();
        if($contact != null) {
            View::render('admin/elements/information/index.php', $contact);
        } else {
            View::render('admin/elements/information/index.php');
        }
    }

    public function edit() 
    {
        if(isset($_GET['id'])) {
            $db = new Database();
            $id = (int)$_GET['id'];
            $contact = $db->getRowArray('contact', $id);
            if ($contact != null) {
                View::render('admin/elements/information/edit.php', $contact);
            } else {
                View::render('admin/elements/information/index.php');
            }
        }
    }

    public function update() {
        if(isset($_POST['submit'])) {
            if($_POST['id'] && $_POST['name'] != '' && $_POST['email'] !='' && $_POST['phone'] != '' && $_POST['content'] !='') {
                $check = $this->contact->updateData($_POST['id'],$_POST['name'],$_POST['email'],$_POST['phone'], $_POST['content']);
                if($check) {
                    header('location:/admin/page-information');
                }
            } else {
                echo "<script>";
                echo "alert('Failed to edit, please try again!')";
                echo "</script>";
            }
        } 
    }

}
