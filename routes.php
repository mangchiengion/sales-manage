<?php

// $router->get('', ['controller' => 'Home', 'action' => 'index']);

$router->get('login', ['controller' => 'LoginController', 'action' => 'getLogin']);

$router->post('login', ['controller' => 'LoginController', 'action' => 'postLogin']);

/*----------admin---------*/
//category
$router->get('admin/category/create', ['controller' => 'admin\CategoryController', 'action' => 'create']);
$router->post('admin/category/create', ['controller' => 'admin\CategoryController', 'action' => 'store']);
$router->get('admin/category/list', ['controller' => 'admin\CategoryController', 'action' => 'index']);
$router->get('admin/category/edit', ['controller' => 'admin\CategoryController', 'action' => 'edit']);
$router->post('admin/category/edit', ['controller' => 'admin\CategoryController', 'action' => 'update']);
$router->get('admin/category/delete', ['controller' => 'admin\CategoryController', 'action' => 'delete']);

//product
$router->get('admin/product/create', ['controller' => 'admin\ProductController', 'action' => 'create']);
$router->post('admin/product/create', ['controller' => 'admin\ProductController', 'action' => 'store']);
$router->get('admin/product/list', ['controller' => 'admin\ProductController', 'action' => 'index']);
$router->get('admin/product/edit', ['controller' => 'admin\ProductController', 'action' => 'edit']);
$router->post('admin/product/edit', ['controller' => 'admin\ProductController', 'action' => 'update']);
$router->get('admin/product/delete', ['controller' => 'admin\ProductController', 'action' => 'delete']);

//user
$router->get('admin/user/create', ['controller' => 'admin\UserController', 'action' => 'create']);
$router->post('admin/user/create', ['controller' => 'admin\UserController', 'action' => 'store']);
$router->get('admin/user/list', ['controller' => 'admin\UserController', 'action' => 'index']);
$router->get('admin/user/edit', ['controller' => 'admin\UserController', 'action' => 'edit']);
$router->post('admin/user/edit', ['controller' => 'admin\UserController', 'action' => 'update']);
$router->get('admin/user/delete', ['controller' => 'admin\UserController', 'action' => 'delete']);

//option
$router->get('admin/option/list', ['controller' => 'admin\OptionController', 'action' => 'index']);
$router->get('admin/option/edit', ['controller' => 'admin\OptionController', 'action' => 'edit']);
$router->post('admin/option/edit', ['controller' => 'admin\OptionController', 'action' => 'update']);
$router->get('admin/option/delete', ['controller' => 'admin\OptionController', 'action' => 'delete']);

//Contact
$router->get('admin/page-information/list', ['controller' => 'admin\ContactController', 'action' => 'index']);
$router->get('admin/page-information/edit', ['controller' => 'admin\ContactController', 'action' => 'edit']);
$router->post('admin/page-information/edit', ['controller' => 'admin\ContactController', 'action' => 'update']);

//searchProduct
$router->get('search', ['controller' => 'admin\SearchController', 'action' => 'search']);


/*----------Homepage---------*/

$router->get('', ['controller' => 'users\HomeController', 'action' => 'index']);
$router->get('product/detail', ['controller' => 'users\HomeController', 'action' => 'productDetail']);

$router->get('addProduct', ['controller' => 'users\HomeController', 'action' => 'addProduct']);

$router->get('cart', ['controller' => 'users\HomeController', 'action' => 'cart']);