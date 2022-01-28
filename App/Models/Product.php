<?php

namespace App\Models;

use PDO;
use \Core\Database;
date_default_timezone_set('Asia/Ho_Chi_Minh');

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Product
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db =  new Database();
        $stmt = $db->getArray('products');
        return $stmt;
    }

    public function createData($data) 
    {
        $db = new Database();
        $data['create_at'] = date("Y-m-d H:i:s");
        $product = $db->insert('products', $data);
        return $product;
    }

    public function updateData($id='',$name='',$price='',$sale='',$status='',$short_des='',$des='', $img='',$cate='') 
    {
        $db = new Database();
        $id = (int)$id;
        $data['name'] = $name;
        $data['price'] = $price;
        $data['sale'] = $sale;
        $data['status'] = $status;
        $data['short_description'] = $short_des;
        $data['description'] = $des;
        $data['images'] = $img;
        $data['id_category'] = $cate;
        $data['update_at'] = date("Y-m-d H:i:s");
        $product = $db->update('products', $data, $id);
        return $product;
    }

    public function delete($id='') 
    {
        $db = new Database();
        $id = (int)$id;
        $product = $db->delete('products', $id);
        return $product;
    }
    
}
