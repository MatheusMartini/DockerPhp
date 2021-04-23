<?php
class ClientController
{

    public function index()
    {
    }

    public function register()
    {
        require_once('views/templates/header.php');
        require_once('views/client/register.php');
        require_once('views/templates/footer.php');
    }

    public function registerView()
    {

        if (isset($_POST['accept'])) {
            $accept = true;
            $acceptView = 'Termo aceito';
        } else {
            $accept = false;
            $acceptView = 'Termo não aceito';
        }

        if($_POST['gender'] == 'male'){
            $newGender = 'Masculino';
        }else if($_POST['gender'] == 'female'){
            $newGender = 'Feminino';
        }else {
            $newGender = 'Outro';
        }

        $arrayClient = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'login' => $_POST['login'],
            'phone' => $_POST['phone'],
            'aboutYou' => $_POST['aboutYou'],
            'contentSelect' => $_POST['contentSelect'],
            'gender' => $newGender,
            'accept' => $accept,
            'acceptView' => $acceptView

        );

        require_once('views/templates/header.php');
        require_once('views/client/registerView.php');
        require_once('views/templates/footer.php');
    }

    public function listClients(){
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();
        $result = $clientModel -> listClients();
        
        $arrayClients = array();

        while($client = $result -> fetch_assoc()){
            array_push($arrayClients, $client);
        }
        
        require_once('views/templates/header.php');
        require_once('views/client/listClients.php');
        require_once('views/templates/footer.php');     

    }
}