<?php
class ClientController
{

    var $clientModel;

    public function __construct()
    {
        require_once('models/ClientModel.php');
        $this -> clientModel = new ClientModel();
    }

    public function listClients() {

        $result = $this -> clientModel -> listClients();

        $arrayClients = array();

        while($client = $result -> fetch_assoc()){
            array_push($arrayClients, $client);    
        }

        header('Contet-Type: application/json');
        echo json_encode($arrayClients);

    }

    public function listClient($idClient) {
        $result = $this -> clientModel -> listClient($idClient);
        if($client = $result -> fetch_assoc()){
            header('Contet-Type: application/json');
            echo json_encode($client);
        }else {
            header('Contet-Type: application/json');
            echo ('{"mensage":"Cliente não encontrado"}');
        }
    }

    public function createClient() {
        $client = json_decode(file_get_contents('php://input'));
        $arrayClient['name'] = $client -> name;
        $arrayClient['email'] = $client -> email;
        $arrayClient['phone'] = $client -> phone;
        $arrayClient['address'] = $client -> address;
        
        $idClient = $this -> clientModel -> createClient($arrayClient);

        $this -> listClient($idClient);
    }

    public function updateClient($idClient){

        $client = json_decode(file_get_contents('php://input'));
        $arrayClient['id'] = $idClient;
        $arrayClient['name'] = $client -> name;
        $arrayClient['email'] = $client -> email;
        $arrayClient['phone'] = $client -> phone;
        $arrayClient['address'] = $client -> address;

        $idClient = $this ->clientModel->updateClient($arrayClient);

        $this->listClient($idClient);
    }

    public function deleteClient($idClient) {
        $result = $this -> clientModel -> deleteClient($idClient);

        $this -> listClient($idClient);
        
    }
}
?>