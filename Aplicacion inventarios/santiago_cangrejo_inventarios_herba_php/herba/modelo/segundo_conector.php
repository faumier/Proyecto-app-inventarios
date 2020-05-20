<?php

class BD {
    
    private $host;
    private $db;
    private $user;
    private $passw;
    
    public function __construct() {
        $this->host ='localhost';
        $this->db='inventariosherva';
        $this->user='root';
        $this->passw='';}
        
    
function connect (){
    try {$connection ="mysql:host=" . $this->host . ";dbname=". $this->db;
    
    $options=[
        
         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        
         PDO::ATTR_EMULATE_PREPARES => false,
    ];
    
    $pdo = new PDO($connection, $this->user, $this->passw, $options);
    return $pdo;
    
    
    } catch (PDOException $e) {
        
        print_r('Error conection:'. $e->getMessage());
        
    }
}
    


}

$co=new BD;

