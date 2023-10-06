<?php
class DBConnection
{
  private $host;
  private $user;
  private $pass;
  private $dbname;
  private $conn;
  public function __construct()
  {
    $this->host = "localhost";
    $this->user = "root";
    $this->pass = "";
    $this->dbname = "phongmach";
    try {
      $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
      
      $this->conn->exec('set names utf8');
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }
  public function getConnection()
  {
    return $this->conn;
  }
}

