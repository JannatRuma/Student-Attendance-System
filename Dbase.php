<?php
require_once("config.php");

/**
 * Database connection and query
 */
class Database{
  private $dbhost = DB_HOST;
  private $dbuser = DB_USER;
  private $dbpass = DB_PASS;
  private $dbname = DB_NAME;

  public $link;
  public $error;

  public function __construct(){
    $this->link = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
    if(!$this->link){
      $this->error = "Connection fail :".$this->link->connect_error;
      return false;
    }
  }

  public function sql($query){
    $stmt = $this->link->query($query) or die($this->error.__LINE__);
    return $stmt;
  }

  public function insert($data, $table){
      $key = array_keys($data);
      $val = array_values($data);

      $stmt = "INSERT INTO $table(".implode(',',$key).") VALUES ('".implode("','", $val)."')";
      $run = $this->link->query($stmt);

      return $run;
  }

}

$db = new Database();
