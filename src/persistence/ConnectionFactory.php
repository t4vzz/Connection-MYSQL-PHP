<?php 

    namespace App\persistence; 

    class ConnectionFactory{
        static $dbuser = "root";
        static $dbname = "pet";
        static $dbhost = "localhost";
        static $dbport = "3306";
        static $dbpass = "";


        
        
        static $connectionInstance; 
        public static function getConnection(){
       
            try{
                $strConn = "mysql:host=".self::$dbhost.";dbname=".self::$dbname.";dbpass".self::$dbpass;
                var_dump($strConn);
                self::$connectionInstance = new \PDO($strConn , self::$dbuser, self::$dbpass);
                var_dump(self::$connectionInstance);
                self::$connectionInstance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                }catch(\PDOException $e){
                    echo print_r($e, true);
                }
    
                return self::$connectionInstance;
            }
        }

