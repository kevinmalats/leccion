<?php
include_once('database.php');



define("DB_HOST", "ec2-54-204-43-7.compute-1.amazonaws.com");
define("DB_USER", "bataujzvzzfwph");
define("DB_PASS", "a44f407d12adf1cdc18763b3dea5d3d869721b26ba71e163729d0f6b84f00f36");
define("DB_NAME", "df3snna0cj0pb5");

class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;

// Define configuration
/*define("DB_HOST", "ec2-23-23-110-26.compute-1.amazonaws.com");
define("DB_USER", "gcsmegnwpekghd");
define("DB_PASS", "5b2b53bc89ee99edb82a8bfd1953b764dd9d870aca60d2918b7876687ff97625");
define("DB_NAME", "d2l7s76r7g7gs6");
*/
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>