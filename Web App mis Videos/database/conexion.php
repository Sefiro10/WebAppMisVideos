<?php
class Database{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){ //la pasamos los datos de la bd dependiendo de tu conexion
        $this->host     = 'localhost';
        $this->db       = 'proyecto_vid';
        $this->user     = 'root';
        $this->password = "";
        $this->charset  = 'utf8';
    }
    function connect(){ // esta funcion se usa en el login y en el modelo para hacer la conexion
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}
?>

