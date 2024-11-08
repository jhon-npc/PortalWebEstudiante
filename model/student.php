<?php

require_once('db.php');
class student{
    private $nombre;
    private $user;
    private $pass;
    public function studentExists($user, $pass){
        $db = new db();
        $connection = $db->connect();
        $query = $connection->prepare('SELECT * FROM usuario WHERE nombreUsu = :user AND password = :passw');
        $query->execute(['user' => $user, 'passw' => $pass]);

        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    } 

    public function setStudent($user){
        $db = new db();
        $connection = $db->connect();
        $query = $connection->prepare('SELECT * FROM usuario WHERE nombreUsu= :user');
        $query->execute(['user' => $user]);
        foreach($query as $currentUser){
            $this->nombre = $currentUser['nombreUsu'];
        }
    }

    public function getStudent(){
        return $this->nombre;
    }

    public function setCurrentStudent($user){
        session_start();
        $_SESSION['user'] = $user;
    }

    public function getCurrentStudent(){
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?>