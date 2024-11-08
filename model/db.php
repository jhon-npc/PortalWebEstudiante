<?php

class db{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'node207553-portalweb6019.sp1.br.saveincloud.net.br:3306';
        $this->db       = 'bdportal';
        $this->user     = 'root';
        $this->password = "EIMtyh11903";
        $this->charset  = 'utf8mb4';
    }

    public function connect() {
        try {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,  // Configurar PDO para lanzar excepciones
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
    
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo; // Retorna el objeto PDO si la conexión es exitosa
    
        } catch (PDOException $e) {
            // Mostrar el mensaje de error
            echo "Error de conexión: " . $e->getMessage();
            return null; // Retornar null si falla la conexión
        }
    }
}