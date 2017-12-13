<?php

  class Connection {

    public static function make() {
      try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root');// what kind of db and which host and dbName, username , password
      } catch (PDOException $e) {
        die($e->getMessage());
      }
    }
  }
