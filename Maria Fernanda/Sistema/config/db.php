<?php
class Database{
    private static $conn;
    public static function getConnection(){
        if(!self::$conn){
            self::$conn = new mysqli("localhost",
                                    "root",
                                    "root",
                                    "ELETRODOMESTICOS_SAEP_DB");
            if(self::$conn->connect_error){
                die("Falha na conexão!");
            }   
        }
        return self::$conn;
    } 
}
?>