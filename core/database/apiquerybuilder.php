<?php

class ApiQueryBuilder
{

  protected $pdo;
  private $errMsg = "error ngab(!!!): ";

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function login($username, $password)
  {
    // prepare statement and execute
    try {
      $statement = $this->pdo->prepare("select username, password from admin
      where username = '$username'
      and password = '$password'");
      $statement->execute();
    } catch (PDOException $ex) {
      return $this->errMsg . $ex->getMessage();
    }

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectRow($column, $value)
  {
    // prepare statement and execute
    try {
      $statement = $this->pdo->prepare("select id, username, password, fullname from admin 
          where $column = '$value'");
      $statement->execute();
    } catch (PDOException $ex) {
      return $this->errMsg . $ex->getMessage();
    }

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAll($table)
  {
    // prepare statement and execute
    try {
      $statement = $this->pdo->prepare("select * from ($table)");
      $statement->execute();
    } catch (PDOException $ex) {
      return $this->errMsg . $ex->getMessage();
    }

    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table, $param)
  {
    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(',', array_keys($param)),
      ':' . implode(', :', array_keys($param))
    );

    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute($param);
    } catch (PDOException $ex) {
      return $this->errMsg . $ex->getMessage();
    }

    return "success";
  }
}
