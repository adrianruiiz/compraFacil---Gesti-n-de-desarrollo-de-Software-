<?php
class Database
{
    private static $host = '127.0.0.1:3307' ;
    private static $user = 'root';
    private static $pass = '';
    private static $db = 'practica1' ;
     
    private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$host.";"."dbname=".self::$db, self::$user, self::$pass); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>