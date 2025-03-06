<?php

namespace App\System;

final class Database {
  private static ?\PDO $instance;

  private function __construct() {
  }

  private function __clone() {
  }

  public function __wakeup() {
  }

  public static function connect(): \PDO {
    if (!isset(self::$instance)) {
      self::$instance = new \PDO('mysql:host=database;dbname='.getenv('DB_NAME').';charset=utf8', getenv('DB_USER') , getenv('DB_PASS'));
      self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      self::$instance->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    }

    return self::$instance;
  }
}