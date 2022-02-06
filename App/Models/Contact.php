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
class Contact 
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db =  new Database();
        $stmt = $db->getArray('contact');
        return $stmt;
    }
    public function updateData($id='', $name='', $email='',$phone='',$content='') 
    {
        $db = new Database();
        $id = (int)$id;
        $data['name'] = $name;
        $data['email'] = $email;
        $data['phone'] = $phone;
        $data['content'] = $content;
        $data['update_at'] = date("Y-m-d H:i:s");
        $contact = $db->update('contact', $data, $id);
        return $contact;
    }
}
