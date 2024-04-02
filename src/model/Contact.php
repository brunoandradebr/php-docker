<?php

namespace App\Model;

use App\System\Database;

class Contact {

  static function list() {

    $db = Database::connect();

    $query = $db->query('select * from contacts');

    $contacts = $query->fetchAll($db::FETCH_OBJ);

    return $contacts;
  }

  static function getById($id) {

    $db = Database::connect();

    $prepare = $db->prepare('select * from contacts where id = :id');
    $prepare->execute([':id' => $id]);

    $contact = $prepare->fetch($db::FETCH_OBJ);

    return $contact;
  }

}
