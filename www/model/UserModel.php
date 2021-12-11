<?php

    class UserModel {
        var $conn;

        function __construct() {
            require_once('services/ConnectionService.php');
            $Oconn = new ConnectionService();
            $Oconn -> openConnection();
            $this -> conn = $Oconn -> getConnection();
        }

        public function create($arrayUser) {
            $sql = "INSERT INTO usuario (nome, email, senha) 
                    VALUES (
                        '{$arrayUser['name']}',
                        '{$arrayUser['email']}',
                        '{$arrayUser['password']}'
                        );";

            $this -> conn -> query($sql);
            return $this -> conn -> insert_id;
        }

        public function getUser($email) {
            $sql = "SELECT * FROM usuario WHERE email = '{$email}'"; 

            return $this -> conn -> query($sql);
        }
    }

?>