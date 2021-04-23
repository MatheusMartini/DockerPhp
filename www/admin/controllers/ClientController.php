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

        require_once('views/templates/header.php');
        require_once('views/client/listClients.php');
        require_once('views/templates/footer.php');

    }

    public function createClients() {
        require_once('views/templates/header.php');
        require_once('views/client/createClients.php');
        require_once('views/templates/footer.php');
    }

    public function createClientAction() {
        $arrayClient['name'] = $_POST['name'];
        $arrayClient['email'] = $_POST['email'];
        $arrayClient['phone'] = $_POST['phone'];
        $arrayClient['address'] = $_POST['address'];

        $result = $this -> clientModel -> createClient($arrayClient);

        header('Location: ?controller=client&action=listClients');
    }

    public function updateClient($id) {
        $result = $this -> clientModel -> getClient($id);
        if($arrayClient = $result -> fetch_assoc()){
            require_once('views/templates/header.php');
            require_once('views/client/updateClient.php');
            require_once('views/templates/footer.php');
        }
    }

    public function updateClientAction($id){
        $arrayClient['idClient'] = $id;
        $arrayClient['name'] = $_POST['name'];
        $arrayClient['email'] = $_POST['email'];
        $arrayClient['phone'] = $_POST['phone'];
        $arrayClient['address'] = $_POST['address'];

        $result = $this ->clientModel->updateClient($arrayClient);

        header('Location: ?controller=client&action=listClients');
    }

    public function deleteClient($id) {
        $result = $this -> clientModel -> deleteClient($id);

        header('Location: ?controller=client&action=listClients');
    }
}