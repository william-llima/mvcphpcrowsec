<?php
class User{
    public $id;
    public $username;
    public $password;
    public $connection;

    public function __construct(){
        $this->connection = new mysqli("localhost","live_user","senha@123","livecadu");
    }

    public function getAll(){
        $sql = "SELECT * FROM user";
        $result = $this->connection->query($sql);
        $users=[];
        while($row = $result->fetch_assoc()){
            $users[]=$row;
        }
        return $users;
    }

    public function getUserByEmail($email,$password){
        $sql = "SELECT * FROM user where email=? and passworduser=?";
        $stmt= $this->connection->prepare($sql);
        $emailT=$this->connection->real_escape_string($email);
        $passwordT=$this->connection->real_escape_string($password);
        $stmt->bind_param('ss',$emailT,$passwordT);
        $stmt->execute();
        $result = $stmt->get_result();
        $user=[];
        while($row = $result->fetch_assoc()){
            $user[]=$row;
        }
        return $user;
    }

    public function __destruct(){
        $this->connection->close();
    }
}
?>