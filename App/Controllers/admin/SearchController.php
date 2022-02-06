<?php

namespace App\Controllers\Admin;

use \Core\View;
use App\Models\Product;
use PDO;
use \Core\Database;


/**
 * Home controller
 *
 * PHP version 7.0
 */
class SearchController extends \Core\Controller
{


    /**
     * Show the index page
     *
     * @return void
     */
    private $product;

    public function __construct(){
        $this->products = new Product();
    }
    public function search(){
        $products = $this->products->searchData($_GET['search']);
        View::render('admin/elements/search.php', $products);
    }
}
