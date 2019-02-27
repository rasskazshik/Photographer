<?php
class DatabaseAPI{  
    //данные для подключения к базе данных
    private static $host = "localhost";
    private static $db_name = "Photographer";
    private static $username = "root";
    private static $password = "mysql";
    public static $conn;    
    //метод для получения дескриптора подключения к базе данных
    private function Connect(){  
        self::$conn = null;  
        self::$conn = new mysqli(self::$host, self::$username, self::$password, self::$db_name);
        self::$conn->set_charset("utf8");
        return self::$conn;
    }
    //метод для разрыва соединения с базой данных
    private function Disconnect(){
        self::$conn->close();
    }
    //метод для передачи запроса к бд с отслеживанием закрытия соединения
    static public function Query($queryString)
    {
        self::Connect();        
        $result=self::$conn->query($queryString);        
        self::Disconnect();
        return $result;        
    }
    //метод для передачи запроса добавления к бд с отслеживанием закрытия соединения и возвратом идентификатора добавленной записи
    static public function Insert($queryString)
    {
            self::Connect();        
            $result = self::$conn->query($queryString);
            $id=-1;
            if($result)
            {
                $id = self::$conn->insert_id;
            }
            self::Disconnect();
            return $id;
    }    
}