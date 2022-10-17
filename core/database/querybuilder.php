<?php

class QueryBuilder
{

  protected $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    // prepare statement and execute
    $statement = $this->pdo->prepare("select * from ($table)");
    $statement->execute();

    // store results to variable $result
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

}