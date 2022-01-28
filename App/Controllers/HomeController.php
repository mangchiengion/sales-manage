<?php

namespace App\Controllers\Users;

use \Core\View;
use App\Models\Category;
use App\Models\Product;
use PDO;
use \Core\Database;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class HomeController extends \Core\Controller
{


    /**
     * Show the index page
     *
     * @return void
     */

    private $category;
    private $product;
    public function __construct(){
        $this->product = new Product();
        $this->category = new Category();
    }
    
   public function index()
   {
        $data['categories'] = $this->category->getAll();
        $data['products'] = $this->product->getAll();
       View::render('users/elements/index.php', $data);
   }
   public function productDetail()
   {
        $id = (int)$_GET['id'];
        $db = new Database();
        $data['product']= $db->getRowArray('products', $id);
        $data['categories'] = $this->category->getAll();
        $data['products'] = $this->product->getAll();
        View::render('users/elements/product_detail.php', $data);
   }

}
