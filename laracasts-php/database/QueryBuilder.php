<?php

class QueryBuilder {

  protected $pdo;

  public function __construct ($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table) {
    // prepare the a SQL query
    $statement = $this->pdo-> prepare("select * from {$table}");
    // execute the statement
    $statement -> execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
  }
}
