<?php

require_once('db.php');
class teacher{
    private $nombreT;
    private $user;
    private $pass;
    public function teacherExists($user, $pass){
        $db = new db();
        $connection = $db->connect();
        $query = $connection->prepare('SELECT * FROM docente WHERE nombreDoc = :user AND password = :passw');
        $query->execute(['user' => $user, 'passw' => $pass]);

        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    } 
    public function setTeacher($user){
        $db = new db();
        $connection = $db->connect();
        $query = $connection->prepare('SELECT * FROM docente WHERE nombreDoc= :user');
        $query->execute(['user' => $user]);
        foreach($query as $currentUser){
            $this->nombreT = $currentUser['nombreDoc'];
        }
    }

    public function getTeacher(){
        return $this->nombreT;
    }

    public function setCurrentTeacher($user){
        session_start();
        $_SESSION['user'] = $user;
    }

    public function getCurrentTeacher(){
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?>