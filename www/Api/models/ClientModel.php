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

    public function listClient($id){

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

        $this->connection->query($sql);

        return $this -> connection -> insert_id;
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

        $this->connection->query($sql);

        return $arrayClient['idClient'];
    }

    public function deleteClient($id) {
        $sql = "DELETE FROM clients WHERE idClient = {$id}";


        return $this -> connection -> query($sql);
    }

}
