<?php
class Database{

  private static $dbhost="localhost";
  private static $dbname="database";
  private static $dbuser="root";
  private static $dbpwd="";
  private static $conn=null;
  
  
  public function __construct(){
    die("initialisation not work");
  }
  public static function connect(){
    if(null==self::$conn){
        try {
            self::$conn= new PDO("mysql:host=".self::$dbhost.";dbname=".self::$dbname,self::$dbuser,self::$dbpwd);
        } catch (PDOException  $e) {
            die($e->getMessage());
        }
    }
    return self::$conn;
  }
  public static function disconnect(){
    self::$conn=null;
  }

}

?>