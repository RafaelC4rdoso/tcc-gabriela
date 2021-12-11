<?php

class ConnectionService{
    var $conn;

    public function openConnection() {
        $serverName = 'db';
        $username = 'root';
        $password = 'test';
        $dbName = 'smt';

        $this -> conn = new mysqli($serverName, $username, $password, $dbName);


        if ($this -> conn -> connect_error) {
            die("Conexão com o banco de dados falhou ->". $this -> conn -> connect_error);
        }
    }

    public function getConnection(){
        return $this -> conn;
    }
}