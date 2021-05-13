<?php

class ConnectClass
{
    var $conn;

    public function openConnect()
    {
        $servername = 'docker_db_1';
        $userName = 'root';
        $password = 'test';
        $dbName = 'pw_exemple';

        $this -> conn = new mysqli($servername, $userName, $password, $dbName);

        if($this -> conn -> connect_error){
            die('Conexão com o banco falhou -> ').$this -> conn -> connect_error;
        }
    }

    public function getConn() {
        return $this -> conn;

    }
}
?>