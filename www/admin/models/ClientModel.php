<?php

class ClientModel
{

    var $connection;

    public function __construct()
    {
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass->openConnect();
        $this->connection = $connectClass->getConn();
    }

    public function listClients()
    {

        $sql = 'SELECT * FROM clients';

        return $this->connection->query($sql);
    }

    public function getClient($id){

        $sql = "SELECT * FROM clients WHERE idClient = {$id}";

        return $this->connection->query($sql);

    }

    public function createClient($arrayClient)
    {

        $sql = "INSERT INTO clients(name, phone, email, address) 
                VALUES(
                    '{$arrayClient['name']}', 
                    '{$arrayClient['phone']}', 
                    '{$arrayClient['email']}', 
                    '{$arrayClient['address']}'
                )";

        return $this->connection->query($sql);
    }

    public function updateClient($arrayClient){
        $sql = "UPDATE clients 
                SET
                    name='{$arrayClient['name']}',
                    email='{$arrayClient['email']}',   
                    phone='{$arrayClient['phone']}', 
                    address='{$arrayClient['address']}'
                WHERE
                    idClient = {$arrayClient['idClient']}
                ";

        return $this->connection->query($sql);
    }

    public function deleteClient($id) {
        $sql = "DELETE FROM clients WHERE idClient = {$id}";


        return $this -> connection -> query($sql);
    }

}
