<?php

namespace App\Models;

use PDO;
use \Core\Database;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class User 
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db =  new Database();
        $stmt = $db->getArray('users');
        return $stmt;
    }

    public static function userLogin($email, $password){
        $db = new Database();
        $user = $db->login('users', $email, $password);
        return $user;
    }
    public static function createData($name, $email, $pass, $address, $phone, $role)
    {
        $data['create_at'] = date("Y-m-d H:i:s");
        $db = new Database();
        $data['name'] = $name;
        $data['email'] = $email;
        $data['password'] = md5($pass);
        $data['address'] = $address;
        $data['phone'] = $phone;
        $data['role'] = $role;
        $user = $db->insert('users', $data);
        return $user;
    }
    public static function updateData($id='', $name='', $email='', $address='', $phone='', $role='')
    {
        $db = new Database();
        $id = (int)$id;
        $data['update_at'] = date("Y-m-d H:i:s");
        $data['name'] = $name;
        $data['email'] = $email;
        $data['address'] = $address;
        $data['phone'] = $phone;
        $data['role'] = $role;
        $user = $db -> update('users', $data, $id);
        return $user;
    }
    public static function delete($id='')
    {
        $db = new Database();
        $id = (int)$id;
        $delete = $db -> delete('users', $id);
        return $delete;
    }   
}
