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
class Category 
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db =  new Database();
        $stmt = $db->getArray('categories');
        return $stmt;
    }

    public function createData($name='', $des='') 
    {
        $db = new Database();
        $data['name'] = $name;
        $data['description'] = $des;
        $data['create_at'] = date("Y-m-d H:i:s");
        $category = $db->insert('categories', $data);
        return $category;
    }

    public function updateData($id='', $name='', $des='') 
    {
        $db = new Database();
        $id = (int)$id;
        $data['name'] = $name;
        $data['description'] = $des;
        $data['update_at'] = date("Y-m-d H:i:s");
        $category = $db->update('categories', $data, $id);
        return $category;
    }

    public function delete($id='') 
    {
        $db = new Database();
        $id = (int)$id;
        $category = $db->delete('categories', $id);
        return $category;
    }
}
